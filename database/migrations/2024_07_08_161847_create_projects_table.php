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
            $table->string('header')->nullable();
            $table->text('description')->nullable();
            $table->text('ext_description')->nullable();
            $table->string('client')->nullable();
            $table->string('img')->nullable();

            $table->unsignedBigInteger('service_id')->nullable();

            $table->index('service_id', 'project_service_idx');
            $table->foreign('service_id', 'project_service_fk')->on('services')->references('id');

            $table->timestamps();
            $table->softDeletes();
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
