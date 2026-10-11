# Tugas Web Pertemuan 11 - E-Commerce DB + Secure Auth

Repositori ini dibuat untuk memenuhi Tugas Rutin 11: E-Commerce DB + Secure Auth.

## 🛠️ Bagian A - Database & Eloquent
### 1. Migrations, Models, & Seeders
Telah berhasil membuat 7 tabel migrasi dengan foreign key constraints, serta mengisi data produk menggunakan Seeder & Factory (55 produk).

### 2. Dokumentasi 5 Query Tinker
Berikut adalah bukti screenshot dari 5 query Eloquent yang dijalankan melalui Tinker:

**1. Mengambil semua produk (`Product::all()`)**
![Tinker All](screenshots/01_tinker_all.png)

**2. Filter harga di atas 1.000.000 (`Product::where(...)`)**
![Tinker Where](screenshots/02_tinker_where.png)

**3. Eager loading kategori & produk (`Category::with(...)`)**
![Tinker With](screenshots/03_tinker_category.png)

**4. Menggunakan Scope `expensive()`**
![Tinker Expensive](screenshots/04_tinker_expensive.png)

**5. Mengambil kategori dari produk (`Product::find(1)->category`)**
![Tinker Find](screenshots/05_tinker_find.png)

## 🔐 Bagian B - Auth & Security
### 1. Route Protection & Multi-role Middleware
Berikut adalah bukti pengujian hak akses menggunakan 2 role (Admin dan User Biasa) di Incognito:

**User Biasa mencoba mengakses `/admin/dashboard` (Gagal - 403 Unauthorized)**
![403 Unauthorized](screenshots/06_error_403.png)

**Admin mengakses `/admin/dashboard` (Berhasil)**
![Admin Dashboard](screenshots/07_admin_dashboard.png)

### 2. PostPolicy
Telah dibuat `ProductPolicy` untuk membatasi aksi edit dan delete produk hanya untuk role admin dan editor.

## 🌟 Bonus - Filament Admin Panel
Telah berhasil menginstall Filament v4 dan menggenerate resource untuk model Product.

**Dashboard Filament**
![Filament Dashboard](screenshots/08_filament_dashboard.png)

**Daftar Produk di Filament (dengan Eager Loading `with('category')`)**
![Filament Products](screenshots/09_filament_products.png)