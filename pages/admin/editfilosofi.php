<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../../config/koneksi.php';

if(isset($_GET['id'])){
    $id_filosofi = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM filosofi WHERE id_filosofi = '$id_filosofi'");
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "<script>
            alert('Data Filosofi tidak ditemukan!');
            window.location.href='filosofi.php';
        </script>";
        exit();
    }
} else {
    echo "<script>
        alert('ID filosfi tidak ditemukan!');
        window.location.href='filosofi.php';
    </script>";
    exit();
}

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
    <section class="cards">
                    <form class="edit-form" action="" method="POST" enctype="multipart/form-data">
                <label class="label-edit" for="">Judul Filosofi</label> <br>
                <input class="edit-input" type="text" name="judul_filosofi" maxlength="255" value="<?php echo $data['judul_filosofi'] ?>" placeholder="isikan judul filosofi" required>
                <br>
                <label class="label-edit" for="">Deskripsi Filosofi</label> <br>
                <textarea class="edit-textarea" name="deskripsi_filosofi" rows="15" cols="70" minlength="12" maxlength="255" required><?php echo $data['deskripsi_filosofi'] ?></textarea>
                <br>
                <label class="label-edit" for="">Tanggal Disahkan</label> <br>
                <input class="edit-input" type="date" name="tanggal_disahkan" value="<?php echo $data['tanggal_disahkan'] ?>">
                <br>
                <br>
                <br>
                <button class="edit-simpan" type="submit" name="simpan">Simpan Model</button>
            </form>
    </section>
  </div>
<?php 

if(isset($_POST['simpan'])){
        $judul_filosofi = $_POST['judul_filosofi'];
        $deskripsi_filosofi = $_POST['deskripsi_filosofi'];
        $tanggal_disahkan = $_POST['tanggal_disahkan'];
        
            if (strlen($deskripsi_filosofi) > 500) {
    echo "<script>
        alert('Deskripsi maksimal 500 karakter!');
        window.location.href='filosofi.php';
    </script>";
    exit();
}
        $query = "
            UPDATE filosofi 
            SET judul_filosofi = '$judul_filosofi',
                deskripsi_filosofi = '$deskripsi_filosofi',
                tanggal_disahkan = '$tanggal_disahkan'
            WHERE id_filosofi = '$id_filosofi'
        ";
    
    if(mysqli_query($conn, $query)){
        header("Location: filosofi.php");
        exit();
    }
    else{
        echo "Gagal menambahkan data: ". mysqli_error($conn);
    }
}
?>

</body>
</html>