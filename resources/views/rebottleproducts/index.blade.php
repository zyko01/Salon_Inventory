
@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h2>Rebottled Products Inventory</h2>

@if ( $message = Session::get('success') )
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-striped">
        <tr>
            <th>Rebottled ID</th>
            <th>Product ID</th>
            <th>Brand</th>
            <th>Product Quantity</th>
            <th>Product Quantity Used</th>
            <!-- <th>Product Left</th> -->
            <th>Produce Bottle</th>
            <th>Designation</th>
            <th class="text-left">
                <a href="{{ route('rebottleproducts.create') }}" class="btn btn-success btn-small">
                    <i class="fas fa-plus"></i>
                </a>
            </th>
        </tr>

        @foreach($rebottle as $key => $value)
        <?php  $value->product->product_quantity = $value->product->product_quantity - $value->quantity_use; 
        
        ?>
        <tr>
            <td style="width: 100px;">{{ $value->id }}</td>
            <td>{{ $value->product_id }}</td>
            <td>{{ $value->product->product_name }}</td>
            <td>{{ $value->product->product_quantity }}</td>
            <td>{{ $value->quantity_use }}</td>
            <td>{{ $value->produce_bottle }}</td>
            <td>{{ $value->designation }}</td>
            

            <td style="width: 400px;">
                <a class="btn btn-info btn-sm" href="{{ route('rebottleproducts.show', $value->id) }}">
                    <i class="fa fa-th-large"></i>
                </a>

                <!-- <a class="btn btn-primary btn-sm" href="{{ route('rebottleproducts.edit', $value->id) }}">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a> --> 

                {!! Form::open(['method' => 'DELETE', 'route' => ['rebottleproducts.destroy', $value->id], 'style'=>'display:inline' ]) !!}
                    <button type="submit" style="display:inline;" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
</table>
{{ $rebottle->links() }}
</div>
@endsection