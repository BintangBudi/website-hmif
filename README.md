
# 📚 Tutorial Push dan Commit ke GitHub - Website HMIF

Panduan ini dibuat untuk memudahkan semua anggota tim dalam melakukan push dan commit ke repository GitHub Website HMIF.

## 1. Clone Repository

Clone repository ke komputer lokal:

```bash
git clone https://github.com/BintangBudi/website-hmif.git
cd website-hmif
```

## 2. Buat Branch Baru

Buat branch baru sebelum melakukan perubahan:

```bash
git checkout -b nama-branch
```

Contoh:

```bash
git checkout -b fitur-login
```

## 3. Lakukan Perubahan

Edit, tambahkan, atau hapus file sesuai kebutuhan.

## 4. Cek Status Perubahan

Cek status perubahan yang terjadi:

```bash
git status
```

## 5. Tambahkan Perubahan ke Staging Area

Menambahkan semua perubahan:

```bash
git add .
```

Atau menambahkan file tertentu saja:

```bash
git add path/ke/file
```

## 6. Commit Perubahan

Buat commit dengan pesan yang jelas:

```bash
git commit -m "Deskripsi perubahan"
```

Contoh:

```bash
git commit -m "Menambahkan fitur login"
```

### 📋 Template Pesan Commit

Gunakan format berikut untuk konsistensi:

```
[TAG] Deskripsi perubahan
```

**TAG yang digunakan:**
- `[FEAT]` → Untuk penambahan fitur baru
- `[FIX]` → Untuk perbaikan bug
- `[DOCS]` → Untuk perubahan dokumentasi
- `[STYLE]` → Untuk perubahan tampilan front-end (CSS/HTML)
- `[REFACTOR]` → Untuk perubahan struktur kode tanpa mengubah fungsionalitas
- `[TEST]` → Untuk menambahkan atau memperbaiki testing

**Contoh commit:**

```bash
git commit -m "[FEAT] Menambahkan fitur registrasi pengguna"
```

## 7. Push Branch ke GitHub

Push branch ke remote repository:

```bash
git push origin nama-branch
```

Contoh:

```bash
git push origin fitur-login
```

## 8. Buat Pull Request

Setelah melakukan push:

1. Buka repository di GitHub.
2. Klik tombol **Compare & pull request**.
3. Isi deskripsi perubahan secara singkat dan jelas.
4. Klik **Create pull request**.
5. Tunggu hingga pull request disetujui sebelum merge ke `main`.

## 🚀 Tips Tambahan

- **Satu fitur/satu perbaikan = satu branch dan satu pull request.**
- **Sebelum mulai fitur baru**, selalu update dari branch `main`:

  ```bash
  git checkout main
  git pull origin main
  ```

- **Jangan langsung commit ke branch `main`.**
- **Gunakan nama branch yang jelas** (contoh: `fitur-login`, `fix-bug-navbar`, `update-footer`).
- **Pastikan cek ulang perubahan** sebelum melakukan commit.

Happy coding! 🚀✨

## Anggota Team
| NIM       | Nama                        | Peran              | 
|-----------|-----------------------------|--------------------| 
|D1041221043| Raden Adang Edithya Astama  | Project Manager    | 
|D1041221001| Pratiwi Yona Puspitaningrum | Frontend Developer | 
|D1041221047| Rifkal Firdaus              | Backend Developer  | 
|D1041221037| Tirta Kusuma Yudha          | Quality Assurance  | 
|D1041221046| Bintang Budi Pangestu       | DevOps Engineer    | 
