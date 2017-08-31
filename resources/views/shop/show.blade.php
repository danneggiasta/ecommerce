@extends('layouts.master')

@section('title')
    PC SHOP
@endsection

@section('content')

    <div class="row">

        @include('partials.sidebar')

        <div class="col-lg-7 mt-5 mb-5">
            <div class="card">

                <div class="card-block">
                    <img class="card-img-top img-fluid  mb-2" src="{{ $product->imagePath }}" alt="">
                    <h4 class="card-title"><a
                                href="{{route('product.show', ['id' => $product->id])}}">{{ $product->title }}</a></h4>
                    <h5>$ {{ $product->price }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Category:</small>
                    <p>{{ $product->subcategory->name }}</p>
                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"
                       class="btn btn-success pull-right" role="button">Add to Cart</a>
                </div>
            </div>
        </div>

    </div>

@endsection