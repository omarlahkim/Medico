<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_lines', function (Blueprint $table) {
            $table->id();
            $table->boolean('bf_breakfast');
            $table->boolean('af_breakfast');
            $table->boolean('bf_launch');
            $table->boolean('af_launch');
            $table->boolean('bf_dinner');
            $table->boolean('af_dinner');
            $table->float('quantity');
            $table->foreignId('drug_id')->constrained();
            $table->foreignId('prescription_id')->constrained();
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
        Schema::dropIfExists('prescription__lines');
    }
}
