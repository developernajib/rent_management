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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('year');
            $table->decimal('jan', 10, 2)->nullable();
            $table->decimal('feb', 10, 2)->nullable();
            $table->decimal('mar', 10, 2)->nullable();
            $table->decimal('apr', 10, 2)->nullable();
            $table->decimal('may', 10, 2)->nullable();
            $table->decimal('jun', 10, 2)->nullable();
            $table->decimal('jul', 10, 2)->nullable();
            $table->decimal('aug', 10, 2)->nullable();
            $table->decimal('sep', 10, 2)->nullable();
            $table->decimal('oct', 10, 2)->nullable();
            $table->decimal('nov', 10, 2)->nullable();
            $table->decimal('dec', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
