**Projek Tryout**

Projek Tryout Menggunakan Framework CodeIgniter 3 dan Database PostgreSQL

- Clone seperti biasa
- Pastikan menggunakan PHP versi 7 (saya menggunakan versi 7.2.34)
- Pastikan jalankan apache dan database di xampp atau laragon
- Pastikan telah import database dan sesuaikan dengan nama file sql
- Jalankan pada browser (local) dengan ketik url: http://localhost/tryout/public/
- Login Admin dengan:
  Username: Admin
  Password: password
  
Jika proses menjalankan pada local terkendala, silahkan coba:
- Pada file instalasi PostgreSQL (saya di C:/Program Files/PostgreSQL/16/data/pg_hba.conf)
  pada bagian method yang semula **scram-sha-256** rewrite menjadi **trust**.
