@extends('layouts.app')

@section('content')
<div class="container-fluid">
<h2>Products Inventory</h2>
<table class="table table-striped">
        <tr>
            <th>Product ID</th>
            <th>Brand</th>
            <th>Description</th>
            <th>Product Category</th>
            <th>Product Type</th>
            <th>Color no.</th>
            <th>Product Quantity</th>
            <th>Product Cost</th>
            <th>Remarks</th>
            <th>Expiration Date</th>
            <th>Date Delivered</th>
            <th class="text-left">
                <a href="{{ route('products.create') }}" class="btn btn-success btn-small">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>

        @foreach($product as $key => $value)
        <?php $total = 0; $total = $value->product_cost * $value->product_quantity; ?>
        <tr>
            <td>{{ $value->product_name}}</td>
            <td>{{ $value->product_description }}</td>
            <td>{{ $value->product_category }}</td>
            <td>{{ $value->product_type }}</td>
            <td>{{ $value->color_no }}</td>
            <td>{{ $value->product_quantity }}</td>
            <td>{{ $value->product_cost }}</td>
            <td>{{ $value->remarks }}</td>
            <td>{{ $value->expiration }}</td>
            <td>{{ $value->date_delivered }}</td>
            <td style="width: 400px;">
                <a class="btn btn-info btn-sm" href="{{ route('products.show', $value->id) }}">
                    <i class="glyphicon glyphicon-th-large"></i>
                </a>

                <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $value->id) }}">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $value->id], 'style'=>'display:inline' ]) !!}
                    <button type="submit" style="display:inline;" class="btn btn-danger btn-sm">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
</table>
</div>
@endsection