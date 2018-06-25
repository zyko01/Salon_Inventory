
@extends('layouts.app')

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
            <th>Product quantity used</th>
            <th>Produce Bottle</th>
            <th>Designation</th>
            <th class="text-left">
                <a href="{{ route('rebottleproducts.create') }}" class="btn btn-success btn-small">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>

        @foreach($rebottle as $key => $value)
        <tr>
            <td style="width: 100px;">{{ $value->id }}</td>
            <td>{{ $value->product_id }}</td>
            <td>{{ $value->quantity_use }}</td>
            <td>{{ $value->produce_bottle }}</td>
            <td>{{ $value->designation }}</td>

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