<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class showProductsTest extends TestCase
{
    /**@test**/
    use RefreshDatabase;
    
    function itwork()
    {
        $this->withExceptionHandling();
        $products = factory(Product::class,3)->create();
        $this->get('/')
        ->assertSuccessful()
        ->assertViewIs('products.index')
        ->assertViewHas('products', function ($viewPoducts) use ($Products){
            return $viewPoducts[0]->is($products[0])
            and $viewPoducts[1]->is($products[1])
            and $viewPoducts[2]->is($products[2]);
           
        });
    }
}
