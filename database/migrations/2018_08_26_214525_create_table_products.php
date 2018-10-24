<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('set null');
            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id')
                ->references('id')->on('product_types')
                ->onDelete('set null');
            $table->integer('stock');
            $table->float('buy_price');
            $table->float('sell_price')->nullable();
            $table->text('description')->nullable();
            $table->string('color')->nullable();
            $table->tinyInteger('state')->default(1);
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
        Schema::dropIfExists('products');
    }
}
