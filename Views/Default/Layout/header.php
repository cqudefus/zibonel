<!DOCTYPE html>
<html lang="en">
<head>
    <?= $meta_data ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= empty($title) ? 'BerkaPhp' : ucfirst($title) ?></title>

    <link rel="stylesheet" type="text/css" href="/Views/Default/Layout/css/bootstrap.min.css">
    <link href="/berkaPhp/template/Utility/Style/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700' rel='stylesheet' type='text/css'>
    <!-- CSS Styles -->

    <link rel="stylesheet" href="/Views/Default/Layout/css/styles.css" />
    <link rel="stylesheet" href="/Views/Default/Layout/css/style.css" />
    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="/Views/Default/Layout/css/theme-bottle.css" />

    <link rel="shortcut icon" href="/Views/Default/Assets/favicon.ico" type="image/x-icon">

    <script src="/Views/Default/Layout/js/jquery-2.1.1.js"></script>
    <script src="/berkaPhp/template/Utility/Javascript/app.js"></script>
    <script src="/Views/Default/Layout/js/zibonelFrontEnd.js"></script>
</head>
<body>
<div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div
<?= berkaPhp\helpers\Element::load("header")?>
