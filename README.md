<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

```md
# SPK DISTAN

Sistem Pendukung Keputusan (SPK) DISTAN adalah aplikasi berbasis web yang membantu dalam menentukan prioritas
penerima bantuan benih tanaman pangan (padi dan palawija) dengan metode **MABAC**.
Proyek ini dikembangkan untuk Dinas Pertanian Kabupaten Buleleng.

## 🚀 Fitur Utama
- **Manajemen Data**: Input data calon penerima bantuan berdasarkan kriteria yang telah ditentukan.
- **Perhitungan MABAC**: Menggunakan metode MABAC untuk menentukan prioritas penerima bantuan.
- **Visualisasi Hasil**: Menampilkan hasil perhitungan dalam bentuk tabel dan grafik.
- **User Management**: Hak akses berbeda untuk admin dan pengguna biasa.
- **Export Data**: Kemampuan mengekspor hasil seleksi ke format CSV atau PDF.

## 🛠 Teknologi yang Digunakan
- **Backend**: PHP (Laravel)
- **Frontend**: Tailwind CSS
- **Database**: MySQL
- **Libraries**: Axios, SweetAlert, Chart.js

## 📌 Cara Instalasi

### 1️⃣ Clone Repository
```sh
git clone https://github.com/kmgmhndra/SPK-DISTAN.git
cd SPK-DISTAN
```

### 2️⃣ Konfigurasi Environment
Buat file `.env` dengan menyalin `.env.example` lalu atur konfigurasi database:
```sh
cp .env.example .env
```
Edit file `.env` dan sesuaikan bagian berikut:
```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 3️⃣ Install Dependencies
```sh
composer install
npm install
```

### 4️⃣ Generate Key dan Migrasi Database
```sh
php artisan key:generate
php artisan migrate --seed
```

### 5️⃣ Jalankan Server
```sh
php artisan serve
npm run dev
```
Akses aplikasi melalui `http://127.0.0.1:8000`

## 📖 Panduan Penggunaan
1. **Login sebagai Admin** menggunakan kredensial default:
   - **Email**: admin@spk-distan.com
   - **Password**: password
2. **Tambah Data Penerima** melalui menu "Manajemen Data".
3. **Jalankan Perhitungan** dengan menekan tombol "Hitung Prioritas".
4. **Lihat dan Unduh Hasil** di halaman hasil seleksi.

## 🤝 Kontribusi
Jika ingin berkontribusi:
1. Fork repository ini.
2. Buat branch baru (`feature/nama-fitur`).
3. Commit perubahan (`git commit -m 'Menambahkan fitur X'`).
4. Push ke branch Anda (`git push origin feature/nama-fitur`).
5. Buat Pull Request.

## 📄 Lisensi
Proyek ini dilisensikan di bawah **MIT License** - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

---

💡 **SPK DISTAN** - Membantu pengambilan keputusan yang lebih akurat dan transparan!
```


