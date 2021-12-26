<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('CIN');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->date('birth_date');
            $table->string('profession');
            $table->string('phone');
            $table->foreignId('marital_situation_id')->constrained()->onDelete('cascade');
            $table->foreignId('gender_id')->constrained()->onDelete('cascade');
            $table->foreignId('insurance_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('patients');
    }
}
