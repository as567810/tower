<?php 
$pathlocal=$_SERVER['HTTP_HOST'];

if ($pathlocal == "localhost") {
    define(HDOMAIN,"http://".$pathlocal."/projects/tower/");
}
else {
    define(HDOMAIN,"https://amaninfradeveloper.in/");
}
?>

<head>
  <meta name="robots" content="NOINDEX, NOFOLLOW" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo HDOMAIN?>images/favicon.png" type="image/x-icon" />
  <title>Aman Infra Developer</title>

  <link rel="stylesheet" href="<?php echo HDOMAIN?>css/style.css?<?php echo time();?>">
  <link rel="stylesheet" href="<?php echo HDOMAIN?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo HDOMAIN?>css/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo HDOMAIN?>css/animate.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo HDOMAIN?>css/fancybox.min.css" />
</head>