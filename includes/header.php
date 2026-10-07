<?php 

$pageTitle = $pageTitle ?? 'Telkom University - Praktikum Web'; 

$currentPage = basename($_SERVER['PHP_SELF']); 

?> 

<!doctype html> 

<html lang="id"> 

<head> 

    <meta charset="utf-8"> 

    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title><?= htmlspecialchars($pageTitle) ?></title> 

<<<<<<< HEAD
    <link rel="stylesheet" href="assets/css/style.css">
=======
    <link rel="stylesheet" href="../assets/css/style.css"> 
>>>>>>> 019b16a8aa19462fe6e18203edbf6ed8434a0ccc

</head> 

<body> 

<header class="site-header"> 

    <div class="container nav-wrap"> 

<<<<<<< HEAD
        <a class="brand" href="profile.php">
=======
        <a class="brand" href="index.php"> 
>>>>>>> 019b16a8aa19462fe6e18203edbf6ed8434a0ccc

            <span class="brand-mark">TU</span> 

            <span> 

                <strong>Telkom University</strong> 

                <small>Simulasi Company Profile</small> 

            </span> 

        </a> 

        <nav class="main-nav" aria-label="Navigasi utama"> 

<<<<<<< HEAD
            <a class="<?= $currentPage === 'profile.php' ? 'active' : '' ?>" href="profile.php">Beranda</a>
=======
            <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Beranda</a> 
>>>>>>> 019b16a8aa19462fe6e18203edbf6ed8434a0ccc

            <a class="<?= $currentPage === 'profile.php' ? 'active' : '' ?>" href="profile.php">Profil</a> 

            <a class="<?= $currentPage === 'programs.php' ? 'active' : '' ?>" href="programs.php">Program Studi</a> 

            <a class="<?= in_array($currentPage, ['news.php', 'news_detail.php']) ? 'active' : '' ?>" href="news.php">Berita</a> 

            <a class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">Kontak</a> 

        </nav> 

    </div> 

</header> 

<main>


