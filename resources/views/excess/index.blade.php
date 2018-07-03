
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
            <th>Excess ID</th>
            <th>Rebottle ID</th>
            <th>Excess Quantity / ml</th>
            <th>Created at</th>
            <th class="text-left">
                <a href="{{ route('excess.create') }}" class="btn btn-success btn-small">
                    <i class="fas fa-plus"></i>
                </a>
            </th>
        </tr>

        @foreach($excess as $key => $value)
    
        <tr>
            <td style="width: 100px;">{{ $value->id }}</td>
            <td>{{ $value->rebottle_id }}</td>
            <td>{{ $value->excess_bottle }}</td>
            <td>{{ $value->created_at->format('M d, Y') }}</td>
            

            <td style="width: 400px;">
                <!-- <a class="btn btn-info btn-sm" href="{{ route('rebottleproducts.show', $value->id) }}">
                    <i class="glyphicon glyphicon-th-large"></i>
                </a>

                <a class="btn btn-primary btn-sm" href="{{ route('rebottleproducts.edit', $value->id) }}">
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
{{ $excess->links() }}
</div>
@endsection