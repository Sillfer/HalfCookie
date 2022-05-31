<?php

if(isset($_COOKIE["success"])){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>".$_COOKIE["success"]."
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

if(isset($_COOKIE["error"])){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>".$_COOKIE["error"]."
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

if(isset($_COOKIE["info"])){
    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>".$_COOKIE["info"]."
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}
?>