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
        Schema::create('detail_perizinan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mhs_id');
            $table->date('tanggal_keluar');
            $table->time('waktu_keluar');
            $table->date('tanggal_masuk');
            $table->time('waktu_masuk');
            $table->string('keterangan');
            $table->integer('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_perizinan');
    }
};
