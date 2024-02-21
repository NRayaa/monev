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
        Schema::create('pelatihpres', function (Blueprint $table) {
            $table->id();
                $table->text('name_pelatihpres');
                $table->text('value_pelatihpres');
                $table->text('keterangan_pelatihpres');
                $table->unsignedBigInteger('monev_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihpres');
    }
};
