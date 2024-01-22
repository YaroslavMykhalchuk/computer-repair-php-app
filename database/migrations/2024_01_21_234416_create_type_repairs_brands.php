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
        Schema::create('type_repairs_brands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_repair_id');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('type_repair_id')->references('id')->on('type_repairs')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_repairs_brands');
    }
};
