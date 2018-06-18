@extends('layouts.app')

@section('content')
<div class="container">
<h2>Items Inventory</h2>

    <table class="table table-striped">
        <tr>
            <th>Item Name</th>
            <th>Item Description</th>
            <th>Item Status</th>
            <th>Item Cost</th>
            <th class="text-left">
                <a href="{{ route('items.create') }}" class="btn btn-success btn-small">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>

        @foreach($item as $key => $value)
        <tr>
            <td>{{ $value->item_name}}</td>
            <td>{{ $value->item_description }}</td>
            <td>{{ $value->item_status }}</td>
            <td>{{ $value->item_cost }}</td>
            <td style="width: 400px;">
                <a class="btn btn-info btn-sm" href="{{ route('items.show', $value->id) }}">
                    <i class="glyphicon glyphicon-th-large"></i>
                </a>

                <a class="btn btn-primary btn-sm" href="{{ route('items.edit', $value->id) }}">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['items.destroy', $value->id], 'style'=>'display:inline' ]) !!}
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
