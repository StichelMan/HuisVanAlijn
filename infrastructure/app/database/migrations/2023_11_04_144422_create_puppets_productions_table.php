<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('puppets_productions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('puppet_id')->unsigned();
            $table->unsignedBiginteger('production_id')->unsigned();

            $table->foreign('puppet_id')->references('id')
                ->on('puppets')->onDelete('cascade');
            $table->foreign('production_id')->references('id')
                ->on('productions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puppets_productions');
    }
};
