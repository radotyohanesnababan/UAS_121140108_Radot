<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS Pemrograman Web</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nosifer">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
      /* *{
    border: 1px solid black;
} */

.container{
    margin-top: 1rem;

}


.start-side{
    padding: 20px;
    display: flex;
    font-family: "Nosifer";
}
.start-side h2{
    color: rgba(234, 234, 234, 0.733);
}

.nav{
    display: flex;
    justify-content: end;
    align-items: center;
    list-style: none;
}
header{
    border-radius: 25%;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
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
a{
    text-decoration: none;
}
.list{
    display: flex;
    margin: 0.7rem;
    border-radius: 25%;
    
    
}

.list :hover{
    font-weight: bolder;
    background-color: aquamarine;
    padding: 10px;
    transition: 0.3s;
    border-radius: 25%;
    
}

.Intro{
    display: flex;
    justify-content: space-between;
    margin: 1rem;
}
.Name{
    padding: 20px;
    padding-left: 15%;
}

.Name h1{
    text-shadow: 0.5px 0.5px green;
    font-size: 50px;
}
.fotodiri{
    padding: 20px;
    margin-right: 7rem;
}
.foto-tron{
    width: 250px;
    border-radius: 25%;
}

.aboutweb{
    margin: 20px;
    margin-top: 1.5rem;
}

.Deskripsi{
    font-family: 'Raleway';
    padding: 1rem;
    padding-top: 2rem;
    text-align: center;
    font-size: 20px;
}

.isiweb{
    font-family: 'Raleway';
}

.judul{
    text-align: center;
    font-size: 20px;
}

.nav-isiweb ul{
    display: inline;
    
}
.nav-isiweb ul li{
    padding-bottom: 70px;
}
.nav-isiweb{
    margin: 20px;
}

.nav-isiweb .isi .tombol :hover{
    font-weight: bolder;
    background-color: aquamarine;
    padding: 10px;
    transition: 0.3s;
    border-radius: 25%;
    
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
      <header>
        <div class="start-side">
          <img src="LOGO.png" alt="" width="100px">
        </div>
        <div class="nav">
          <ul>
            <div class="list">
              <a href="#"><li>HomePage</li></a>
            </div>
            <div class="list"><a href="create.php" target="_blank">
              <li>Isi Formulir</li></a>
            </div>
            <div class="list">
              <a href="daftar_data.php"><li>Tabel</li></a>
            </div>
          </ul>
        <div/>
      </header>

      <section class="Intro">
        <div class="Name">        
          <h1>
            Hello, I'm 
          </h1>
          <h1>
            Radot Yohanes Nababan
          </h1>
        </div>
        <div class="fotodiri">
          <img src="FOTODIRI.jpg" class="foto-tron">
        </div>
      </section>

      <section class="aboutweb">
        <div class="Deskripsi">
          <p>Halo, saya Radot Yohanes Nababan, Mahasiswa Semester 5 Program Studi Teknik Informatika Institut Teknologi Sumatera</p>
          <p>Website ini ditujukan untuk memenuhi Ujian Akhir Semester Pemrograman Web, Teknik Informatika ITERA 2023.</p>
        </div>

        <div class="isiweb">
          <div class="judul">
            <p>
              Website ini berisikan 2 Page yaitu :
            </p> 
          </div>

          <div class="nav-isiweb">
            <div class="isi">
              <div class="tombol"><a href="">Formulir</a></div>
              <p>Page ini berisikan pengisian simulasi Form Pendaftaran yang sudah disusun sedemikian rupa</p>

            </div>
            <div class="isi">
              <div class="tombol"><a href="">Tabel</a></div>
              <p>Page ini berisikan Tabel Data Mahasiswa yang sudah dilakukan pengisian berdasarkan formulir yang sudah diisi</p>
            </div>
        </div>

        <div class="contactme">
            
        </div>
      </section>
    <section>
      <footer>
      <div class="end">
        <p>UJIAN AKHIR SEMESTER Pemrograman Web 2023</p>
      </div>
      </footer>
    </section>
    </div>
  </body>
</html>
