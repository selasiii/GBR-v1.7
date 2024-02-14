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
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('ticket_id')->primary();
            $table->dateTime('issued_date');
            $table->dateTime('expiry_date');
            $table->double('price');
            $table->enum('status', ['valid', 'invalid'])->default('valid');
            $table->foreignUuid('customer_id')->references('customer_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('travel_id')->references('travel_id')->on('travels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('payment_id')->references('payment_id')->on('payments')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
