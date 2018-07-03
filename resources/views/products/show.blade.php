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

    <div class="col-md-8 col-md-offset-2 wrap">
        <div class="panel panel-info">
            <div class="panel-heading">
                {{ $product->product_name }}
            </div>

            <div class="panel-body">
               
                @foreach( $product->rebottle as $value )  
                <ul class="listholdeer">
                    <li><strong>rebottle id</strong> {{ $value->id }}</li>
                    <li><strong>Quantity Use</strong> {{ $value->quantity_use }}</li>
                </ul>
                   
                @endforeach
    
            </div>
        </div>
    
    
    </div>
</div> 



@endsection