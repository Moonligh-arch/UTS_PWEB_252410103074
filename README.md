# AniTrack — Anime Watchlist

AniTrack adalah aplikasi web sederhana untuk mencatat dan melihat daftar anime berdasarkan status tontonan. Pengguna dapat melihat ringkasan koleksi, memfilter anime, dan membuka halaman profil.

Project ini dibuat untuk Ujian Tengah Semester (UTS) Pemrograman Web menggunakan Laravel 13, PHP 8.5, Blade, Bootstrap 5, dan CSS buatan sendiri.

## Fitur

- Login simulasi menggunakan username.
- Dashboard dengan jumlah total anime dan ringkasan status.
- Daftar anime yang menampilkan poster, genre, episode, status, dan rating.
- Filter daftar anime berdasarkan status.
- Halaman profil pengguna.
- Navigasi yang meneruskan username melalui query parameter.
- Tampilan responsif untuk desktop dan smartphone.

## Teknologi

- PHP 8.5
- Laravel 13
- Blade Template
- Bootstrap 5 melalui CDN
- CSS pada `public/css/style.css`

## Struktur Bagian Utama

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

## Cara Menjalankan

Pastikan PHP 8.5 dan Composer sudah tersedia.

1. Clone repository dan masuk ke folder project:

   ```bash
   git clone URL_REPOSITORY watchlist-anime
   cd watchlist-anime
   ```

2. Install dependency Laravel:

   ```bash
   composer install
   ```

3. Salin file environment contoh.

   Windows Command Prompt:

   ```cmd
   copy .env.example .env
   ```

   Linux/macOS/Git Bash:

   ```bash
   cp .env.example .env
   ```

4. Buat application key:

   ```bash
   php artisan key:generate
   ```

5. Bersihkan konfigurasi:

   ```bash
   php artisan optimize:clear
   ```

6. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

7. Buka `http://127.0.0.1:8000` melalui browser.

Aplikasi ini tidak menggunakan database, migration, Eloquent, atau CRUD. Data anime disimpan sebagai array pada `PageController`. Karena Bootstrap dimuat melalui CDN, koneksi internet diperlukan untuk memuat stylesheet dan komponen Bootstrap.

## Screenshot

### Login

[Tempel screenshot halaman login di sini]

### Dashboard

[Tempel screenshot halaman dashboard di sini]

### Watchlist

[Tempel screenshot halaman pengelolaan anime di sini]

### Profile

[Tempel screenshot halaman profile di sini]

## Identitas Project

- Aplikasi: AniTrack — Anime Watchlist
- Mata kuliah: Pemrograman Web
- Dibuat oleh: Dava Julian Eka Putra
- NIM: 252410103074

## Kredit Poster

Poster digunakan sebagai ilustrasi koleksi untuk keperluan tugas. Hak cipta karya tetap dimiliki oleh pemegang hak masing-masing.

- [Isekai wa Smartphone](https://image.tmdb.org/t/p/original/pgTa3ML5DMmgYjUi3Gjdez7G8RU.jpg)
- [Watanare — situs resmi anime](https://www.watanare-anime.com/news/post-21)
- [Sakurasou no Pet na Kanojo](https://image.play.rakuten.co.jp/content/13267/jacket_h_l.jpg)
- [Sankarea](https://image.tmdb.org/t/p/original/gYaRmU151o9oy2LpGMZKJLQmEwb.jpg)
- [Happy Sugar Life](https://images.justwatch.com/poster/77951141/s718/hatsupishiyugaraihu.jpg)
- [Tensei Oujo to Tensai Reijou no Mahou Kakumei](https://livedoor.blogimg.jp/getchublog/imgs/2/9/29dbfc0f.jpg)
- [Suzumiya Haruhi no Yuuutsu](https://image.tmdb.org/t/p/original/bimn3hOUjibgQD6RZn8rv1jiEL6.jpg)
- [Tonikaku Kawaii](https://static.animecorner.me/2023/02/tonikawa-s2-kv.jpg)
