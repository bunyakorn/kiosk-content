<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard</title>
    <?php include "components/dashboard/header-dashboard.php"; ?>
</head>
<body class="app sidebar-mini rtl">
    
    <!--Global-Loader-->
    <div id="global-loader">
        <img src="assets/images/icons/loader.svg" alt="loader">
    </div>

    <div class="page">
        <div class="page-main">
            
            <!--app-header-->
            <?php require_once("components/dashboard/top_menu.php");?>
            <!--app-header end-->

            <!-- Sidebar menu-->
            <?php require_once("components/dashboard/left_sidemenu.php"); ?>
            <!--sidemenu end-->

            <!-- app-content-->
            <?php  require_once("components/dashboard/app_config_poster.php"); ?>
            <!-- End app-content-->

        </div>
    </div>
    <!-- End Page -->

    <?php include "components/dashboard/footer-dashboard.php"; ?>
    
</body>
</html>