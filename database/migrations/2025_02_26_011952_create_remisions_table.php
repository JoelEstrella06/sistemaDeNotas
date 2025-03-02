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
        Schema::create('remisions', function (Blueprint $table) {
            $table->id();
            $table->string('num_unidad',100);
            $table->string('comentario')->nullable();
            //$table->float('total',2);
            $table->string('pdf')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remisions');
    }
};
