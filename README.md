# Aplikasi Absensi Siswa

## Deskripsi
Aplikasi Absensi Siswa adalah sebuah sistem berbasis web yang dibangun menggunakan Laravel 11 dan Livewire 3 untuk membantu sekolah dalam mengelola data kehadiran siswa secara digital.

## Database Design
![Database Design](https://github.com/rizaru22/absensi-siswa/blob/main/database-design.png)
## Fitur Utama
- [ ] **Manajemen Siswa**: Tambah, edit, dan hapus data siswa. 
- [ ] **Manajemen Kelas**: Kelola daftar kelas dan wali kelas.
- [ ] **Absensi Real-time**: Input dan pemantauan absensi menggunakan Livewire 3.
- [ ] **Laporan Absensi**: Generate laporan harian, mingguan, atau bulanan dalam format PDF/Excel.
- [ ] **Notifikasi**: Kirim notifikasi ke orang tua atau wali melalui email atau WhatsApp.
- [ ] **Autentikasi & Hak Akses**: Role-based access control untuk admin, guru, dan siswa.

## Teknologi yang Digunakan
- **Framework**: Laravel 11
- **Frontend**: Livewire 3 & Tailwind CSS
- **Database**: MySQL 
-**Template**:Mazer ![GitHub code size in bytes](https://github.com/zuramai/mazer)


## Persyaratan Sistem
- PHP 8.2 atau lebih baru
- Composer
- Database MySQL 

## Instalasi
### 1. Clone Repository
```bash
git clone https://github.com/rizaru22/absensi-siswa.git
cd absensi-siswa
```

### 2. Install Dependensi
```bash
composer install
npm install && npm run build
```

### 3. Konfigurasi Lingkungan
```bash
cp .env.example .env
php artisan key:generate
```
Edit file `.env` dan sesuaikan konfigurasi database.

### 4. Migrasi Database
```bash
php artisan migrate --seed
```

### 5. Menjalankan Server
```bash
php artisan serve
```
Akses aplikasi di `http://localhost:8000`

## Penggunaan
- Login sebagai admin untuk mengelola data siswa dan kelas.
- Guru dapat menginput absensi siswa secara real-time.
- Siswa dapat melihat riwayat absensi mereka.
- Laporan dapat diunduh dalam format PDF atau Excel.

## Kontribusi
Jika Anda ingin berkontribusi, silakan fork repository ini dan ajukan pull request.

## Lisensi
Proyek ini dirilis di bawah lisensi MIT.

---
Dibuat dengan ❤️ menggunakan Laravel 11 & Livewire 3.

