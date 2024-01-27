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
        Schema::create('puppets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('object_number');
            $table->string('date');
            $table->string('language_id',2);// nl/fr/en
            $table->mediumText('info');
            $table->foreignId('room_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puppets');
    }
};
