@extends('layouts.app')

@section('content')
<div class="orders-page">
    <div class="container orders-page-container">
      <h1>All Orders</h1>

      <div class="orders-list">
        @if ($orders->isEmpty())
                <p>No orders available.</p>
            @else
                @foreach ($orders as $order)
                    <div class="order">
                        <img
                            src="./images/burger-product.png"
                            alt=""
                            class="order-picture"
                        />
                        <a href="/burgers/{{ $order->id }}">{{ $order->name }}</a>
                    </div>
                @endforeach
            @endif
      </div>
    </div>
  </div>
@endsection