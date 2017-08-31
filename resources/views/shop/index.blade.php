@extends('layouts.master')

@section('title')
    PC SHOP
@endsection

@section('content')

    <div class="row">

        @include('partials.sidebar')
        @include('partials.carousel')

        @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif

        @foreach($products->chunk(3) as $productChunk)
            <div class="row">
                @foreach($productChunk as $product)

                <div class="col-lg-4 col-md-6 mb-4 p-2">
                    <div class="card h-100">

                        <div class="card-block p-2">
                            <img class="card-img-top mb-4" src="{{ $product->imagePath }}" alt="">
                            <h4 class="card-title"><a href="{{route('product.show', ['id' => $product->id])}}">{{ $product->title }}</a></h4>
                            <h5>$ {{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer p-2">
                            <small class="text-muted">{{ $product->subcategory->name }}</small>
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /.row -->

        @endforeach


    </div>
    <!-- /.row -->
@endsection