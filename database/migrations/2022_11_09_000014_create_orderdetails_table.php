<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('discount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
