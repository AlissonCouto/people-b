<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* ['firstName', 'lastName', 'email', 'phone', 'legalPerson', 'cpf', 'cnpj']; */
        Schema::create('tbPeople', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('legalPerson')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
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
        Schema::dropIfExists('tbPeople');
    }
}
