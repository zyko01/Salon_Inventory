@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2 style="margin-bottom: 30px;">Edit Rebottle Product</h2>
        {!! Form::open(['route'=>['rebottleproducts.update', $rebottle->id ] , 'method'=>'PATCH']) !!}
            @include('rebottleproducts.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection