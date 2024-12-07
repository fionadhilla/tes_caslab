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
        Schema::create('table_tp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subJudul');
            $table->string('kategori');
            $table->timestamp('tanggal')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('deadline')->nullable();
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_tp');
    }
};
