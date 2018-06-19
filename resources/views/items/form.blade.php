<div class="row">
    <div class="col-sm-2">
        {!! form::label('item name', 'Item Name' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('item_name') ? 'has_errors' : "" }}>
            {!! Form::text('item_name', NULL,['class'=>'form-control', 'id'=>'item_name', 'placeholder'=>'Item Name']) !!}
            {!! $errors->first('item_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('item description', 'Item Description' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('item_description') ? 'has_errors' : "" }}>
            {!! Form::text('item_description', NULL,['class'=>'form-control', 'id'=>'item_description', 'placeholder'=>'Item Description']) !!}
            {!! $errors->first('item_description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
<div class="col-sm-2">
    {!! form::label('item quantity', 'Item Quantity' ) !!}
</div>

<div class="col-sm-10">
    <div class="form-group" {{ $errors->has('item_quantity') ? 'has_errors' : "" }}>
        {!! Form::number('item_quantity', NULL,['class'=>'form-control', 'id'=>'item_quantity']) !!}
        {!! $errors->first('item_quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('item status', 'Item Status' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('item_status') ? 'has_errors' : "" }}>
            {!! Form::select('item_status',array('New' => 'new', 'Old' => 'old'),'New',['class'=>'form-control']) !!}
            {!! $errors->first('item_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('item cost', 'Item Cost' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('item_cost') ? 'has_errors' : "" }}>
            {!! Form::text('item_cost', NULL,['class'=>'form-control', 'id'=>'item_cost', 'placeholder'=>'Item Cost']) !!}
            {!! $errors->first('item_cost', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row" style="padding:15px 10px 0 10px;">
    <div class="form-group pull-left">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=>'btn btn-success' ,'type'=>'submit']) !!}
    </div>

    <div class="form-group pull-right">
    <a class="btn btn-danger" href="{{ route('items.index') }}">Cancel</a>
    </div>
</div>