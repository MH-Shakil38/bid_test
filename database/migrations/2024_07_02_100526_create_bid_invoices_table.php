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
        Schema::create('bid_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidder_id');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('bid_id');
            $table->double('total');
            $table->integer('site_commission');
            $table->double('fixed_price');
            $table->double('commission');
            $table->tinyInteger('bid_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bid_invoices');
    }
};
