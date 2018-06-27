@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-md-12">
        {!! Form::open(['route'=>'items.store' , 'method'=>'POST']) !!}
            @include('items.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection