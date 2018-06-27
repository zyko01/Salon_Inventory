@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-md-12">
        <h2 style="margin-bottom: 30px;">Edit Rebottle Product</h2>
        {!! Form::open(['route'=>['rebottleproducts.update', $rebottle->id ] , 'method'=>'PATCH']) !!}
            @include('rebottleproducts.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection