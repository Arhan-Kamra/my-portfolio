<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arhan Portfolio</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body class="has-sidebar">
    <header class="flex">
        <a href="./index.html">
            <div class="logo flex-item">

            </div>
        </a>
        <nav class="flex-item">
            <ul>
                <a class="projects<?php echo ($activePage == 'index') ? ' active':'';?>"
                    href="./index.php">projects</a>
                <a class="about<?php echo ($activePage == 'about') ? ' active':''; ?>"
                    href='./about.php'>about</a>
                <a class="contact<?php echo ($activePage == 'contact') ? ' active':'';?>"
                    href="./contact.php">contact</a>
            </ul>
        </nav>
        <div class="hamburger-menu">
            <span><i class="fas fa-bars"></i></span>
            <!-- hamburger menu content which shows on hovering over hamburger icon -->
            <div class="hamburger-menu__content--container">
                <div class="hamburger-menu__content">
                    <ul class="flex">
                        <a class="flex-item<?php echo ($activePage == 'index') ? ' active':'';?>"
                            href="../index.php">projects</a>
                        <a class="flex-item<?php echo ($activePage == 'about') ? ' active':'';?>"
                            href="../about.php">about</a>
                        <a class="flex-item<?php echo ($activePage == 'contact') ? ' active':'';?>"
                            href="../contact.php">contact</a>
                    </ul>
                </div>
            </div>
            <!-- hamburger menu content ends -->
        </div>
    </header>