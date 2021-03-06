@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h2>Products Inventory</h2>

@if ( $message = Session::get('success') )
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-striped">
        <tr>
            <th style="width: 40px;">Product Id</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Product Category</th>
            <th style="width: 170px;">Product Type</th>
            <th>Color no.</th>
            <th>Product Quantity</th>
            <th>Product Cost</th>
            <th style="width: 70px;">Remarks</th>
            <th style="width: 170px;">Total Cost</th>
            <th style="width: 150px;">Expiration Date</th>
            <th style="width: 150px;">Date Delivered</th>
            <th class="text-left"><strong>
                <a href="{{ route('products.create') }}" class="btn btn-success btn-small">
                    <i class="fas fa-plus"></i>
                </a>
            </strong>
            </th>
        </tr>
      
        @foreach($product as $key => $value)
        <?php $total = 0; $total = $value->product_cost * $value->product_quantity; 
        ?>
        <tr>
            <td style="width: 100px;">{{ $value->id }}</td>
            <td>{{ $value->product_name}}</td>
            <td style="width: 350px;">{{ $value->product_description }}</td>
            <td style="width: 150px;">{{ $value->product_category }}</td>
            <td>{{ $value->product_type }}</td>
            <td>{{ $value->color_no }}</td>
            <td>{{ $value->product_quantity }}</td>
            <td>&#8369; {{ $value->product_cost }}</td>
            <td>{{ $value->remarks }}</td>
            <td style="width: 150px;"><strong>&#8369; {{ $total }}</strong></td>
            <td>{{ $value->expiration }}</td>
            <td>{{ $value->date_delivered }}</td>
            <td style="width: 800px;">
                <a class="btn btn-info btn-sm" href="{{ route('products.show', $value->id) }}">
                    <i class="fa fa-th-large"></i>
                </a>

                <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $value->id) }}">
                    <i class="fa fa-edit"></i>
                </a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $value->id], 'style'=>'display:inline' ]) !!}
                    <button type="submit" style="display:inline;" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
</table>
{{ $product->links() }}
</div>
@endsection