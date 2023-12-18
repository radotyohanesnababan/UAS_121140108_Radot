<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <style>
body, ul {
  margin: 0;
  padding: 0;
}
        form {
  width: 50%;
  margin: 0 auto;
  padding-top: 50px;
}
h2 {
  color: white;
  margin-top: 10px;
}
label {
  display: block;
  margin-bottom: 5px;
  color: #000;
  padding: 5px;
}
input,
textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
}
input[type="submit"] {
  background-color: #000;
  color: #100202;
  cursor: pointer;
}
.submit-button {
  background-color: #4caf50;
  color: rgb(21, 3, 3);
  padding: 15px;
  margin-top: 10px;
  border: none;
  border-radius: 10px;
}

.submit-button:hover {
  background-color: #45a049;
}
.topbar {
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}

.logo img {
  height: 40px; 
  width: auto;
}
.menu {
  list-style: none;
  display: flex;
}
.end{
    padding: 5px;
    background-color: rgba(61, 125, 103, 0.055);
    text-align: center;
    font-weight: bold;
    border-radius: 10%;
}
    </style>
</head>
<body>
<div class="container">
    <?php
    include "koneksi.php";
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nim=input($_POST["nim"]);
        $prodi=input($_POST["prodi"]);
        $email=input($_POST["email"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $alamat=input($_POST["alamat"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into peserta (nama,nim,prodi,email,jenis_kelamin,tanggal_lahir,alamat) values
		('$nama','$nim','$prodi','$email','$jenis_kelamin','$tanggal_lahir','$alamat')";


        $hasil=mysqli_query($connect,$sql);
        if ($hasil) {
            header("Location:daftar_data.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
<div class="topbar">
  <div class="logo">
    <img src="logo.png" alt="Logo">
  </div>
  <h2>Formulir Pendaftaran</h2>
</div>

   
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required />
      <label for="nim">NIM</label>
      <input type="number" id="nim" name="nim" required />
      <label for="prodi">Program Studi</label>
      <input type="text" id="prodi" name="prodi" required />
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select id="jenis_kelamin" name="jenis_kelamin" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" id="tanggal_lahir" name="tanggal_lahir" required />
      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" required></textarea>
      <button type="submit" class="submit-button">Submit</button>
    </form>
</div>
<footer>
      <div class="end">
        <p>UJIAN AKHIR SEMESTER Pemrograman Web 2023</p>
      </div>
      </footer>
</body>
</html>