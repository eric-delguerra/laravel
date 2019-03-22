<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_product', function (Blueprint $table){
            $table->increments('id');
            $table->integer('products_id');
            $table->integer('orders_id');
            $table->integer('quantity');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('products_id')
                ->references('id')->on('products')
                ->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('orders_id')
                ->references('id')->on('orders')
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
