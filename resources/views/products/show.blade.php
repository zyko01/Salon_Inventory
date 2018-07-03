@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Show Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i></a>
        </div>
    </div>
  <p></p>  
    <!-- @foreach( $data as $val )
        <p>{{ $val->product }}</p>
        <p>{{ $val->total }}</p>
        <p>{{ $product->product_quantity }}</p>
    @endforeach -->
        <p class="text-center">{{ $product->product_name }}</p>
        <p>Quantity left {{ $product->product_quantity }}</p>
       
    <div class="col-md-12">
    @foreach( $product->rebottle as $value )  
        <p>rebottle id {{ $value->id }}</p>
        <p>{{ $value->quantity_use }}</p>
        <p>{{ $product->product_quantity }}</p>
        @endforeach
    </div>
</div> 



@endsection