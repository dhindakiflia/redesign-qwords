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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cloud_hosting_id');
            $table->string('disk');
            $table->string('bandwith');
            $table->string('core_cpu');
            $table->string('parked_domain');
            $table->timestamps();

            $table->foreign('cloud_hosting_id')->references('id')->on('cloud_hostings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
