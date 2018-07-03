@extends('layouts.master')


@section('content')

<div class="row">
<h2 style="margin-bottom: 20px;">Create New Product</h2>
    <div class="col-md-12">
        {!! Form::open(['route'=>'products.store' , 'method'=>'POST']) !!}
            @include('products.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection