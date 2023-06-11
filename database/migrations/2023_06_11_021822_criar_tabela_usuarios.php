<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('usuarios', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nome');
      $table->string('usuario')->unique();
      $table->string('senha');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('usuarios');
  }
};
