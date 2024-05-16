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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('users_id_foreign');
            $table->string('title');
            $table->unsignedBigInteger('category_id')->index('categories_id_foreign');
            $table->float('min_price', 8, 2)->default(0);
            $table->float('max_price', 8, 2)->default(0);
            $table->date('due_date')->nullable();
            $table->dateTime('bid_end')->nullable();
            $table->longText('details')->nullable();
            $table->unsignedTinyInteger('status')->default(0)->comment('0-Pending, 1-Active, 2-Rejected');
            $table->string('contract')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
