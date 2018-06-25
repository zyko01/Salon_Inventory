@foreach($rebottleproducts as $value)
<h1>{{ $value->product_id }}</h1>
<h1>{{ $value->quantity_use }}</h1>

<h1>{{ $value->product->product_name }}</h1>
<h1>{{ $value->product->product_quantity }}</h1>



@endforeach