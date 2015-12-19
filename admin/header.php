<?php 
    $btn = 'btn btn-success';
    $current = $_SERVER['REQUEST_URI'];
    $saleLink = '/mminfo/admin/sales/add-sale.php';
    $butikLink = '/mminfo/admin/butiks/add-butik.php';
    $mallsLink = '/mminfo/admin/malls/add-mall.php';
    $citiesLink = '/mminfo/admin/cities/index.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MallMap.info</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/mminfo/admin/css/style.css">
    </head>
    <body>
        <div class="container">
            <header class="row">
                <h2 class="col-xs-4"><a href="/mminfo">MallMap.info</a></h2>
                <a href="/mminfo/admin" class="col-xs-4 text-center">Панель администратора</a>
                <a href="/mminfo/admin/sales/add-sale.php"><div class="col-xs-1 <?php if($current==$saleLink) echo $btn; ?>">Скидки</div></a>
                <a href="/mminfo/admin/butiks/add-butik.php"><div class="col-xs-1 <?php if($current==$butikLink) echo $btn; ?>">Бутики</div></a>
                <a href="/mminfo/admin/malls/add-mall.php"><div class="col-xs-1 <?php if($current==$mallsLink) echo $btn; ?>">Моллы</div></a>
                <a href="/mminfo/admin/cities/index.php"><div class="col-xs-1 <?php if($current==$citiesLink) echo $btn; ?>">Города</div></a>
            </header>
            <hr>