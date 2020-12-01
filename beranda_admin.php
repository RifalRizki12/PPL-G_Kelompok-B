<?php 
    session_start();
    if($_SESSION['status_login_admin'] != true) {
        echo '<script>window.location="beranda.php"</script>';
    }

    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI.Jobs || Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="beranda_admin.php">AI.Jobs || ADMIN</a></h1>
            <ul>
                <li><a href="beranda_admin.php">Beranda</a></li>
                <li><a href="verifikasi.php">Verifikasi</a></li>
                <li><a href="kategori.php">kategori</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <!-- kategori -->
    <div class="section">
        <div class="container">
            <div class="tulis">
                <table>
                <tr>
                <td><img src="img/job.png" width="400px"></td>
                <td><a href="daftar_user.php">Kelola data Pencari Kerja</a><a href="daftar_pemilik.php">Kelola data Pemilik Usaha</a></td>
                </tr>
                </table>
            </div>
        </div>
    </div>

    
    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2020 - AI.Jobs</small>
        </div>
    </footer>
</body>
</html>