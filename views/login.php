<title>Log In</title>
<?php
if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
    Redirect::to("home");
}
if (isset($_POST["submit"])) {
    $login = new UsersController();
    $login->auth();
}
?>
<link rel="stylesheet" href="public\css\style.css">
<section>

    <div class="imgBx">
        <img src="views\assets\images\login\login.png" alt="">
    </div>

    <div class="contentBx">
        <div class="formBx">
            <?php
            include('views/includes/alerts.php');
            ?>
            <a href="<?php echo BASE_URL; ?>" class="d-flex justify-content-center">
                <img src="views\assets\images\Logo2.svg" alt="" srcset="">
            </a>
            <form method="post">
                <div class="inputBx">
                    <span>Username</span>
                    <input type="text" name="username">
                </div>
                <div class="inputBx mb-5">
                    <span>Password</span>
                    <input type="password" name="password">
                </div>
                <div class="d-grid gap-2">
                    <button name="submit" class="btn btn-outline-primary rounded-3" value="Login">Login</button>
                </div>
                <div class="inputBx">
                    <p>Don't have an account?<a href="<?php echo BASE_URL; ?>register">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</section>