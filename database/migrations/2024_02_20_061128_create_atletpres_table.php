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
        Schema::create('atletpres', function (Blueprint $table) {
            $table->id();
                $table->text('name_atletpres');
                $table->text('value_atletpres');
                $table->text('keterangan_atletpres');
                $table->unsignedBigInteger('monev_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atletpres');
    }
};
