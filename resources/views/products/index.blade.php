@extends('layouts.main')

@section('content')
<div class="container">

    <div class="container mt-5">
        <h2>Product List</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <tbody>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/'.$product->id.'.jpeg') }}" class="card-img-top" alt="Product Image" style="height:200px; width: 250px">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $product->name }}</h2>
                                    <p class="card-title">{{ $product->description }}</p>
                                    <h1 class="card-text">${{ number_format($product->price, 2) }}</h1>
                                    <form action="{{ route('addToCart', ['product' => $product->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </tbody>
        </table>
    </div>

</div>
@endsection
  
