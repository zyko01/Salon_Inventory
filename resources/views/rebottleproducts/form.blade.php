

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product id', 'Product ID' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_id') ? 'has_errors' : "" }}>
        
            {!! Form::select('product_id',  $product,null,['class'=>'form-control']) !!}
            {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
        
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('quantiy use', 'Quantity Use' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('quantity_use') ? 'has_errors' : "" }}>
            {!! Form::number('quantity_use', NULL,['class'=>'form-control', 'id'=>'quantity_use', ]) !!}
            {!! $errors->first('quantity_use', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('bottle produce', 'Bottle Produce' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('produce_bottle') ? 'has_errors' : "" }}>
            {!! Form::number('produce_bottle', NULL,['class'=>'form-control', 'id'=>'produce_bottle', ]) !!}
            {!! $errors->first('produce_bottle', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('designation', 'Designation' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('designation') ? 'has_errors' : "" }}>
            {!! Form::select('designation',array('select' => '-SELECT-','reception' => 'RECEPTION', 'office' => 'OFFICE', 'stock room' => 'STOCK ROOM'),'-SELECT-',['class'=>'form-control']) !!}
            {!! $errors->first('product_category', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>



<div class="row" style="padding:15px 10px 0 10px;">
    <div class="form-group pull-left">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=>'btn btn-success' ,'type'=>'submit']) !!}
    </div>

    <div class="form-group pull-right">
    <a class="btn btn-danger" href="{{ route('products.index') }}">Cancel</a>
    </div>
</div>