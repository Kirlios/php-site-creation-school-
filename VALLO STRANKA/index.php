<?php include('./modules/config.php');?>
<!DOCTYPE html>
<html lang='sk'>

<head>
<title>TitKok - <?php echo (SITE_NAME); ?></title>
<?php include('./modules/parts/head.php');?>
</head>

<body>
 <?php include("./modules/parts/header.php"); ?>

<main>
    <?php include("./modules/parts/sections/intro.php"); ?>
    <?php include("./modules/parts/sections/form-requests.php"); ?>


<h1><?php echo (SITE_NAME); ?></h1>
<p><?php echo (SITE_AUTHOR); ?></p>

</body>
</html>
