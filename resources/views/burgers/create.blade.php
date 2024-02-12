@extends('layouts.app')

@section('content')
<div class="item-page">
    <div class="container item-page-container">
      <div class="item-title">
        <img src="/images/burger-product.png" alt="" class="item-image" />
        <h1>Order Here...</h1>
      </div>

      <form action="/burgers" method="POST" autocomplete="off">
        @csrf
        <div class="form-group">
          <label for="name">Name: </label>
          <input type="text" name="name" id="" placeholder="Enter your name"/>
        </div>

        <div class="form-group">
          <label for="type">Type Of Burger:</label>
          <select name="type" id="">
            <option value="Normal Burger">Normal Burger</option>
            <option value="Cheese Burger">Cheese Burger</option>
            <option value="Bacon Burger">Bacon Burger</option>
            <option value="Veggie Burger">Veggie Burger</option>
            <option value="Chicken Burger">Chicken Burger</option>
            <option value="Fish Burger">Fish Burger</option>
          </select>
        </div>

        <div class="form-group">
          <label for="additional-toppings">Additional Toppings: </label>
          <div>
            <input type="checkbox" name="toppings[]" value="Lettuce" />
            <label for="">Lettuce</label>
            <br />

            <input type="checkbox" name="toppings[]" value="Tomato" />
            <label for="">Tomato</label>
            <br />

            <input type="checkbox" name="toppings[]" value="Onion" />
            <label for="">Onion</label>
            <br />

            <input type="checkbox" name="toppings[]" value="Pickles" />
            <label for="">Pickels</label>
            <br />
          </div>
        </div>

        <div class="form-group">
          <input type="submit" value="Submit" />
        </div>
      </form>
      <a href="/" class="back-button"><- Back</a>
    </div>
  </div>
@endsection