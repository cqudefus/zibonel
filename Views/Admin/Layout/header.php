<!DOCTYPE html>
<html lang="en">
<head>
    <?= $meta_data ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= empty($title) ? 'BerkaPhp' : ucfirst($title) ?></title>

    <link rel="stylesheet" type="text/css" href="/Views/Default/Layout/css/bootstrap.min.css">
    <link href="/berkaPhp/template/Utility/Style/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/Views/Admin/Layout/css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="/Views/Admin/Layout/css/styles.css" />
    <link rel="stylesheet" href="/Views/Admin/Layout/css/style.css" />
    <link rel="stylesheet" href="/Views/Admin/Layout/css/bootstrap-imageupload.css" />

    <link rel="shortcut icon" href="/Views/Default/Assets/favicon.ico" type="image/x-icon">

</head>
<body>
<?= berkaPhp\helpers\Element::load("Header", 'Admin')?>

<?= berkaPhp\helpers\Element::load("LeftMenu", 'Admin')?>

