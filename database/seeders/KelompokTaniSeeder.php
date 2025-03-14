<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokTaniSeeder extends Seeder
{
    public function run()
    {
        DB::table('kelompok_tani')->truncate();

        DB::table('kelompok_tani')->insert([
            [
                'nama' => 'Subak Banyumala',
                'desa' => 'Desa Banyuasri',
                'ketua' => 'Made Suartana',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 5,
                'terpoligon' => 5,
                'bantuan_sebelumnya' => 5,
                'dpi' => 23, // Angka bulat
                'provitas' => 20, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Gebang',
                'desa' => 'Desa Subuk',
                'ketua' => 'Ketut Seriada',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 5,
                'terpoligon' => 5,
                'bantuan_sebelumnya' => 1,
                'dpi' => 25, // Angka bulat
                'provitas' => 18, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Tista',
                'desa' => 'Desa Tista',
                'ketua' => 'Made Sutama',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 1,
                'terpoligon' => 1,
                'bantuan_sebelumnya' => 5,
                'dpi' => 30, // Angka bulat
                'provitas' => 22, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Keramas',
                'desa' => 'Desa Keramas',
                'ketua' => 'Ketut Surya',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 1,
                'terpoligon' => 5,
                'bantuan_sebelumnya' => 1,
                'dpi' => 28, // Angka bulat
                'provitas' => 20, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Soka',
                'desa' => 'Desa Soka',
                'ketua' => 'Made Suari',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 5,
                'terpoligon' => 1,
                'bantuan_sebelumnya' => 1,
                'dpi' => 24, // Angka bulat
                'provitas' => 21, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Sumberkima',
                'desa' => 'Desa Sumberkima',
                'ketua' => 'Ketut Dewi',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 1,
                'terpoligon' => 5,
                'bantuan_sebelumnya' => 5,
                'dpi' => 32, // Angka bulat
                'provitas' => 19, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Selemadeg',
                'desa' => 'Desa Selemadeg',
                'ketua' => 'Made Asta',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 5,
                'terpoligon' => 1,
                'bantuan_sebelumnya' => 1,
                'dpi' => 26, // Angka bulat
                'provitas' => 22, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Batubulan',
                'desa' => 'Desa Batubulan',
                'ketua' => 'Ketut Wira',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 1,
                'terpoligon' => 5,
                'bantuan_sebelumnya' => 5,
                'dpi' => 33, // Angka bulat
                'provitas' => 25, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Sukasada',
                'desa' => 'Desa Sukasada',
                'ketua' => 'Made Yuda',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 5,
                'terpoligon' => 5,
                'bantuan_sebelumnya' => 1,
                'dpi' => 27, // Angka bulat
                'provitas' => 23, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Subak Kerta',
                'desa' => 'Desa Kerta',
                'ketua' => 'Ketut Wayan',
                'kecamatan_id' => 1, // Kecamatan Gerokgak
                'simluhtan' => 1,
                'terpoligon' => 1,
                'bantuan_sebelumnya' => 5,
                'dpi' => 29, // Angka bulat
                'provitas' => 24, // Angka bulat
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
