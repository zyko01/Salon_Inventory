@extends('layouts.app')

@section('content')
<div class="container-fluid">
<h2>Products Inventory</h2>
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Description 1</th>
            <th>Product Type</th>
            <th>Color #</th>
            <th>Description 2</th>
            <th>Quantity</th>
            <th>Produce Bottles / ML</th>
            <th>Remarks</th>
            <th>Status</th>
            <th>Designation</th>
            <th>MFX</th>
            <th>Expiration Date</th>
            <th>P/O</th>
            <th class="text-left">
                <a href="{{ route('products.create') }}" class="btn btn-success btn-small">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </th>
        </tr>
</table>
</div>
@endsection