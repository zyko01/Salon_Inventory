@extends('layouts.master')


@section('content')

<div class="row">
<h2 style="margin-bottom: 20px;">Create New Excess Product</h2>
    <div class="col-md-12">
        {!! Form::open(['route'=>'excess.store' , 'method'=>'POST']) !!}
            @include('excess.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection