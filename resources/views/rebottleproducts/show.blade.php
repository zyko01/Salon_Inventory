@extends('layouts.master')

@section('content')

<div class="row">
<div class="col-lg-12">
    <div class="pull-left">
        <h2>Show Item</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('rebottleproducts.index') }}"><i class="fa fa-arrow-left"></i></a>
    </div>
</div>

<div class="col-md-8 col-md-offset-2 wrap">
    <div class="panel panel-info">
        <div class="panel-heading">
           <strong> Rebottle ID {{ $rebottle->id }} </strong>
        </div>

        <div class="panel-body">
   
            <ul class="listholder">
                <li><strong>Excess ID:</strong> {{ $rebottle->excess->id }}</li>
                <li><strong>Excess Bottle:</strong> {{ $rebottle->excess->excess_bottle }}</li>
                <li><strong>Created at:</strong> {{ $rebottle->excess->created_at->format('M d, Y') }}</li>
            </ul>

        </div>
    </div>


</div>
</div> 
   
     
@endsection