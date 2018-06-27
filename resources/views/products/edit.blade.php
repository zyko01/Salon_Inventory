@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        {!! Form::model($product,['route'=>['products.update', $product->id], 'method'=> 'PATCH']) !!}
            @include('products.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection