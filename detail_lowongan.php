<?php 
    error_reporting(0);
    include "koneksi.php";
    session_start();
    if($_SESSION['status_login_user'] != true) {
        echo '<script>window.location="beranda.php"</script>';
    }

    $dlowongan = mysqli_query($conn, "SELECT * FROM jobs WHERE job_id = '".$_GET['id']."'");
    $p = mysqli_fetch_object($dlowongan);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = '".$_SESSION['id_user']."' ");
    $d = mysqli_fetch_object($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI.Jobs || Detail Lowongan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="beranda_user.php">AI.Jobs || PENCARI KERJA</a></h1>
            <ul>
                <li><a href="beranda_user.php">Beranda</a></li>
                <li><a href="profil_user.php">Profil</a></li>
                <li><a href="lamaran_user.php">Lamaran</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="detail_lowongan.php">
                <input type="text" name="search" placeholder="Cari Lowongan" value="<?php echo $_GET['search'] ?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Lowongan">
            </form>
        </div>
    </div>

    <!-- detail lowongan -->
    <div class="section">
        <div class="container">
            <h3>Detail Lowongan</h3>
            <div class="box">
                <div class="col-2">
                    <img src="job_img/<?php echo $p->job_image ?>"width="100%" >
                </div>
                <div class="col-2">
                    <h3><?php echo $p->job_name ?></h3>
                    <h4 >Rp <?php echo number_format($p->job_salary)  ?></h4>
                    <p style="color: #fff;">Deskripsi : <br>
                        <?php echo $p->job_desc ?>
                    </p>
                    <p class="btn2"><a href="proses_lamar.php?idl=<?php echo $p->job_id ?>&idu=<?php echo $d->id ?>" onclick="return confirm ('Kirim Lamaran Pekerjaan?')">Ajukan Lamaran</a></p>
                </div>
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