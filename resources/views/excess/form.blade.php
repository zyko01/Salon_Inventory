

<!-- <div class="row">
    <div class="col-sm-2">
        {!! form::label('rebottle id', 'Rebottle ID' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('rebottle_id') ? 'has_errors' : "" }}>
        
            {!! Form::select('rebottle_id',  $rebottle,null,['class'=>'form-control']) !!}
            {!! $errors->first('rebottle_id', '<p class="help-block">:message</p>') !!}
        
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-sm-2">
        {!! form::label('rebottle id', 'Rebottle ID' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('rebottle_id') ? 'has_errors' : "" }}>
            {!! Form::number('rebottle_id', NULL,['class'=>'form-control', 'id'=>'rebottle_id', ]) !!}
            {!! $errors->first('rebottle_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('excess bottle / ml', 'Excess Bottle / ml' ) !!}
    </div>

    <div class="col-sm-10">
        <div class="form-group" {{ $errors->has('excess_bottle') ? 'has_errors' : "" }}>
            {!! Form::number('excess_bottle', NULL,['class'=>'form-control', 'id'=>'excess_bottle', ]) !!}
            {!! $errors->first('excess_bottle', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>



<div class="row" style="padding:15px 10px 0 10px;">
    <div class="form-group pull-left">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=>'btn btn-success' ,'type'=>'submit']) !!}
    </div>

    <div class="form-group pull-right">
    <a class="btn btn-danger" href="{{ route('excess.index') }}">Cancel</a>
    </div>
</div>