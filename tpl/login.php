<?php require_once 'common/config.php'; ?>
<?php require_once 'controllers/login.php';  ?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="app/css/bootstrap.css"/>
    <link rel="stylesheet" href="app/css/demo.css"/>
    <link rel="stylesheet" href="app/css/style.css"/>
    
    <script src="app/js/jquery.js"></script>
    <script src="app/js/fancybox.js"></script>
    <script src="app/js/bootstrap.js"></script>
    <script src="app/js/bxslider.js"></script>
    <script src="app/js/parallax.js"></script>
    <script src="app/js/app.js"></script>
</head>
<body>
    <?php include $path['tpl'].'main.php'; ?>
</body>
</html>