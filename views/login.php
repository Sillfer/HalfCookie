<link rel="stylesheet" href="public\css\style.css">
<section>
        <div class="imgBx">
            <img src="views\assets\images\login\login.png" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <a href="<?php echo BASE_URL; ?>" class="d-flex justify-content-center">
                    <img src="views\assets\images\Logo2.svg" alt="" srcset="">
                </a>
                <form>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password">
                    </div>
                    <div class="remember">
                        <label for="id"><input type="checkbox" name="" id="id">Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign In">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account?<a href="<?php echo BASE_URL; ?>register">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>