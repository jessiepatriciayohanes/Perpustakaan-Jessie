<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Aplikasi Perpustakaan Digital</title>
	<link rel="icon" href="logo smk mts.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        body {
            background-color: rgb(26, 44, 71);
        }
        h1 {
            color: white;
        }
        .j1, .j3 {
            margin-left: 90px;
        }
        .j2, .j4, .j5, .j7, .j8 {
            margin-left: 100px;
        }
        .j5{
            margin-left: 115px;
        }
        .j6, .j10 {
            margin-left: 75px;
        }
        .j9 {
            margin-left: 65px;
        }
        h3 {
            margin-left: 20px;
        }
        p {
            margin-left: 20px;
        }
        .topnav {
            background-color: #101112;
            overflow: hidden;
        }
        .topnav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            font-size: 14pt;
        }
        .topnav a:hover {
            background-color: #000000;
            color: white;
        }
        .fill {
            height: 25px;
            width: 300px;
            margin-top: 10px;
            margin-left: 850px;
        }
        .fill2 {
            height: 25px;
            width: 300px;
            margin-left: 20px;
        }
        textarea {
            height: 50px;
            width: 290px;
            margin-left: 20px;
        }
        button {
            height: 30px;
            width: 30px;
        }
        .b1 {
            height: 30px;
            width: 50px;
            margin-left: 20px;
        }
        .b2 {
            height: 30px;
            width: 50px;
        }
        button {
            height: 30px;
            width: 30px;
        }
        .con-left {
            height: 575px;
            width: 350px;
            background-color: #184a88;
            float: left;
            margin-top: 10px;
        }
        .con-right {
            height: 575px;
            width: 1160px;
            background-color: #184a88;
            margin-left: 360px;
            margin-top: 10px;
        }
        .cover {
            margin-left: 68px;
            margin-top: 30px;
        }
    </style>
</head>
    <div class="header">
        <div style="display: flex; align-items: center;">
        <img src="logo smk mts.png" width="50px">
        <h1>Aplikasi Perpustakaan Digital</h1>
        </div>
        <div class="topnav">
            <a href="perpustakaan/index3.php">Logout</a>
            <a href="">Contact</a>
            <a href="#about">About</a>
            <input type="text" placeholder="Search.." name="search" class="fill">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div class="konten">
        <div class="con-left">
        <h3>Form Pendaftaran</h3>
        <p>Nama :</p> 
        <input type="text" id="nama" placeholder="Masukkan Nama Anda..." required class="fill2">
        <p>Alamat :</p> 
        <input type="text" id="alamat" placeholder="Masukkan Alamat Anda..." required class="fill2">
        <p>Nomor Telepon :</p> 
        <input type="text" id="nomor" placeholder="Masukkan Nomor TLP Anda..." required class="fill2">
        <p>Jenis Kelamin :</p>
        <select class="fill2">
        <option value="">(select one)</option>
        <option value="1">Pria</option>
        <option value="2">Wanita</option>
        </select>
        <p>Komentar :</p>
        <textarea placeholder="Masukkan Komentar Anda..."></textarea>
        <br>
        <br>
        <button type="submit" id="submit" class="b1">Submit</button>
        <button type="submit" id="reset" class="b2">Reset</button>
        </div>
        </div>
        <div class="con-right">
        <div style="display: flex; align-items: center;">
        <img src="buku1.jpg" width="150px" height="200px" class="cover">
        <img src="buku2.jpg" width="150px" height="200px" class="cover"> 
        <img src="buku3.jpg" width="150px" height="200px" class="cover">
        <img src="buku4.jpg" width="150px" height="200px" class="cover">
        <img src="buku5.jpg" width="150px" height="200px" class="cover">  
        </div>
        <div style="display: flex; align-items: center;">
        <h3 class="j1">C++ Uncover</h3>
        <h3 class="j2">Pascal Uncover</h3>
        <h3 class="j3">HTML Uncover</h3>
        <h3 class="j4">CSS Uncover</h3>
        <h3 class="j5">PHP Uncover</h3>
        </div>
        <div style="display: flex; align-items: center;">
        <img src="buku6.jpg" width="150px" height="200px" class="cover">
        <img src="buku7.jpg" width="150px" height="200px" class="cover"> 
        <img src="buku8.jpg" width="150px" height="200px" class="cover">
        <img src="buku9.jpg" width="150px" height="200px" class="cover">
        <img src="buku10.jpg" width="150px" height="200px" class="cover">  
        </div>
        <div style="display: flex; align-items: center;">
        <h3 class="j6">MySQL Uncover</h3>
        <h3 class="j7">JS Uncover</h3>
        <h3 class="j8">Bootstrap Uncover</h3>
        <h3 class="j9">OOP PHP Uncover</h3>
        <h3 class="j10">Laravel Uncover</h3>
    </div>
<body>
</body>
</html>