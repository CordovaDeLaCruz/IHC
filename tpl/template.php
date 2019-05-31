<!DOCTYPE html>
<html lang=en-US>
<head>
  <meta charset="<?php echo $site['charset']; ?>">
  <meta lang="<?php echo $site['lang']?>">
  <meta name="keywords" content="<?php echo $site['keywords']; ?>" > 
  <link rel="shortcut icon" href="./app/img/favicon.png" type="image/x-icon">
  <meta name="description" content="<?php echo $site['description']; ?>" >
  <title><?php echo $site['name']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="app/css/bxslider.css"/>
  <link rel="stylesheet" href="app/css/fancybox.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="app/css/bootstrap.css"/>
  <link rel="stylesheet" href="app/css/style.css"/>

  <script src="app/js/jquery.js"></script>
  <script src="app/js/fancybox.js"></script>
  <script src="app/js/bootstrap.js"></script>
  <script src="app/js/bxslider.js"></script>
  <script src="app/js/parallax.js"></script>
  <script src="app/js/app.js"></script>

</head>
<body>
 
  <?php include $path['tpl'].'header.php';?>
  <?php include $path['tpl'].'main.php'; ?>
  <?php include $path['tpl'].'footer.php'; ?>
</body>
</html>