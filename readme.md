# Panduan Membuat Pasangan Kunci Privat dan Kunci Publik

Untuk membuat pasangan kunci privat dan kunci publik, Anda dapat menggunakan utilitas seperti OpenSSL.

1. **Buka Command Prompt, terminal di vs-code atau semacamnya:**

2. **Navigasi ke Direktori OpenSSL:**
   - Gunakan perintah `cd` untuk berpindah ke direktori OpenSSL yang terinstal. Contoh: `cd C:\OpenSSL-Win64\bin`, atau
   - Langsung saja buat private key dalam direktory project di vs-code.

3. **Buat Private Key:**
   - Gunakan perintah berikut untuk membuat kunci privat:
     ```bash
     openssl genpkey -algorithm RSA -out private_key.pem
     ```

4. **Ekstrak Public Key dari Private Key:**
   - Gunakan perintah berikut untuk ekstrak kunci publik dari kunci privat:
     ```bash
     openssl rsa -pubout -in private_key.pem -out public_key.pem
     ```

5. **Selesai:**
   - Sekarang, Anda memiliki file `private_key.pem` dan `public_key.pem` di direktori tersebut. Pastikan untuk menjaga private key dengan aman dan tidak dibagikan, sementara public key dapat dibagikan sesuai kebutuhan.

Ingatlah bahwa kunci privat harus dijaga dengan sangat baik, sementara kunci publik dapat dibagikan secara bebas. Jangan pernah membagikan kunci privat Anda kepada siapa pun.