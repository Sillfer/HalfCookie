<?php

$categories = new CategoriesController();
$categories = $categories->getAllCategories();
if (isset($_POST['cat_id'])) {
  $products = new ProductsController();
  $products = $products->getProductByCategory($_POST['cat_id']);
} else {
  $data = new ProductsController();
  $products = $data->getAllProducts();
}
?>
<div class="container px-4 py-5 text-center">
  <h2 class="pb-2 border-bottom text-center" style="color: #947057;">Cookies</h2>
  <div class="fs-5 text-start" style="color: #947057;">
    <p>Artisan small batch cookies prepared from scratch each day. Our original recipes are mixed from all natural ingredients
      for a true homemade taste. A treat sure to make you smile!</p>
  </div>
</div>
<div class="d-flex justify-content-center flex-wrap">
  <a href="<?php echo BASE_URL; ?>allCookies" role="button" class="btn rounded-3 btn-outline-primary me-3 mb-4">All</a>
  <?php
  foreach ($categories as $category) :
  ?>
    <form id="catPro" method="post" action="<?php echo BASE_URL; ?>allCookies">
      <input type="hidden" name="cat_id" id="cat_id">
    </form>
    <a onclick="getCatProducts(<?php echo $category['id_category']; ?>)" class="btn rounded-3 btn-outline-primary me-3 mb-4">
      <?php echo $category['name_category'] ?>
      (<?php
        $productByCat = new ProductsController();
        $productByCat = $productByCat->getProductByCategory($category['id_category']);
        echo count($productByCat);
        ?>)
    </a>
  <?php
  endforeach;
  ?>
</div>
<div class="container">
  <div class="row">
    <?php
    if (count($products) > 0) :
      // print_r($_SESSION);
    ?>
      <?php
      foreach ($products as $product) :
      ?>
        <div class="col-lg-3 col-md-4 col-6">
          <form id="form" method="post" action="<?php echo BASE_URL; ?>show">
            <input type="hidden" name="product_id" id="product_id">
          </form>
            <img onclick="submitForm(<?php echo $product['product_id']; ?>)" class="d-block img-fluid rounded-3 shadow" src="
              <?php echo $product['product_image']; ?>
              " alt="" role="button">
          <p style="color: #947057;" class=" text-start fs-6"><?php echo $product['product_name']; ?></p>
          <p style="color: #947057;" class=" text-start fs-6 fw-bolder">from $<?php echo $product['product_price']; ?></p>
        </div>

      <?php
      endforeach;
      ?>
    <?php
    else :
    ?>
      <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-diamond-fill me-3" viewBox="0 0 17 17">
          <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <h5>
          No Product at this time. Please check back later.
        </h5>
      </div>
    <?php
    endif;
    ?>
  </div>

</div>