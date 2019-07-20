<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->index()->unique();
            $table->string('uuid')->index()->unique();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('height');
            $table->unsignedInteger('width');
            $table->unsignedInteger('depth');
            $table->unsignedInteger('price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
