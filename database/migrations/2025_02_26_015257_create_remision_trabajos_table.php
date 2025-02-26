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
        Schema::create('remision_trabajos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('remision_id');
            $table->unsignedBigInteger('trabajo_id');
            $table->unsignedInteger('precio');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('remision_id')->references('id')->on('remisions')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('trabajo_id')->references('id')->on('trabajos')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remision_trabajos');
    }
};
