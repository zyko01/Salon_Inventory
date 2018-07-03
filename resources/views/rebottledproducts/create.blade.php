@extends('layouts.app')


@section('content')

<div class="row">
<h2 style="margin-bottom: 20px;">Create New Rebottle Product</h2>
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(['route'=>'rebottledproducts.store' , 'method'=>'POST']) !!}
            @include('rebottledproducts.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection