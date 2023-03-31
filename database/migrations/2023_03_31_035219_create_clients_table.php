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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->string('mobile_number', 20)->nullable();
            $table->string('property_identity')->nullable();
            $table->string('property_address')->nullable();
            $table->decimal('total_rent', 10, 2);
            $table->decimal('discount_percent', 4, 2)->default(0.00)->nullable();
            $table->decimal('discount_amount', 7, 2)->default(0.00)->nullable();
            $table->boolean('client_status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
