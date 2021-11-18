<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_recipe', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
            $table->foreignId('recipe_id')->constrained();
            $table->string('type_of_relation')->default('ingredient'); // oppure 'pairing'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_recipe');
    }
}
