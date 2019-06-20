<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('usuario',40)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('plano_id')->nullable()->unsigned();
            $table->integer('idade')->nullable()->unsigned();
            $table->integer('tipo_usuario')->nullable()->unsigned();
            $table->string('rua')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable();
            $table->string('cep')->nullable();
            $table->integer('cpf')->nullable()->unsigned();
            $table->integer('matricula')->nullable()->unsigned();
            $table->integer('escolaridade')->nullable()->unsigned();
            $table->date('data_nascimento')->nullable();
            $table->string('responsavel_1')->nullable();
            $table->string('responsavel_2')->nullable();
            $table->string('telefone')->nullable();
            $table->tinyInteger('is_whatsapp')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
