<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIOSK AGRO INDUSTRY - AUTHEN MODE</title>
    <?php include "components/header_authen.php"; ?>
</head>
<body>
    <!-- partial background-->
    <?php require_once "components/top_background.php";?>
    <!-- partial top_navbar-->
    <?php require_once "components/top_navbar.php";?>
    <!-- partial body content-->
    <div class="container">
        <?php require_once "components/login_form.php";?>
    </div>

    <div class="footer-container">
        <div class="gradient-hr ai-border"></div>
        <footer class="footer mt-auto py-3">
            <div class="container">
                <?php require_once "components/footer_authen.php";?>
            </div>
        </footer>
    </div>
    <?php include "components/footer_authen_script.php";?>
</body>
</html>