<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $id=\Auth::user()->id;
        $paniers=\App\Panier::select('produit_id')->distinct()->where('user_id', $id)->get();
        $list=[];
        foreach ($paniers as $panier){
            $products=\App\Product::where('id',$panier->produit_id)->get();
            foreach ($products as $product){
                $count=\App\Panier::where('user_id',$id)->where('produit_id',$product->id)->count();
                $product->count=$count;
                array_push($list, $product);
            }
        }
        return view('panier')->withList($list);
    }
    
   /* public function addPanier($id){
        $em = $this->getDoctrine()->getManager();
        
        $panier = $session->get('panier', []);
        
        
        $productRepository = $em->getRepository("AppBundle:Product");
        $product = $productRepository->find($productId);
        
        $panier[] = $product;
        
        //ajouter au "panier" ce l'item en question
        
        
        return $this->generateUrl("panier", ["panier" => $panier]);
        
    
    }*/
}
