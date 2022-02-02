<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kiosk</title>
	<?php include "components/header_welcome.php";?>
    <script>
		setTimeout(function() {
			var element = document.getElementById("loading");
			element.className = element.className.replace(/\bhide\b/g, "");
		}, 3000);
		/*---------------------------------*/

		setTimeout(function() {
			window.location.replace("<?php echo BASEURL; ?>/homeController");
		}, 10000);
    </script>
</head>
<body>
	<div class="introduction">
        <img src="assets/img/logo-ai.png" alt="" class="img-logo animate__animated animate__backInDown" />
        <div class="name-faculty_en  animate__animated animate__fadeInLeft">
            FACULTY OF AGRO INDUSTRY KASETSART UNIVERSITY
        </div>
        <div class="name-faculty_th animate__animated animate__fadeInUp">
            คณะอุตสาหกรรมเกษตร มหาวิทยาลัยเกษตรศาสตร์
        </div>
		<?php include "components/footer_welcome_script.php";?>

    </div>
</body>
</html>
