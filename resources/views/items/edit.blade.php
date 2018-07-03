@extends('layouts.master')

@section('content')

<div class="row">
<h2 style="margin-bottom: 20px;">Edit Item</h2>
    <div class="col-md-12">
        {!! Form::model($item,['route'=>['items.update', $item->id], 'method'=> 'PATCH']) !!}
            @include('items.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection