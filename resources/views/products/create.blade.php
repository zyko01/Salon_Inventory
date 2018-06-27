@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-md-12">
        <h2 style="margin-bottom: 30px;">Create New Product</h2>
        {!! Form::open(['route'=>'products.store' , 'method'=>'POST']) !!}
            @include('products.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection