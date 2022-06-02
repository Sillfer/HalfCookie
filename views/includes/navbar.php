<nav class="navbar navbar-expand-md navbar-light px-3 shadow-sm" style="background-color: #F4FAFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="views\assets\images\Logo2.svg" width="50" height="50" class="" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse fw-bold fst-normal fs-6" id="navbarsExample04">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo BASE_URL; ?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo BASE_URL; ?>allCookies">SHOP COOKIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>cart">CHECKOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ABOUT
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdown04" style="background-color: #F4FAFF;">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>about">About us</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>contact">Contact us</a></li>
          </ul>
        </li>
      </ul>
      <ul class="d-flex flex-row navbar-nav ml-auto" style="list-style-type: none;">
        <li class="nav-item dropdown">
        <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" href="#"><i class="fas fa-user"><?php echo $_SESSION["username"] ?></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown04" style="background-color: #F4FAFF;">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>logout">Logout</a></li>
          </ul>
        </li>
        <?php else:?> 
            <a class="nav-link me-4" href="<?php echo BASE_URL; ?>login"><i class="fas fa-user"><?php echo "Login" ?></i></a>
          <?php endif;?>
        <li class="nav-item">
          <a class="nav-link me-4" href="<?php echo BASE_URL; ?>wishlist"><i class="fa-solid fa-heart"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>cart"><i class="fa-solid fa-cart-shopping"></i>
            <?php if (isset($_SESSION["count"]) && $_SESSION["count"] > 0) : ?>
              (<?php echo $_SESSION["count"]; ?>)
            <?php else : ?>
              (0)
            <?php endif; ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>