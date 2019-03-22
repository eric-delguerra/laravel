<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('img');
            $table->integer('price');
            $table->integer('weigth');
            $table->integer('stock');
            $table->integer('categories_id');
            $table->unsignedInteger('promos_id');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('categories_id')
                ->references('id')->on('categories')
                ->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('promos_id')
                ->references('id')->on('promos')
                ->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
