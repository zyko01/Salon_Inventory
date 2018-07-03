@extends('layouts.master')


@section('content')

<div class="row">
<h2 style="margin-bottom: 20px;">Create New Rebottle Product</h2>
    <div class="col-md-12">
        {!! Form::open(['route'=>'rebottleproducts.store' , 'method'=>'POST']) !!}
            @include('rebottleproducts.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection