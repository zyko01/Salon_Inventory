@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Show Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('items.index') }}"><i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
    <!-- <p>{{ $product->rebottles }}</p> -->
    <div class="col-md-12">
        @foreach( $product->rebottles as $value )

        <p>rebottle id {{ $value->id }}</p>
        <p>{{ $value->quantity_use }}</p>

        @endforeach
    </div>
</div> 



@endsection