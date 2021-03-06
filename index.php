<?php

require_once './autoload.php';
require_once ('./views/includes/header.php');

$home = new HomeController();
$admin = new AdminController();

$pages = [ 
         'home', 'cart', 'dashboard', 'login', 'register', 'updateProduct', 'deleteProduct',
         'addProduct','emptyCart', 'show', 'cancelCart', 'checkout', 'logout', 'products',
         'orders', 'addOrder', 'about', 'dashboard' , 'contact', 'ingredients', 'refundPolicy',
         'wishlist','profile', 'allCookies', 'categories', 'clients', 'addCategory', 'deleteCategory', 'showUserOrder'
        ];

if(isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {  // if the page is in the array
        $page = $_GET['page'];
        if($page === "dashboard" || $page === "deleteProduct" || $page === "updateProduct" || $page === "addProduct" || $page === "products" || $page === "categories" || $page === "clients" || $page === "addCategory" || $page === "deleteCategory") {
            
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_SESSION['logged'] === true && $_SESSION["admin"] == 1)  {
                $admin->index($page);
            }else{
                include ('views/includes/404.php');
            }
        }else{
            $home->index($page);
        }
    }else{
        include ('views/includes/404.php');
    }
}else{
    $home->index('home');
}




$path = explode("/", $_SERVER["REQUEST_URI"])[2];   // get the path from the url 
        if($path != "login" && $path != "register" && $path != "dashboard" && $path != "products" && $path != "categories" && $path != "clients" && $path != "addProduct" && $path != "deleteProduct" && $path != "updateProduct" && $path != "addCategory" && $path != "404" && $path != "deleteCategory") {   
require_once ('./views/includes/footer.php');}