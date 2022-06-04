<title>HALF COOKIE</title>
<?php
// if (isset($_SESSION["admin"]) == 1 && $_SESSION["admin"] == true) {
//     // echo '<a href="dashboard">Dashboard</a>';
//   Redirect::to('dashboard');
// }
$data = new ProductsController();
$products = $data->getAllProducts();
?>

<div>
  <img class="img-fluid" src="views\assets\images\Banner.png" alt="">
</div>
<!-- make a flex box with 4 images -->
<div class="container mt-5">
  <div class="row text-center">
    <div class="col-lg-6 col-md-8 mx-auto">
      <a href="<?php echo BASE_URL; ?>allCookies" class="">
        <img class="rounded-3 img-fluid shadow mb-5" src="views\assets\images\grand.jpg" alt="">
      </a>
      <p style="color: #947057;" class="h2 mb-3">Grande Cookies</p>
    </div>
    <div class="col-lg-6 col-md-8 mx-auto">
      <a href="<?php echo BASE_URL; ?>allCookies" class="">
        <img class="rounded-3 img-fluid shadow mb-5" src="views\assets\images\frosted.jpg" alt="">
      </a>
      <p style="color: #947057;" class="h2 mb-3">Frosted Cookies</p>
    </div>
    <div class="col-lg-6 col-md-8 mx-auto">
      <a href="<?php echo BASE_URL; ?>allCookies" class="">
        <img class="rounded-3 img-fluid shadow mb-5" src="views\assets\images\Oatmeal Banana Chocolate Chip.jpg" alt="">
      </a>
      <p style="color: #947057;" class="h2 mb-3">Vegan Cookies</p>
    </div>
    <div class="col-lg-6 col-md-8 mx-auto">
      <a href="<?php echo BASE_URL; ?>allCookies" class="">
        <img class="rounded-3 img-fluid shadow mb-5" src="views\assets\images\short.jpg" alt="">
      </a>
      <p style="color: #947057;" class="h2 mb-3">Sweet and Savory Shortbread</p>
    </div>
  </div>
</div>
<div class="container px-4 py-5 text-center">
  <h2 class="pb-2 border-bottom text-center" style="color: #947057;">Life Is Short. Eat Cookies</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
      <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
        <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg> -->
      </div>
      <!-- <h2>Featured title</h2> -->
      <p style="color: #294D4A;">The BEST gourmet cookies around! Quality ingredients and amazing taste!</p>
      <h5 style="color: #947057;">Spencer</h5>
    </div>
    <div class="feature col">
      <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
        <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg> -->
      </div>
      <!-- <h2>Featured title</h2> -->
      <p style="color: #294D4A;">I have enjoyed every morsel, every bite, of the cookies. HalfCookie has significantly raised the bar on what a cookie should look and taste like. </p>
      <h5 style="color: #947057;">Anna</h5>
    </div>
    <div class="feature col">
      <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
        <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg> -->
      </div>
      <!-- <h2>Featured title</h2> -->
      <p style="color: #294D4A;">I ordered online from HalfCookie. It’s truly one of the best decisions I’ve ever made.</p>
      <h5 style="color: #947057;">Spencer</h5>
    </div>
  </div>
</div>
<div class="container">


  <div class="row text-center text-lg-start">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Frosted\2020_06_03T13_18_43_mrs_ImageRecipes_29546lrg.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Grand Cookie\Mint Chocolate Chip_300.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Grand Cookie\Salted Caramel_1160.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Nuts\HikerCookie.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Grand Cookie\Peanut Butter and More.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Healthy\Chocolate-Crinkle-Cookies-sq-feature-1200-sp.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Grand Cookie\Peanut_Butter.jpg" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid rounded-3 shadow" src="views\assets\images\Short_Bread\short.jpg" alt="">
      </a>
    </div>
  </div>

</div>



































<!-- <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <?php
                if (count($products) > 0) :
                  foreach ($products as $product) :
                ?>
                    <div class="col-md-6 mb-2">
                <div class="card h-100 bg-white rounded p-2">
                    <div class="card-header bg-light ">
                        <h3 class="card-title">
                        <?php
                        echo $product['product_name'];
                        ?>
                            </h3>
                    </div>
                    <div class="card-img-top">
                        <img src="<?php
                                  echo $product['product_image'];
                                  ?>" alt="" class="img-fluid">
                    </div>
                    <p>
                    <?php
                    echo $product['short_description'];
                    ?>
                    </p>
                    </div>
                    </div>
                
                <?php
                  endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</div> -->