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
        Schema::create('capaiandata', function (Blueprint $table) {
            $table->id();
            $table->string('desa');
            $table->string('dusun');
            $table->string('rw');
            $table->text('kelurahan');
            $table->text('bangunan');
            $table->text('kk');
            $table->text('jiwa');
            $table->text('laki');
            $table->text('perempuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capaiandata');
    }
};
