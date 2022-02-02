<!doctype html>
<html lang="en">
<head>
    <?php include "components/header.php" ?>
</head>
<body>
    
    <div class="body-background-gradient">
        <div class="top-background">
            <div class="background_top"></div>
            <div class="gradient-hr"></div>
        </div>
        <div class="top-navbar">
            <div class="nav_bar animate__animated animate__fadeInDown">
                <div class="top_box">
                    <div class="text_head">งานประชาสัมพันธ์ คณะอุตสาหกรรมเกษตร มหาวิทยาลัยเกษตรศาสตร์</div>
                </div>
            </div>
        </div>
        <div class="bg-text-run">
            <?php include "components/marqueeTextRun.php";?>
        </div>
        <div class="sub-widget-menu">
            <?php 
                include "components/sub-widgetMenu-1.php";
                include "components/sub-widgetMenu-2.php";
            ?>
        </div>
        <div class="main-video">
            <?php include "components/mainVideo.php";?>
        </div>
        <div class="main-widget-menu">
            <?php include "components/widgetMenu.php";?>
        </div>
        
        <div class="main-poster-slide">
            <?php include "components/poster-item.php";?>
        </div>
        <div class="footer">
            <div class="gradient-hr"></div>
            <div class="info"><?php include "components/footer-info.php";?></div>
        </div>
    </div>
    

    <?php include "components/footer.php";?>
</body>

</html>