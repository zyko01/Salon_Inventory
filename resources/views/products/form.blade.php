<div class="row">
    <div class="col-sm-2">
        {!! form::label('brand', 'Brand' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_name') ? 'has_errors' : "" }}>
            {!! Form::select('product_name', Config::get('values.brands'),'SELECT',['class'=>'form-control']) !!}
            {!! $errors->first('product_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product description1', 'Product Description1' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_description1') ? 'has_errors' : "" }}>
            {!! Form::text('product_description1', NULL,['class'=>'form-control', 'id'=>'product_description1', 'placeholder'=>'Product Description1']) !!}
            {!! $errors->first('product_description1', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product category', 'Product Category' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_category') ? 'has_errors' : "" }}>
            {!! Form::select('product_category',array('hair products' => 'HAIR PRODUCTS', 'nail products' => 'NAIL PRODUCTS', 'make up and cosmetics' => 'MAKE UP AND COSMETICS'),'SELECT',['class'=>'form-control']) !!}
            {!! $errors->first('product_category', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('color no', 'Color No' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('color_no') ? 'has_errors' : "" }}>
            {!! Form::number('color_no', NULL,['class'=>'form-control', 'id'=>'color_no', ]) !!}
            {!! $errors->first('color_no', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product description2', 'Product Description2' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_description2') ? 'has_errors' : "" }}>
            {!! Form::text('product_description2', NULL,['class'=>'form-control', 'id'=>'product_description2', 'placeholder'=>'Product Description']) !!}
            {!! $errors->first('product_description2', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product quantity', 'Product Quantity' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_quantity') ? 'has_errors' : "" }}>
            {!! Form::number('product_quantity', NULL,['class'=>'form-control', 'id'=>'product_quantity', ]) !!}
            {!! $errors->first('product_quantity', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('produce bottle', 'Produce Bottle' ) !!}
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
        {!! form::label('remarks', 'Remarks' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('remarks') ? 'has_errors' : "" }}>
            {!! Form::text('remarks', NULL,['class'=>'form-control', 'id'=>'remarks', 'placeholder'=>'Remarks']) !!}
            {!! $errors->first('remarks', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product status', 'Product Status' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_status') ? 'has_errors' : "" }}>
            {!! Form::select('product_status',array('in stock' => 'In Stock', 'out of stock' => 'Out of Stock'),'SELECT',['class'=>'form-control']) !!}
            {!! $errors->first('product_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('mfx', 'MFX' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('MFX') ? 'has_errors' : "" }}>
            {!! Form::text('MFX', NULL,['class'=>'form-control', 'id'=>'MFX', 'placeholder'=>'MFX']) !!}
            {!! $errors->first('MFX', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('expiration', 'Expiration' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('expiration') ? 'has_errors' : "" }}>
            {!! Form::date('expiration', NULL,['class'=>'form-control', 'id'=>'expiration' ]) !!}
            {!! $errors->first('expiration', '<p class="help-block">:message</p>') !!}
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