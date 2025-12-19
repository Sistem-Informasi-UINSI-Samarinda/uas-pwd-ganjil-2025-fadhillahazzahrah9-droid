<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
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
    <header>
      <h1>Selamat Datang, <?php echo $_SESSION['nama_lengkap']; ?>!</h1>
      <p>Anda sedang berada di halaman dashboard utama.</p>
      <!-- <button>☰ Menu</button> -->
    </header>

    <section class="cards">
      <div class="card">
        <h3>Total Rakyat Indonesia</h3>
        <p>128.000.000</p>
      </div>
      <div class="card">
        <h3>Total Wilayah</h3>
        <p>45</p>
      </div>
      <div class="card">
        <h3>Total partai</h3>
        <p>8</p>
      </div>
     
    </section>
  </div>

</body>
</html>