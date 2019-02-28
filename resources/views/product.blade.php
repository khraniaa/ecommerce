@extends('layouts.app')

@section('content')

<section id="products">  
<div class="card-deck">
@foreach($products as $product)
<div class="col-4" style=" margin-bottom:1em;">
  <div class="card" style="width:350px; height:800px !important;">
    <img src="/{{$product->pathImage}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->nom}} </h5>
      <p class="card-text">{{$product->description}} .</p>
    </div>
    <div class="card-footer">
      <a href="/panier" class="btn btn-outline-dark" style="text-align:center;">Ajouter Au panier</a>
    </div>
    </div>
  </div>
 @endforeach
</div>>
    
</section>
@endsection