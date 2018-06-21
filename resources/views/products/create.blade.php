@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2 style="margin-bottom: 30px;">Create New Product</h2>
        {!! Form::open(['route'=>'products.store' , 'method'=>'POST']) !!}
            @include('products.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection