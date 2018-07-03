@extends('layouts.master')

@section('content')

<div class="row">
<h2 style="margin-bottom: 20px;">Edit Product</h2>
    <div class="col-md-12">
        {!! Form::model($product,['route'=>['products.update', $product->id], 'method'=> 'PATCH']) !!}
            @include('products.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection