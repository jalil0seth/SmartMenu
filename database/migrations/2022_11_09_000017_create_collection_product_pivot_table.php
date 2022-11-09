<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('collection_product', function (Blueprint $table) {
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id', 'collection_id_fk_7593917')->references('id')->on('collections')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_7593917')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
