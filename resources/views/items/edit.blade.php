@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        {!! Form::model($item,['route'=>['items.update', $item->id], 'method'=> 'PATCH']) !!}
            @include('items.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection