@extends('layouts.master')

@section('title')
    PC SHOP | SignIn
@endsection

@section('content')

<div class="row">
	<div class="mt-5 col-lg-6 offset-lg-3 col-md-6 offset-md-3">
		<h1>User Profile</h1>
		<hr>
		<h2>My Orders</h2>
		<br><br>
		@foreach($orders as $order)
		<div class="card">
  			<div class="card-header">
    			<ul class="list-group list-group-flush">
    				@foreach($order->cart->items as $item)
				    	<li class="list-group-item justify-content-between">
				    		{{ $item['item']['title']}} |  {{ $item['qty'] }} Units
				    		<span class="badge badge-pill badge-default">${{ $item['price'] }}</span>
				    	</li>
				    @endforeach
				</ul>
  			</div>
  			
  			<div class="card-block">
    			<strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
		    </div>
		</div>
		<br><br>
		@endforeach
	</div>
</div>

@endsection