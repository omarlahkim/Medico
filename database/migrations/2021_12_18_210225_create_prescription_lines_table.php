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
            $table->boolean('bf_breakfast')->default(0);
            $table->boolean('af_breakfast')->default(0);
            $table->boolean('bf_launch')->default(0);
            $table->boolean('af_launch')->default(0);
            $table->boolean('bf_dinner')->default(0);
            $table->boolean('af_dinner')->default(0);
            $table->float('quantity')->default(0);
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
