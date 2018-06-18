@extends('layouts.app')

@section('content')
<div class="container">
<h2>HTML Table</h2>

<table class="table table-striped">
<thead> 
 @foreach($data as $user)
  <tr>    
    <th>{{$user->email}}</th>
  </tr>
@endforeach
</thead>
<tbody>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>john@example.com</td>
  </tr>
  <tr>
    <td>Mary</td>
    <td>Moe</td>
    <td>mary@example.com</td>
  </tr>
  <tr>
    <td>July</td>
    <td>Dooley</td>
    <td>july@example.com</td>
  </tr>
</tbody>
</table>
</div>
</div>
@endsection
