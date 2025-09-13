# 🚀 SKIPIKET - Sistem Piket Kelas Sekolah Kristen Immanuel

<p align="center">
  <img src="public/images/logos/logoLP.svg" alt="Skipiket Logo" width="500">
</p>

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![PHP](https://img.shields.io/badge/PHP-8.1-blue)
![MySQL](https://img.shields.io/badge/MySQL-8-green)

> ⚠️ **Catatan:** Aplikasi ini masih dalam tahap percobaan dan dibuat oleh murid sekolah. Mohon maklum jika terdapat kekurangan.  

SKIPIKET adalah aplikasi web untuk **mengelola jadwal piket kelas** di Sekolah Kristen Immanuel. Dengan aplikasi ini, siswa, guru, dan staf dapat dengan mudah memantau siapa yang bertugas piket hari ini, minggu ini, atau bulan ini.  

---

## 🎯 Fitur Utama

- **🖥 Dashboard**: Menyapa pengguna & menampilkan notifikasi terbaru serta daftar piket hari ini.  
- **📅 Jadwal Piket User**: Lihat jadwal piket masing-masing user dan tugasnya.  
- **🗓 Kalender Piket**: Semua jadwal piket tampil rapi dalam bentuk kalender.  
- **🔔 Notifikasi**: Menampilkan semua notifikasi terkait piket.  
- **⚡ Generate Otomatis**: Jadwal piket dibuat otomatis setiap bulan untuk semua kelas.  
- **👤 Profil User**: Info user yang diatur oleh admin, tidak bisa diubah sembarangan.  
- **🏠 Landing Page**: About Us, FAQ, Login, dan Register.

---

## 💻 Teknologi yang Digunakan

| Backend | Database | Frontend | Dependency |
|---------|---------|---------|------------|
| Laravel 12 | MySQL | Blade & Tailwind CSS | Composer |

---

## 🚀 Cara Penggunaan

1. Buka landing page aplikasi.  
2. Pilih **About Us**, **FAQ**, **Login**, atau **Register**.  
3. Setelah login, diarahkan ke **Dashboard**:  
   - Sapaan pribadi ✨  
   - Notifikasi terbaru 🔔  
   - Daftar siswa yang piket hari ini 📋  
4. Menu lainnya:  
   - **Jadwal Piket**: Lihat tugas user setiap minggu.  
   - **Kalender**: Pantau semua piket.  
   - **Notifikasi**: Semua notifikasi muncul di sini.  
   - **Profil**: Info user yang diatur admin.

---

## 🛠 Tutorial Instalasi

### Prasyarat

- PHP >= 8.1  
- Composer  
- MySQL  
- Node.js & npm (untuk Tailwind CSS)

### Langkah-langkah

```bash
# 1. Clone repository
git clone https://github.com/username/skipiket.git
cd skipiket

# 2. Install dependencies Laravel
composer install

# 3. Copy file environment
cp .env.example .env

# 4. Konfigurasi database di .env
# Ganti placeholder sesuai database milikmu
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

# 5. Generate application key
php artisan key:generate

# 6. Jalankan migrasi database
php artisan migrate

# 7. Install Tailwind CSS
npm install
npm run dev

# 8. Jalankan server
php artisan serve
```
---

## 📌 Catatan

- Aplikasi ini masih **percobaan**, dibuat oleh murid sekolah. Mohon maklum jika ada kekurangan.  
- Data user diisi oleh admin; user tidak bisa sembarangan mengubah info.  
- Jadwal piket di-generate otomatis setiap bulan untuk mempermudah manajemen.  
- ❗ Jika ada kekeliruan atau bug, silakan hubungi saya melalui **Discord**: `Username#1234`

---

## 📬 Kontak / Feedback

Jika ada saran atau kritik, silakan chat saja di Discord: `dikto`.
