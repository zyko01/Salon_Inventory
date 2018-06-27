@extends('layouts.master')

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
</div> 

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="form-group">
            <strong>Item Name: </strong>
                {{ $item->item_name }}
        </div>
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="form-group">
            <strong>Item description: </strong>
                {{ $item->item_description }}
        </div>
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="form-group">
            <strong>Quantity: </strong>
                {{ $item->item_quantity }}
        </div>
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="form-group">
            <strong>Item Status: </strong>
                {{ $item->item_status }}
        </div>
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="form-group">
            <strong>Item Cost: </strong>
                {{ $item->item_cost }}
        </div>
    </div>
</div>

@endsection