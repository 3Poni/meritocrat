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
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', 255)->nullable();
            $table->string('header')->nullable();
            $table->string('url')->nullable();
            $table->string('url_static')->nullable();
            $table->unsignedInteger('template')->nullable();
            $table->text('content')->nullable();
            $table->text('content2')->nullable();
            $table->text('result')->nullable();
            $table->text('result2')->nullable();
            $table->text('stages')->nullable();

            $table->unsignedBigInteger('service_id')->nullable();

            $table->index('service_id', 'direction_service_idx');
            $table->foreign('service_id', 'direction_service_fk')->on('services')->references('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directions');
    }
};
