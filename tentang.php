<?php include 'includes/meta.php'; ?>
<?php include 'includes/header.php'; ?>


<?php 
include 'config/koneksi.php';

$tes = "SELECT * FROM filosofi";

$filosofi = mysqli_query($conn, $tes);
?>

    <main>
        <section class="about-section">
            <div class="container">
                <h1>Apa Itu Indonesia Raya?</h1>
                <p class="intro">Indonesia Raya adalah lagu kebangsaan Republik Indonesia yang diciptakan oleh Wage Rudolf Supratman. Lagu ini bukan hanya simbol nasionalisme, tetapi juga mengandung visi, misi, dan makna mendalam bagi bangsa Indonesia.</p>

                <div class="content-grid">
                    <?php while($data = mysqli_fetch_assoc($filosofi)) { ?>
                    <div class="card">
                        <h2><?= $data["judul_filosofi"] ?></h2>
                        <p><?= $data["deskripsi_filosofi"] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>