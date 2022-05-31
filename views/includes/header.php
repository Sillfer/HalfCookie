<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="node_modules\bootstrap\scss\bootstrap.css">
    <link rel="icon" type="image/png" href="views\assets\images\Logo2.svg"/>
    <title>HALF COOKIE</title>
</head>
<body style="background-color: #F4FAFF;">
    <?php
    $path = explode("/", $_SERVER["REQUEST_URI"])[2];
        if($path != "login" && $path != "register") {
         include('views/includes/navbar.php');
        }
    ?>
    <div class="row m-0">
        <div class="col-md-12">
            <?php
            include('views/includes/alerts.php');
            ?>
        </div>
    </div>