# UAS Pemrograman Web RB
# Radot Yohanes Nababan
# 121140108

Link Hostingan Website : https://uas121140108radot.000webhostapp.com/

Informasi Login
 Username : admin
 password : admin


 ## Client-Side Programming

 Pada bagian client side terdapat 3 halaman yaitu
   1. Halaman Login
   2. Halaman HomePage
   3. Halaman List Data
   4. Halaman Input Data

Pada halaman login akan dimintai Username dan Password yang sudah diberikan di Informasi Login. Lalu pengguna akan masuk ke dalam Homepage Sederhana yang memberikan 3 Navbar, yaitu ke Homepage sendiri, Ke List Data, dan Input Data. Halaman Input data sudah dilengkapi dengan fungsi Validasi agar wajib menginputkan data.

## Server-Side Programming
  Pada bagian Server side dibuat 4 file utama untuk melengkapi website, yaitu
  1. Index.php (sebagai login)
  2. Homepage.php (Homepage)
  3. daftar_data.php (sebagai halaman list data)
  4. create.php (sebagai halaman penginputan data)

  Unntuk daftar_data.php, dilengkapi dengan fungsi aksi "Hapus", di setiap barisan data, yang berfungsi menghapus data yang diinginkan.

## Manajemen Database
  Pada manajemen database, dibuat 1 table yang bernama peserta, dibarengi dengan 6 variabel dengan rincian sebagai berikut:
  1. id_peserta int(11), sebagai primary key
  2. nama varchar (24)
  3. nim int(24)
  4. prodi varchar(24)
  5. email varchar(24)
  6. jenis_kelamin varchar (24)
  7. tanggal_lahir date
  8. alamat varchar(50)

Teknis untuk penambahan data dilakukan dengan metode post melalui PHP, dengan query SQL sebagai berikut :
INSERT INTO PESERTA (nama,nim,prodi,email,jenis_kelamin,tanggal_lahir,alamat) values
('$nama','$nim','$prodi','$email','$jenis_kelamin','$tanggal_lahir','$alamat')

Teknik untuk penghapusan data dilakukan dengan teknik GET yang akan mngambil id_peserta dari list data, dengan query SQL sebagai berikut :
DELETE from PESERTA where id_peserta='$id_peserta'

## State Management
Pada bagian state management, dibuat sebuah session saat halaman login, halaman login akan mengeluarkan pesan error jika menginputkan username/password yang salah. Perintah 'session' berada di file index.php sebagai halaman login

### Hosting Website
Akan dijelaskan langkah langkah untuk hosting website dibawah ini :
  1. Buka website "000webhost.com"
  2. Login dengan akun pribadi
  3. Setelah sudah di landing page, masukan domain, dan username password yang diminta, username dan password akan berguna saat login ke File Manager
  4. Pergi ke Dashboard --> Tools --> Database Manager, akan dicoba membuat satu database online dengan gandengan webhost
  5.  Klik Creaate New Database, masukkan nama, user, dan password untuk login dan untuk koneksi ke php.
  6.  Klik kanan pada database, cari PhpMyAdmin, dan buat database baru, lalu impor file database dari file lokal.
  8.  Kembali, lalu pergi ke File Manager 000webhost, di folder public_html, double click.
  9.  Cari tombol Upload Files, dan upload file kodingan dan media yang akan dihosting ke Web
  10.  Tunggu beberapa saat, lalu buka website yang sudah diberi domain oleh 000webhost
  11.  Website sudah di hosting dengan baik

Pemilihan 000webhost.com oleh pembuat dikarenakan website hosting ini gratis dan paling stabil diantara website hosting gratis lainnya, disamping dengan storage online yang cukup besar dan langsung dapat terhubung dengan PhpMyAdmin dari Webhost, yang tidak dimiliki mayoritas hosting gratis lainnya.
Teknologi Cookie dari Webhost juga melindungi sisi Website, ditambah form login oleh pengembang website

  Konfigurasi server yang dilakukan yaitu
1. Bahasa pemrograman HTML, PHP, JavaScript
2. Menggunakan database MySQL beserta Query yang diolah dalam PhpMyAdmin
     
  
