@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Show Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rebottleproducts.index') }}"><i class="fa fa-arrow-left"></i></a>
        </div>
    </div>
        
    <div class="col-md-12">
    {{ $rebottle->id }}
    {{ $rebottle->product->product_name }}
    </div>
</div> 



@endsection