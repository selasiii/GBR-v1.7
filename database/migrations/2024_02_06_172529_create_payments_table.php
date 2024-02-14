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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('payment_id')->primary();
            $table->decimal('amount', 10, 2);
            $table->dateTime('date');
            $table->string('payment_method');
            $table->enum('status', ['incomplete', 'complete'])->default('incomplete');
            $table->foreignUuid('customer_id')->references('customer_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
