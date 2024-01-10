<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTratamentosTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_tratamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tratamento', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_tratamentos');
    }
}