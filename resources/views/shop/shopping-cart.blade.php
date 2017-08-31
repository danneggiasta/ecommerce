@extends('layouts.master')

@section('title')
    PC SHOP
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 mx-auto mt-5">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <strong>
                                <div><h2>{{ $product['item']['title'] }}</h2></div>
                            </strong>
                            <div><span>Price: <strong>${{ $product['price'] }}</strong></span>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown">Action
                                    <span class="carret"></span></button>
                                <ul class="dropdown-menu mt-1 pl-3 border-dark">
                                    <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce
                                            by 1</a></li>
                                    <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce
                                            All</a></li>
                                </ul>
                            </div>
                            <span>Quantity: <strong>{{ $product['qty'] }}</strong></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 mx-auto mt-5">
                <strong>Total: ${{ $totalPrice }}</strong>
                <hr>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 mx-auto">
                <a href="{{ route('checkout') }}">
                    <button type="button" class="btn btn-success">Checkout</button>
                </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 mx-auto mt-5">
                <h2>No items in cart</h2>
            </div>
        </div>
    @endif
@endsection