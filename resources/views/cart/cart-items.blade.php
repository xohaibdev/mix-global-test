@extends('layouts.main')

@section('content')
<div class="container">

    <div class="container mt-5">
        <h2>Items in Cart</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <table class="table">
            <tbody>
                <div class="row">
                    @if(count($cartItems) > 0)
                        @foreach($cartItems as $item)
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('storage/'.$item->product->id.'.jpeg') }}" class="card-img-top" alt="Product Image" style="height:200px; width: 250px">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$item->product->name }}</h2>
                                        <p class="card-title">{{$item->product->description }}</p>
                                        <h1 class="card-text">${{ number_format($item->product->price, 2) }}</h1>
                                        <h2 class="card-text">Quantity: {{$item->quantity}} </h2>

                                        <form action="{{ route('removeFromCart', ['product' => $item->product->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Your cart is empty.</p>
                    @endif
                </div>
            </tbody>
        </table>
    </div>

</div>
@endsection
  
