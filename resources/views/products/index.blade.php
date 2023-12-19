@extends('layouts.main')

@section('content')
<div class="container-fluid px-5">
    <div class="px-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('storage/20x.png') }}" class="card-img-top" alt="Product Image"  style="height: 515px; border-radius: 30px" >
                </div>
                <div class="col-md-4">
                    <div class="row d-flex" style="flex-direction: column;height: 100%">
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('storage/3x.png') }}" class="card-img-top" alt="Product Image" style="height: 250px; width: 450px; border-radius: 30px"> 
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('storage/22.png') }}" class="card-img-top" alt="Product Image"  style="height: 250px; width: 450px; border-radius: 30px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column h-100 mt-5 px-5">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="far fa-copyright fa-2x features-card-item-border" ></i>
                            </div>
                            <h3>Deals</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                    <div class="features-card-item style-1 text-center">
                        <div class="icon d-flex justify-content-center mb-3">
                            <i class="fa fa-truck fa-2x features-card-item-border"></i>
                        </div>
                        <h3>Charger</h3>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                    <div class="features-card-item style-1 text-center">
                        <div class="icon d-flex justify-content-center mb-3">
                            <i class="fa fa-dollar-sign fa-2x features-card-item-border"></i>
                        </div>
                        <h3>Parts</h3>
                    </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="fa fa-truck fa-2x features-card-item-border"></i>
                            </div>
                            <h3>Cables</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="fa fa-truck fa-2x features-card-item-border"></i>
                            </div>
                            <h3>Headphones</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="features-card-item style-1 text-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <i class="fa fa-truck fa-2x features-card-item-border"></i>
                            </div>
                            <h3>Cases</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-md-12 d-flex">
                    <div style="width: 100%; border-bottom: 1px solid #bcbcbc;;"></div>
                </div>
            </div>
            <div class="row px-2 pt-4" style="background-color: #f5f5f5; border-radius: 30px">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <tbody>
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-2 col-md-6 col-12 mb-3">
                                <div class="card pt-4" style="border-radius: 20px; border: 1px solid white;">
                                    <div class="features-card-item style-1 text-center">
                                        <div class="icon d-flex justify-content-center mb-3">
                                            <img src="{{ asset('storage/'.$product->id.'.jpeg') }}" class="card-img-top" alt="Product Image" style="height:100px; width: 100px">
                                        </div>
                                        <div class="card-body">
                                            <h2 class="card-title">{{ $product->name }}</h2>
                                            <h3 style="color: #f67812; font-weight:bold">${{ number_format($product->price, 2) }}</h3>
                                            <p class="text-muted"><i class="fa fa-star me-1" style="color: #f67812;"></i>5.0 | 99 Sold</p>
                                            <form action="{{ route('addToCart', ['product' => $product->id]) }}" method="post">
                                                @csrf
                                                <button type="submit" class="orange-color px-4 rounded rounded-5 text-white py-2" style="border: 1px solid #f67812; font-weight:bolder"><i class="fa fa-cart-plus me-2" aria-hidden="true"></i>Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
@endsection
  
