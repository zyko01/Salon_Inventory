@extends('layouts.master')


@section('content')

<div class="row">
    <h2 style="margin-bottom: 20px;">Create New Item</h2>
    <div class="col-md-12">
        {!! Form::open(['route'=>'items.store' , 'method'=>'POST']) !!}
            @include('items.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection