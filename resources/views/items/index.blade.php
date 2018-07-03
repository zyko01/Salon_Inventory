@extends('layouts.master')

@section('content')
<div class="container">
<h2>Items Inventory</h2>

    @if ( $message = Session::get('success') )
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped">
        <tr>
            <th>Item Name</th>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Item Status</th>
            <th>Item Cost</th>
            <th>Total Item Cost</th>
            <th>Date Created</th>
            <th class="text-left">
                <a href="{{ route('items.create') }}" class="btn btn-success btn-small">
                    <i class="fas fa-plus"></i>
                </a>
            </th>
        </tr>

        @foreach($item as $key => $value)
        <?php $total = 0; $total = $value->item_cost * $value->item_quantity; ?>
        <tr>
            <td>{{ $value->item_name}}</td>
            <td>{{ $value->item_description }}</td>
            <td>{{ $value->item_quantity }}</td>
            <td>{{ $value->item_status }}</td>
            <td>&#8369; {{ $value->item_cost }}</td>
            <td><strong>&#8369; {{ $total }}</strong></td>
            <td>{{ $value->created_at->format('M d, Y') }}</td>
            <td style="width: 400px;">
                <a class="btn btn-info btn-sm" href="{{ route('items.show', $value->id) }}">
                    <i class="fas fa-th-large"></i>
                </a>

                <a class="btn btn-primary btn-sm" href="{{ route('items.edit', $value->id) }}">
                    <i class="fas fa-edit"></i>
                </a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['items.destroy', $value->id], 'style'=>'display:inline' ]) !!}
                    <button type="submit" style="display:inline;" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach

    </table>
    {{ $item->links() }}

</div>
@endsection
