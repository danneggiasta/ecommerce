@extends('layouts.master')

@section('title')
    PC SHOP
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mt-5">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item justify-content-between">
							<strong>{{ $product['item']['title'] }}</strong>
							<span>${{ $product['price'] }}</span>
							<div class="btn-group">
								<button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Action <span class="carret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
									<li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
								</ul>
							</div>
							<span class="badge badge-pill badge-default">{{ $product['qty'] }}</span>
						</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mt-5">
				<strong>Total: ${{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mt-5">
				<a href="{{ route('checkout') }}"><button type="button" class="btn btn-success">Checkout</button></a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3 mt-5">
				<h2>No items in cart</h2>
			</div>
		</div>
	@endif
@endsection