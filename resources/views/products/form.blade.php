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
    {!! form::label('product description', 'Product Description' ) !!}
</div>

<div class="col-sm-10">
    <div class="form-group" {{ $errors->has('product_description') ? 'has_errors' : "" }}>
        {!! Form::text('product_description', NULL,['class'=>'form-control', 'id'=>'product_description', 'placeholder'=>'Product Description']) !!}
        {!! $errors->first('product_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product category', 'Product Category' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_category') ? 'has_errors' : "" }}>
            {!! Form::select('product_category',array('select' => '-SELECT-','hair products' => 'HAIR PRODUCTS', 'nail products' => 'NAIL PRODUCTS', 'make up and cosmetics' => 'MAKE UP AND COSMETICS'),'-SELECT-',['class'=>'form-control']) !!}
            {!! $errors->first('product_category', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('product type', 'Product Type' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_type') ? 'has_errors' : "" }}>
            {!! Form::select('product_type',array('select' => '-SELECT-','hair color' => 'HAIR COLOR', 'creme peroxide' => 'CREME PEROXIDE', 'neutralizing creme' => 'NEUTRALIZING CREME',
                                                  'smoothing creme' => 'SMOOTHING CREME', 'hena wax' => 'HENA WAX', 'hair spa' => 'HAIR SPA',
                                                  'sensitised hair' => 'SENSITISED HAIR', 'color developer' => 'COLOR DEVELOPER', 'natural' => 'NATURAL', 
                                                  'mild' => 'MILD', 'intense' => 'INTENSE', 'emulsion' => 'EMULSION', 'intesive emulsion' => 'INTENSIVE EMULSION'),'-SELECT-',['class'=>'form-control']) !!}
            {!! $errors->first('product_type', '<p class="help-block">:message</p>') !!}
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
        {!! form::label('product cost', 'Product Cost' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('product_cost') ? 'has_errors' : "" }}>
            {!! Form::number('product_cost', NULL,['class'=>'form-control', 'id'=>'product_cost', ]) !!}
            {!! $errors->first('product_cost', '<p class="help-block">:message</p>') !!}
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
        {!! form::label('expiration', 'Expiration' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('expiration') ? 'has_errors' : "" }}>
            {!! Form::date('expiration', NULL,['class'=>'form-control', 'id'=>'expiration' ]) !!}
            {!! $errors->first('expiration', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-2">
        {!! form::label('date delivered', 'Date Delivered' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('date_delivered') ? 'has_errors' : "" }}>
            {!! Form::date('date_delivered', NULL,['class'=>'form-control', 'id'=>'date_delivered' ]) !!}
            {!! $errors->first('date_delivered', '<p class="help-block">:message</p>') !!}
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