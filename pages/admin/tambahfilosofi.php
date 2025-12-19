<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../../config/koneksi.php';
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../../assets/css/adminStyles.css">
</head>
<body>

  <div class="sidebar">
    <h2>Indonesia Raya</h2>
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="filosofi.php">Filosofi</a></li>
      <li><a href="logout.php" class="logout">Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <header>
        <a href="tambahfilosofi.php">+ Tambah Filosofi</a>
    </header>

    <section class="cards">
        <div class="card">
            <form class="tambah-form" action="" method="POST" enctype="multipart/form-data">
                <label class="label-tambah" for="">Judul Filosofi</label> <br>
                <input class="tambah-input" type="text" name="judul_filosofi" minlength="2" maxlength="255" placeholder="isikan judul filosofi" required>
                <br>
                <br>
                <br>
                
                <label class="label-edit" for="">Deskripsi Filosofi</label> <br>
                <textarea class="tambah-textarea" name="deskripsi_filosofi" rows="15" cols="70" minlength="12" maxlength="255" required></textarea>
  
                <label class="label-edit" for="">Tanggal Filosofi Disahkan</label> <br>
                <input class="tambah-input" type="date" name="tanggal_disahkan" required>  <br>
                <button class="tambah-simpan" type="submit" name="simpan">Simpan Model</button>
            </form>
        </div>
    </section>
  </div>

<?php 
    if(isset($_POST['simpan'])){
        $judul_filosofi = $_POST['judul_filosofi'];
        $deskripsi_filosofi = $_POST['deskripsi_filosofi'];
        $tanggal_disahkan = $_POST['tanggal_disahkan'];

        $query = "
        INSERT INTO filosofi (judul_filosofi, deskripsi_filosofi, tanggal_disahkan)
        VALUES ('$judul_filosofi', '$deskripsi_filosofi', '$tanggal_disahkan')
        ";

        if(mysqli_query($conn, $query)){
            echo "<script>
                alert('Filosofi Telah di unggah');
                window.location.href='filosofi.php';
            </script>";
        }
        else {
             echo "<script>
                alert('Filosofi Gagal di unggah');
                window.location.href='filosofi.php';
            </script>";
        }
    }
?>

</body>
</html>
