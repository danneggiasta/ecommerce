@extends('layouts.master')

@section('title')
    PC SHOP
@endsection

@section('content')
    <div class="row">
        @include('partials.sidebar')
        <div class="col-lg-8 col-xl-9 mt-5 ml-5">
            <h1 class="mb-5">{{ $subcategory->name }}</h1>
            @if(Session::has('success'))
                <div class="row">
                    <div class="col-sm-6 col-md-4 mx-auto">
                        <div id="charge-message" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">

                @foreach($subcategory->product as $sub)

                    <div class="col-xl-3 col-lg-6 col-sm-6 d-flex align-items-stretch mb-5">

                        <a href="{{route('product.show', ['id' => $sub->id])}}">
                            <div class="card">
                                <img class="card-img-top" src="{{ $sub->imagePath }}" alt="">

                                <div class="card-block">
                                    <h4 class="card-title">{{ $sub->title }}
                                    </h4>
                                    <h5>$ {{ $sub->price }}</h5>
                                    <p class="card-text">{{ $sub->description }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('product.addToCart', ['id' => $sub->id]) }}"
                                       class="btn btn-success pull-right" role="button">Add to Cart</a>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection