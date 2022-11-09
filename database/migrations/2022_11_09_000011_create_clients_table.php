<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->longText('adresse')->nullable();
            $table->string('phone')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('coordinates_map')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
