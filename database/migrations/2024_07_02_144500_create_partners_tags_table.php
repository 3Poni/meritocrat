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
        Schema::create('partners_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();

            // IDX
            $table->index('partner_id', 'partner_tag_partner_idx');
            $table->index('tag_id', 'partner_tag_tag_idx');
            // FK
            $table->foreign('partner_id', 'partner_tag_partner_fk')->on('partners')->references('id');
            $table->foreign('tag_id', 'partner_tag_tag_fk')->on('tags')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners_tags');
    }
};
