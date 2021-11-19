<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('CPF', 11)->unique;
            $table->string('OAB', 8)->unique;
            $table->string('street', 100);
            $table->string('number', 10);
            $table->string('complement', 30);
            $table->string('district', 30);
            $table->string('state', 20);
            $table->string('CEP', 8);
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('lawyers');
    }
}
