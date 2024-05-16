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
        Schema::create('bid_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('user_id_foreign');
            $table->unsignedBigInteger('project_id')->index('project_id_foreign');
            $table->longText('cover_letter')->nullable();
            $table->string('file')->nullable();
            $table->unsignedTinyInteger('status')->nullable();
            $table->boolean('interviewing')->default(0);
            $table->boolean('invite_sent')->default(0);
            $table->unsignedTinyInteger('rating')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->float('fixed_rate', 8, 2)->nullable();
            $table->float('service_fee', 8, 2)->nullable();
            $table->float('estimated_amount', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bid_projects');
    }
};
