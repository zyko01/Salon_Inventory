@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(['route'=>'items.store' , 'method'=>'POST']) !!}
            @include('items.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection