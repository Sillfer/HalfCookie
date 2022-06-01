<link rel="stylesheet" href="public\css\style.css">
<section>
        <div class="imgBx">
            <img src="views\assets\images\login\Slogan.png" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <a href="<?php echo BASE_URL; ?>" class="d-flex justify-content-center">
                    <img src="views\assets\images\Logo2.svg" alt="" srcset="">
                </a>
                <form method="post">
                    <div class="inputBx">
                        <span>First name</span>
                        <input type="text" name="first_name" required>
                    </div>
                    <div class="inputBx">
                        <span>Last name</span>
                        <input type="text" name="last_name" required>
                    </div>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" required>
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" required>
                    </div>
                    <div class="inputBx">
                        <span>Adress</span>
                        <input type="text" name="adress" required>
                    </div>
                    <div class="remember">
                        <label for="id"><input type="checkbox" name="" id="id">Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign Up">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account?<a href="<?php echo BASE_URL; ?>login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>