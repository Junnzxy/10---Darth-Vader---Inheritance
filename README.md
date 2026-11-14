# Web Development Assignment - Galactic Archives (Darth Vader)

Website profil karakter fiksi **Darth Vader** (Star Wars) yang dibangun menggunakan **Laravel 10**, **Blade Templating**, **Tailwind CSS**, dan **Database SQLite**.

---

## 📌 Struktur & Arsitektur MVC

Website ini menerapkan alur arsitektur **Route → Controller → Model → View**:

1. **Halaman Home (`/`)**:
   - **Route**: `GET /` (`routes/web.php`)
   - **Controller**: `HomeController@index`
   - **Model**: `App\Models\Home`
   - **View**: `resources/views/home.blade.php` (Pengenalan awal portal & navigasi ke About & Blog)
2. **Halaman About (`/about`)**:
   - **Route**: `GET /about` (`routes/web.php`)
   - **Controller**: `AboutController@index`
   - **Model**: `App\Models\About`
   - **View**: `resources/views/about.blade.php` (Tujuan website & profil 2 mahasiswa pengembang)
3. **Halaman Blog (`/blog`)**:
   - **Route**: `GET /blog` (`routes/web.php`)
   - **Controller**: `BlogController@index`
   - **Model**: `App\Models\Blog`
   - **View**: `resources/views/blog.blade.php` (Dossier lengkap Darth Vader, Profile Card, Force Powers, & Linimasa)

---

## 🗄️ Database & Migrasi (SQLite)

Database menggunakan **SQLite** yang tersimpan langsung pada file `database/database.sqlite`.

Daftar file migrasi:
* `2026_11_14_000001_create_homes_table.php` $\rightarrow$ Tabel `homes`
* `2026_11_14_000002_create_abouts_table.php` $\rightarrow$ Tabel `abouts`
* `2026_11_14_000003_create_blogs_table.php` $\rightarrow$ Tabel `blogs`

---

## 🚀 Cara Menjalankan Website Secara Lokal

1. **Clone repository ini:**
   ```bash
   git clone https://github.com/Junnzxy/-Assignment-Week-8-WebDev_Andi-Arjuna.git
   cd -Assignment-Week-8-WebDev_Andi-Arjuna
   ```

2. **Salin file environment jika belum ada:**
   ```bash
   cp .env.example .env
   ```

3. **Periksa status migrasi database:**
   ```bash
   php artisan migrate:status
   ```
   *(Opsional untuk me-reset dan seed ulang: `php artisan migrate:fresh --seed`)*

4. **Jalankan local development server:**
   ```bash
   php artisan serve
   ```

5. **Akses website di browser:**
   Buka [http://127.0.0.1:8000](http://127.0.0.1:8000)
