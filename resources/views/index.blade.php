@extends('layouts.app')

@section('content')
<div class="main-page">
    <div class="container main-page-container">
      <img
        src="./images/burger-hero.png"
        alt="burger"
        class="burger-hero-image"
      />
      <h1 class="">MARKK BURGER</h1>
      <a href="/burgers/create" class="order-button">Order Now</a>
    </div>
</div>
@endsection