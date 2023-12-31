<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Hub</title>
    <link rel="stylesheet" href="assets/css/adminstyle.css">
</head>
<body>
    <header>
        <img class="logo" src="assets\images\healthub-logo-cropped-30.png" alt="logo">
        <nav>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </nav>
        <a class="cta" href="logout.php"><button>Logout</button></a>
    </header>
    <main>

        <div class="container-2">
            
            <!-- Add your content here -->
            <div class="content-section">
                <div class="card">
                    <h2>tambah obat</h2>
                    <img src="group-4-10.png" alt="tambah obat">
                    <a href="admin.php"><button> tambah sekarang</button></a>
                </div>
                <div class="card">
                    <h2>Beli Obat</h2>
                    <img src="group-4-10.png" alt="Beli Obat">
                    <a href="another-page.html"><button> Beli Sekarang</button></a>
                </div>
                <div class="card">
                    <h2>Beli Obat</h2>
                    <img src="group-4-10.png" alt="Beli Obat">
                    <a href="another-page.html"><button> Beli Sekarang</button></a>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer">
            <div class="row">
            <img src="healthub-logo-cropped-40.png" alt="logo">
            </div>
            
            <div class="row">
            <ul>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Career</a></li>
            </ul>
            </div>
            
            <div class="row">
            HEALTH HUB Copyright © 2023 HEALTH HUB - All rights reserved || Designed By: Abel Karbel
            </div>
            </div>
        </footer>
        
    </main>
</body>
</html>