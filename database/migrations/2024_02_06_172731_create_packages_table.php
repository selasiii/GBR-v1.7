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
        Schema::create('packages', function (Blueprint $table) {
            $table->uuid('package_id')->primary();
            $table->foreignUuid('customer_id')->references('customer_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('ticket_id')->references('ticket_id')->on('tickets')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('travel_id')->references('travel_id')->on('travels')->onUpdate('cascade')->onDelete('cascade');
            $table->text('contents')->nullable();
            $table->decimal('weight', 8, 2);
            $table->enum('delivery_status',['not_picked','picked', 'in_transit', 'delivered'])->default('not_picked');
            $table->string('recipient_name');
            $table->dateTime('pick_up_datetime')->nullable();
            $table->timestamps();
        });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
