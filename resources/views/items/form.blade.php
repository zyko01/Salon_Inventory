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
        {!! form::label('item cost', 'Item Cost' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('item_cost') ? 'has_errors' : "" }}>
            {!! Form::text('item_cost', NULL,['class'=>'form-control', 'id'=>'item_cost', 'placeholder'=>'Item Cost']) !!}
            {!! $errors->first('item_cost', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="form-group">
    {!! Form::button(isset($model)? 'update' : 'save', ['class'=>'btn btn-success' ,'type'=>'submit']) !!}
</div>