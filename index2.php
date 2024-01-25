<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login User - Aplikasi Perpustakaan Digital</title>
	<link rel="icon" href="logo smk mts.png" type="image/png">
	<style>
        body {
            background-image: url("bg5.jpg");
            background-size: cover;
            background-color: #1b1c1e;
            font-family: arial, serif; 
        }
        h1 {
            color: white;
            margin-left: 480px;
        }
        .label {
            font-size: 18pt;
            margin-left: 25px;
        }
        p {
            font-size: 12pt;
            margin-left: 25px;
        }
        .fill {
            width: 445px;
            height: 30px;
            margin-left: 25px;
        }
        .card {
            background-color: White;
            width: 900px;
            height: 950px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 5px 10px 30px #000;
            border-radius: 10px;
        }
        .b1 {
            width: 80px;
            height: 40px;
            background-color: #184a88;
            color: white;
            font-size: 12pt;
            margin-top: 40px;
            margin-left: 25px;
            border-radius: 10px;
        }
        .b2 {
            width: 80px;
            height: 40px;
            background-color: #ff9900;
            margin-left: 25px;
            border-radius: 10px;
        }
        .img-login {
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
    <div style="display: flex; align-items: center;">
    <img src="logo smk mts.png" width="50px" height="50px">
    <h1>Aplikasi Perpustakaan Digital</h1>
    </div>
    <div class="card">
    <div style="display: flex;">
        <div class="left-content">
        <br>
        <p class="label">Silahkan Masukkan Data Anda Untuk Melanjutkan</p>
        <p>NIS :</p>
        <input type="text" name="nis" placeholder="Masukkan NIS Anda..." class="fill">
        <p>Nama Lengkap :</p>
        <input type="text" name="nama" placeholder="Masukkan Nama Anda..." class="fill" inquired>
        <p>Email :</p>
        <input type="text" name="email" placeholder="Masukkan Email Anda..." class="fill" inquired>
        <p>Alamat :</p>
        <input type="text" name="alamat" placeholder="Masukkan Alamat Anda..." class="fill" inquired>
        <p>Username :</p>
        <input type="text" name="username" placeholder="Masukkan Username Anda..." class="fill" inquired>
        <p>Username :</p>
        <input type="text" name="username" placeholder="Masukkan Username Anda..." class="fill" inquired>
        <p>Password :</p>
        <input type="password" name="password" placeholder="Masukkan Password Anda..." class="fill" inquired>
        <p>Level</p>
        <select class="fill">
        <option value="">Pilih</option>
        <option value="1">User</option>
        <option value="2">Petugas</option>
        <option value="3">Admin</option>
      </select>
        <br>
        <button type="submit" value="simpan" class="b1">simpan</button>
        <p>Saya Sudah memiliki Akun. Login<button class="b2">Disini</button></p>
    </div>
        <div class="right-content">
            <img src="img1.jpg" class="img-login">
    </div>
    </div> 
</body>
</html>