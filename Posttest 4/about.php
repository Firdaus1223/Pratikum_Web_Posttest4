<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(255, 255, 255);
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  width: 60%;
  margin: 0px auto;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Web kodingan Html dan CSS pengerjaan Posttest 2.</p>
  <p>Posttest kali ini mengangkat tema Kuliner yang mana disini saya mengambil kuliner samarinda.</p>
</div>

<h2 style="text-align:center">Biodata</h2>

  <div class="column">
    <div class="card">
      <img src="foto/Foto ku.jpeg" alt="Firdaus" style="width:100%">
      <div class="container">
        <h2>muhammad Firdaus</h2>
        <p class="title">2109106052</p>
        <p>Mahasiswa Informatika Universitas Mulawarman.</p>
        <p>muhammadfirdaus41208@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>

</style>
  <p>
    <a href="posttest4.php"><button>ke halaman Utama</button></a>
  </p>