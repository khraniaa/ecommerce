@extends('layouts.app')

@section('content')


                </div>-->
                <div class="container">
                  <div class="card">
                    <div style="text-align: center;" class="card-header">
                    Mon panier
                    </div>
                <?php
                foreach($list as $item){
                    echo '
                    
                  
                    <div class="card-body-pers">
                    <div class="container">
                    <div class="row">
                    
                    <div class="col-4">
                    <div class="card" style="width: auto; text-align: center;">
                    <img class="card-img-top" src="'. $item->pathImage.'" alt="Card image cap">
                    
                    </div>
                    </div>
                    
                    <div class="col-4 rania" >
                    
                    <label for="quantite-select"></label>
                    
                    <select>
                    <option value="">Quantité</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    </select>
                    
                    
                    <img src="img/su.png">
                    </div>
                    <div style="" class="col-4">
                    <h1>Bilan Panier</h1><br>
                    <p><strong> Nom :</strong> '. $item->nom .'</p>
                    <p><strong> Nombre d\'article :
                                </strong> 1 </p>
                                <p><strong> Sous Total: </strong>'. $item->prix .' €</p>
                                <p><strong> Frais de port: </strong> Gratuit </p>
                                <p><strong> Total: </strong>  </p>
                            </div>
                                    
                                    
                        </div>
                                    
                                    
                    </div>
                </div>
                                    
              
 ';
                }
                ?> <div class="card-footer">
                    <nav class="navbar navbar-light bg-light">
                        <p> J\'ai un code promo </p>
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="votre code" aria-label="Search">
                        <button class="btn btn-outline my-2 my-sm-0" type="submit">appliquer</button>
                        </form>
                        </nav>
                        </div>
                        </div>
                
                </div>


@endsection