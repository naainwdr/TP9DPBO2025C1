# TP9DPBO2025C1
Saya Nina Wulandari dengan NIM 2312091 mengerjakan Tugas Praktikum 8 dalam mata kuliah DPBO untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Struktur Database
Database ini menyimpan 1 tabel, yaitu tabel students dengan atribut berikut:
   * id: Primary key, digunakan sebagai identifikasi unik untuk setiap mahasiswa.
   * nim: Nomor Induk Mahasiswa, identifikasi resmi mahasiswa di institusi pendidikan.
   * nama: Nama lengkap mahasiswa.
   * tempat: Tempat lahir mahasiswa.
   * tl: Tanggal lahir mahasiswa.
   * gender: Jenis kelamin mahasiswa, biasanya disimpan sebagai 'L' untuk laki-laki dan 'P' untuk perempuan.
   * email: Alamat email mahasiswa.
   * telp: Nomor telepon mahasiswa.

# Penjelasan Struktural File
 TP_MVC - Sistem Manajemen Keanggotaan Mahasiswa dalam UKM (MVC Pattern)

### 1. presenter/
Folder ini berisi Presenter, yaitu bagian logika utama yang menghubungkan antara data (model) dan tampilan (view). Presenter menangani permintaan dari user, memproses data melalui model, dan menentukan tampilan yang sesuai.
- ProsesMahasiswa.php – Presenter utama untuk menangani aksi pengguna seperti tambah, edit, dan hapus mahasiswa
- KontrakPresenter.php

### 2. models/
Berisi **kelas model** untuk berinteraksi dengan database.

- DB.class.php - Koneksi database dan eksekusi query dasar.
- Mahasiswa.class.php – Representasi data mahasiswa (NIM, Nama, Prodi, Fakultas).
- TabelMahasiswa.class.php – Kelas yang menangani koneksi ke database dan menyediakan fungsi CRUD pada data mahasiswa.
- Template.class.php

### 3. views/
Berisi **kelas view** (PHP) yang bertugas menampilkan data menggunakan template HTML.

- TampilMahasiswa.php – Menampilkan tabel data mahasiswa.
- FormTambahMahasiswa.php – Form untuk menambahkan data mahasiswa.
- FormEditMahasiswa.php – Form untuk mengedit data mahasiswa yang sudah ada.
- KontrakView.php - interface

### 4. templates/
Berisi **template HTML statis** 
- form_edit.html, form_tambah.html, skin.html

### 5. File Utama (Root Files)
- index.php - Halaman utama mahasiswa.
- mvp_php.sql - query database


# Alur Program
1. Menampilkan Data Mahasiswa
  - Ketika pengguna mengakses index.php tanpa parameter aksi, aplikasi akan menampilkan daftar mahasiswa dengan memanggil metode tampil() dari kelas TampilMahasiswa.
3. Menambahkan Mahasiswa
  - Pengguna mengklik tombol "Tambah Mahasiswa", yang akan memuat form dari FormTambahMahasiswa.
  - Setelah form diisi dan disubmit, data akan diproses oleh metode addMahasiswa() di ProsesMahasiswa, yang kemudian akan menyimpan data ke database melalui TabelMahasiswa.
3. Mengedit Mahasiswa
  - Pengguna mengklik tombol "Edit" padasalah satu data mahasiswa, yang akan memuat form dari FormEditMahasiswa dengan data yang sudah ada.
  - Setelah perubahan dilakukan dan form disubmit, data akan diproses oleh metode updateMahasiswa() di ProsesMahasiswa, yang kemudian akan memperbarui data di database melalui TabelMahasiswa.
4. Menghapus Mahasiswa
  - Pengguna mengklik tombol "Delete" pada data mahasiswa tertentu, yang akan memanggil metode deleteMahasiswa() di ProsesMahasiswa, yang kemudian akan menghapus data dari database melalui TabelMahasiswa.

# Dokumentasi Program
https://github.com/user-attachments/assets/241fc4f9-fa46-44f1-9473-75d996747efb

