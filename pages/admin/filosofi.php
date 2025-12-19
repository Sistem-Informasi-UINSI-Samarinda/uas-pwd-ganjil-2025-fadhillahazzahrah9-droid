<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../../config/koneksi.php';
$ambilfilosofi = "SELECT * FROM filosofi ORDER BY id_filosofi DESC";
$filosofi = mysqli_query($conn, $ambilfilosofi);
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
    <div>
      <h2>Indonesia Raya</h2>
    </div>
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
        <table>
          <tr>
            <th>No</th>
            <th>Judul Filosofi</th>
            <th>Tanggal Disahkan</th>
            <th>Action</th>
          </tr>
          <?php 
          $no = 1;
          if(mysqli_num_rows($filosofi) > 0){
            while($row = mysqli_fetch_assoc($filosofi)){ 
          ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul_filosofi']; ?></td>
            <td><?= $row['tanggal_disahkan']; ?></td>
            <td><a href="editfilosofi.php?id=<?= $row['id_filosofi'] ?>">Edit</a> |
            <a href="hapusfilosofi.php?id=<?php echo $row['id_filosofi'] ?>" onclick="return confirm('Yakin ingin menghapus model ini?')">Hapus</a></td>
          </tr>
          <?php
            }
          } ?>
        </table>
      </div>
    </section>
  </div>

</body>
</html>