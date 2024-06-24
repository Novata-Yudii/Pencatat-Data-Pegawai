<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_pegawai')->unique();
            $table->string('jabatan');
            $table->enum('status', ['Tetap', 'Kontrak', 'Magang']);
            $table->string('alamat');
            $table->enum('gender',['Laki-laki', 'Perempuan']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
