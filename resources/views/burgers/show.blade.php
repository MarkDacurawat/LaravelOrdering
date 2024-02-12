@extends('layouts.app')

@section('content')
<div class="view-page">
    <div class="container view-page-container">
      <h1>Order for {{ $burger->name }}</h1>
      <div class="description">
        <p><label for="">Type of Burger: </label> {{ $burger->type }}</p>
        <div>
          <label for="">Extra Toppings:</label>
          <ul>
            @foreach($burger->toppings as $topping)
              <li>{{ $topping }}</li>
            @endforeach
          </ul>
        </div>
        <form action="/burgers/{{ $burger->id }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Order Complete" />
        </form>
        <a href="/burgers" class="back-to-order"><- Back to all orders</a>
      </div>
    </div>
  </div>
@endsection