<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('model');
            $table->integer('cilindrada');
            $table->integer('potencia');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
