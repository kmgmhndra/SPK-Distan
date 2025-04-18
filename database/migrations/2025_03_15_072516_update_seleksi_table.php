<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('seleksi', function (Blueprint $table) {
            $table->foreignId('kecamatan_id')->constrained('kecamatan')->onDelete('cascade');
            $table->string('nama_kelompok_tani');
            $table->foreignId('kelompok_tani_id');
            $table->string('ketua');
            $table->string('desa');
            $table->year('tahun');
            $table->decimal('nilai_wpm', 8, 4); // Menyimpan nilai hasil seleksi
            $table->integer('peringkat'); // Peringkat hasil seleksi
            $table->boolean('terpilih')->default(false); // Checkbox untuk status terpilih
            $table->enum('jenis_tani', ['Padi', 'Palawija', 'Pupuk']); // Jenis Tani

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seleksi', function (Blueprint $table) {
            $table->dropForeign(['kecamatan_id']);
            $table->dropColumn([
                'kecamatan_id',
                'nama_kelompok_tani',
                'ketua',
                'desa',
                'nilai_wpm',
                'peringkat',
                'terpilih'
            ]);
        });
    }
};
