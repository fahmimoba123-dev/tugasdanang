# Catatan Perkembangan UI & Alur Proyek

Dokumen ini berfungsi sebagai catatan terpusat untuk melacak alur pengembangan, desain antarmuka (UI), dan perkembangan proyek secara keseluruhan.

---

## 🎯 Tujuan Proyek
- Membuat proyek web berbasis Laravel.
- **Fokus Utama:** Pengembangan UI yang responsif, modern, dan menarik (tanpa menggunakan integrasi database, murni tampilan).

---

## 🗺️ Alur Pengembangan UI (Roadmap)

1. **Fase 1: Setup & Konfigurasi Awal**
   - [x] Inisialisasi proyek Laravel.
   - [x] Menonaktifkan dependensi database di `.env` (beralih ke `file` & `sync`).
   - [ ] Setup *framework* CSS (opsional: TailwindCSS, Bootstrap, atau Vanilla CSS).

2. **Fase 2: Desain Layout Utama (Master Layout)**
   - [ ] Membuat struktur navigasi (Navbar).
   - [ ] Membuat bagian Footer.
   - [ ] Mengatur layout dasar untuk halaman-halaman yang akan dibuat (menggunakan Blade templates).

3. **Fase 3: Pembuatan Halaman (Pages)**
   - [x] Setup Routing (Routing sudah ditambahkan di `routes/web.php` untuk Home, Bahasa, Gamelan, Wayang, Tentang Kami).
   - [x] **Home / Beranda:** Halaman utama (`home.blade.php`).
   - [x] **Tentang Kami (About):** Halaman informasi (`tentang.blade.php`).
   - [x] **Gamelan:** Halaman khusus Gamelan (`gamelan.blade.php`).
   - [x] **Bahasa:** Halaman khusus Bahasa (`bahasa.blade.php`).
   - [x] **Wayang:** Halaman khusus Wayang (`wayang.blade.php`).

4. **Fase 4: Polish & Interaktivitas**
   - [ ] Menambahkan animasi dan transisi yang halus (Micro-interactions).
   - [ ] Memastikan tampilan responsif di seluruh perangkat (Mobile, Tablet, Desktop).
   - [ ] Menambahkan fungsionalitas JavaScript dasar di `script.js`.

---

## 📝 Log Perkembangan (Changelog)

Catat setiap perubahan atau penambahan fitur di bawah ini dengan menyertakan tanggal.

### **[1 September 2026]**
- **Sistem & Konfigurasi:** Menonaktifkan penggunaan database pada `.env` (mengubah `SESSION_DRIVER` dan `CACHE_STORE` ke `file`, serta `QUEUE_CONNECTION` ke `sync`). Proyek sekarang berjalan murni tanpa dependensi database.
- **Routing & Struktur Folder:** 
  - File-file UI (`blade.php`) telah disiapkan di folder `resources/views/pages/`.
  - Mendaftarkan rute (routing) untuk halaman-halaman berikut di `routes/web.php`:
    - `/` (Home)
    - `/bahasa` (Bahasa)
    - `/gamelan` (Gamelan)
    - `/wayang` (Wayang)
    - `/tentang-kami` (Tentang)
- **Dokumentasi:** Membuat dan memperbarui file `catatan.md` untuk melacak alur proyek dan perubahan UI secara akurat.

### **[2 September 2026]**
- **Sistem & Konfigurasi:** Mengaktifkan kembali database menggunakan SQLite (default Laravel).
- **Fitur Autentikasi:**
  - Mengembalikan alur Login & Register menjadi **halaman terpisah** (bukan modal) sesuai permintaan pengguna.
  - Membuat ulang halaman UI untuk `/login` dan `/register` menggunakan gaya *glassmorphism*.
  - Mengembalikan Navbar untuk memuat tautan `Login` dan `Register` yang mengarah ke halaman masing-masing.
- **Routing:** Mendaftarkan routing baru untuk autentikasi di `routes/web.php`.

---

## 📌 Catatan Tambahan
- Tulis ide-ide desain atau catatan teknis tambahan di bagian ini.
- Gunakan ikon atau screenshot (jika diperlukan) untuk mempermudah visualisasi desain UI.
