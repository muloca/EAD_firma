<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('estado')->nullable();
            $table->text('cidade')->nullable();
            $table->text('instituicao')->nullable();
            $table->text('polo')->nullable();
            $table->text('telefone')->nullable();
            $table->text('site')->nullable();
            $table->text('sobre')->nullable();
            $table->text('cursos')->nullable();
            $table->text('email')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
