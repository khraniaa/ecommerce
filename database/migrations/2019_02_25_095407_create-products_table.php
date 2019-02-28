<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use App\Product;
use Illuminate\Support\Facades\Schema;
use ThibaudDauce\Migrations\Migration;

class CreateProductsTable extends Migration

{
    protected $model = Product::class;
    
}

class Product extends Model
{
    public function schema(Blueprint $table)
    {
        $table->increments('id');
        $table->string('title');
        $table->text('body');
        $table->timestamps();
    }
    
}

