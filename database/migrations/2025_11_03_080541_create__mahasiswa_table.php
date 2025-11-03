<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->increments('mahasiswa_id');
        $table->string('nama', 100);
        $table->string('NIM', 100)->nullable();
        $table->string('email')->unique();
        $table->enum('jurusan', ['JTI', 'JTING', 'Other'])->nullable();
        $table->string('alamat', 100);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_mahasiswa');
    }
};
