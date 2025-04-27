# 📚 Tutorial Push dan Commit ke GitHub - Website HMIF

Panduan ini dibuat untuk memudahkan semua anggota tim dalam melakukan push dan commit ke repository GitHub Website HMIF.

---

## 1. Clone Repository
#Clone repository ke komputer lokal:

git clone https://github.com/BintangBudi/website-hmif.git
cd website-hmif

##2. Buat Branch Baru
git checkout -b nama-branch
#contoh
git checkout -b fitur-login

##3. Lakukan Perubahan

##4. Cek Status Perubahan
git status

##5. Tambahkan perubahan ke staging area
#menambahkan semua perubahan
git add .
#menambahkan file tertentu saja
git add path/ke/file

##6. Commit perubahan
#Buat commit dengan pesan yang jelas
git commit -m "Deskripsi perubahan"
#contoh
git commit -m "Menambahkan fitur login"
#Template pesan commit
[TAG] Deskripsi perubahan
#TAG yang digunakan:
[FEAT] → Untuk penambahan fitur baru

[FIX] → Untuk perbaikan bug

[DOCS] → Untuk perubahan dokumentasi

[STYLE] → Perubahan tampilan front-end (CSS/HTML)

[REFACTOR] → Perubahan struktur kode tanpa mengubah fungsionalitas

[TEST] → Menambahkan atau memperbaiki testing
#Contoh Commit
git commit -m "[FEAT] Menambahkan fitur registrasi pengguna"

##7. Push branch ke github
git push origin nama-branch
#contoh
git push origin fitur-login

##8. Buat pull request
Setelah push:
1. Buka repository di GitHub.
2. Klik tombol Compare & pull request.
3. Isi deskripsi perubahan secara singkat dan jelas.
4. Klik Create pull request.
5. Tunggu hingga pull request disetujui sebelum merge ke main.

🚀 Tips Tambahan
#Satu fitur/satu perbaikan = satu branch dan satu pull request.
#Sebelum mulai fitur baru, selalu update dari branch main:

git checkout main
git pull origin main

#Jangan langsung commit ke branch main.
#Gunakan nama branch yang jelas (contoh: fitur-login, fix-bug-navbar, update-footer).
#Pastikan cek ulang perubahan sebelum melakukan commit.
