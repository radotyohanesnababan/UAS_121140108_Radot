<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
 .topbar {
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}
h2{
    text-align: center;
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
    position: fixed;
    bottom: 0;
    width: 100%;
}   
ul{
    display: flex;
    align-items: center;
    list-style: none;
}


li{
    font-family: "Raleway";
    padding: 10px;
    text-decoration: none;
    color: green;
    
}
</style>
</head>
<title></title>
<body>
<div class="topbar">
  <div class="logo">
    <img src="logo.png" alt="Logo">
  </div>
  <ul class="list">
    <li>
    <a href="create.php" class="btn btn-success" role="button">Tambah Data</a>
    </li>
    <li>
    <a href="homepage.php" class="btn btn-primary" role="button">HomePage</a>
    </li>

    
  </ul>
  </div>
<div class="container">
    <br>
<?php
ob_start();
    include "koneksi.php";
    if (isset($_GET['id_peserta'])) {
        $id_peserta=htmlspecialchars($_GET["id_peserta"]);

        $sql="delete from peserta where id_peserta='$id_peserta' ";
        $hasil=mysqli_query($connect,$sql);
        }
?>

<h2 >Daftar Data Pendaftaran</h2>
     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-7 table table-light table-striped">
            <tr class="table-success">           
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

    <?php
        $sql="select * from peserta order by id_peserta desc";
        $hasil=mysqli_query($connect,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

    ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["nim"];   ?></td>
                <td><?php echo $data["prodi"];   ?></td>
                <td><?php echo $data["email"];   ?></td>
                <td><?php echo $data["jenis_kelamin"];   ?></td>
                <td><?php echo $data["tanggal_lahir"];   ?></td>
                <td><?php echo $data["alamat"];   ?></td>
                <td>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-outline-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
    ?>
    </table>
    
</div>
<footer>
      <div class="end">
        <p>UJIAN AKHIR SEMESTER Pemrograman Web 2023</p>
      </div>
      </footer>
</body>
</html>
