# CBT NBF

Aplikasi *Computer Based Test* (CBT) berbasis web yang dikembangkan menggunakan framework Laravel. Sistem ini dirancang untuk memfasilitasi manajemen ujian dan latihan soal secara digital.

## Fitur Utama

* **Manajemen Pengguna:** Autentikasi dan otorisasi untuk mengelola peran (seperti Admin, Guru, dan Siswa).
* **Manajemen Bank Soal:** Fitur untuk membuat, mengedit, dan mengkategorikan pertanyaan ujian.
* **Pelaksanaan Ujian (CBT):** Antarmuka pengerjaan soal dengan batasan waktu yang berjalan secara *real-time*.
* **Laporan Nilai:** Kalkulasi hasil ujian otomatis dan rekapitulasi nilai peserta.

## Panduan Instalasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan aplikasi CBT ini di komputermu:

1. Clone repositori ini:
   ```bash
   git clone [https://github.com/NBFiidly/cbt-nbf.git](https://github.com/NBFiidly/cbt-nbf.git)

   cd cbt-nbf

   composer install 
   
   npm install

   cp .env.example .env

   php artisan key:generate

   php artisan migrate --seed

   php artisan serve
