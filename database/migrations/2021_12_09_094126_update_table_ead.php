<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('estado')->change();
            $table->string('cidade')->change();
            $table->string('instituicao')->nullable()->change();
            $table->string('polo')->nullable()->change();
            $table->string('telefone')->nullable()->change();
            $table->string('telefone2')->nullable();
            $table->string('site')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('endereco')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('imagem')->nullable();
            $table->string('pagante')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
