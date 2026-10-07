<?php 

$pageTitle = 'Kontak - Telkom University'; 

$success = isset($_GET['success']); 

require 'includes/header.php'; 

?> 

<section class="section"> 

    <div class="container grid-2"> 

        <div> 

            <span class="eyebrow">Kontak</span> 

            <h1>Kirim pesan</h1> 

            <p class="lead">Form ini mendemonstrasikan proses INSERT ke database dengan prepared statement.</p> 

            <?php if ($success): ?> 

                <div class="alert alert-success">Pesan berhasil disimpan ke database.</div> 

            <?php endif; ?> 

        </div> 

        <form class="card" action="contact_process.php" method="post"> 

            <div class="form-group"> 

                <label for="nama">Nama</label> 

                <input id="nama" name="nama" required maxlength="100"> 

            </div> 

            <div class="form-group"> 

                <label for="email">Email</label> 

                <input id="email" type="email" name="email" required maxlength="120"> 

            </div> 

            <div class="form-group"> 

                <label for="pesan">Pesan</label> 

                <textarea id="pesan" name="pesan" required maxlength="1000"></textarea> 

            </div> 

            <button class="btn btn-primary" type="submit">Kirim Pesan</button> 

        </form> 

    </div> 

</section> 

<?php require 'includes/footer.php'; ?> 
<?php 

require_once 'config/database.php'; 
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 

    header('Location: contact.php'); 

    exit; 

} 

 

$nama = trim($_POST['nama'] ?? ''); 

$email = trim($_POST['email'] ?? ''); 

$pesan = trim($_POST['pesan'] ?? ''); 

 

if ($nama === '' || $pesan === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) { 

    exit('Data tidak valid. Silakan kembali dan periksa input.'); 

} 

 

$stmt = $conn->prepare("INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)"); 

$stmt->bind_param('sss', $nama, $email, $pesan); 

$stmt->execute(); 

 

header('Location: contact.php?success=1'); 

exit; 
