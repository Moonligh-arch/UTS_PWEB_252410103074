# UTS_PWEB_252410103074 — AniTrack

AniTrack adalah aplikasi web sederhana untuk mengelola daftar tontonan anime. Pengguna dapat melihat ringkasan koleksi, memeriksa detail anime, memfilter daftar berdasarkan status tontonan, dan melihat informasi profil.

## Fitur

- Login simulasi menggunakan username.
- Dashboard berisi ringkasan total anime dan jumlah anime berdasarkan status.
- Watchlist berisi poster, judul, genre, jumlah episode, status, dan rating.
- Filter anime berdasarkan status: Selesai, Sedang Ditonton, dan Rencana.
- Halaman profil pengguna.
- Navigasi yang meneruskan username melalui query parameter.
- Tampilan responsif menggunakan Bootstrap 5 dan CSS sendiri.

## Teknologi

- PHP 8.5
- Laravel 13
- Blade Template
- Bootstrap 5 melalui CDN
- HTML dan CSS

## Struktur utama

```text
app/Http/Controllers/PageController.php
routes/web.php
resources/views/
├── layouts/app.blade.php
├── components/
│   ├── navbar.blade.php
│   └── footer.blade.php
├── partials/kartu-ringkasan.blade.php
├── login.blade.php
├── dashboard.blade.php
├── pengelolaan.blade.php
└── profile.blade.php
public/
├── css/style.css
└── images/
```

## Cara menjalankan

Pastikan PHP 8.5, Composer, dan ekstensi PHP yang dibutuhkan Laravel sudah terpasang.

1. Clone repository:

   ```bash
   git clone https://github.com/USERNAME/UTS_PWEB_252410103074.git
   cd UTS_PWEB_252410103074
   ```

   Ganti `USERNAME` dengan username GitHub pemilik repository.

2. Install dependency:

   ```bash
   composer install
   ```

3. Buat file environment dari contoh.

   Windows Command Prompt:

   ```cmd
   copy .env.example .env
   ```

   Linux/macOS/Git Bash:

   ```bash
   cp .env.example .env
   ```

4. Pastikan konfigurasi berikut ada di `.env`:

   ```env
   SESSION_DRIVER=file
   CACHE_STORE=file
   QUEUE_CONNECTION=sync
   ```

5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Bersihkan cache konfigurasi:

   ```bash
   php artisan optimize:clear
   ```

7. Jalankan aplikasi:

   ```bash
   php artisan serve
   ```

8. Buka `http://127.0.0.1:8000` di browser.

Aplikasi ini tidak menggunakan database, migration, Eloquent, maupun CRUD. Data anime disimpan dalam array pada `PageController`. Karena Bootstrap dimuat melalui CDN, koneksi internet diperlukan untuk memuat aset Bootstrap.

## Screenshot 

### Login

<img width="1279" height="799" alt="image" src="https://github.com/user-attachments/assets/3fa80976-72cb-48ec-b642-f46187cc2a32" />



### Dashboard

<img width="960" height="600" alt="image" src="https://github.com/user-attachments/assets/456ada46-a424-4386-9592-0ebb00147431" />

### Watchlist

<img width="960" height="600" alt="image" src="https://github.com/user-attachments/assets/62308648-b068-4c04-8958-4635de85ac41" />


### Profile

<img width="960" height="600" alt="image" src="https://github.com/user-attachments/assets/7442590c-dbe0-4da5-90f3-fe91cbcd9fdb" />


## project

- Nama aplikasi: AniTrack — Anime Watchlist
- Mata kuliah: Pemrograman Web
- Framework: Laravel 13
- Bahasa pemrograman: PHP 8.5
- Dibuat oleh: Dava Julian Eka Putra
- NIM: 252410103074
