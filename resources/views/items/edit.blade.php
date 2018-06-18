@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::model($item,['route'=>['items.update', $item->id], 'method'=> 'PATCH']) !!}
            @include('items.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection