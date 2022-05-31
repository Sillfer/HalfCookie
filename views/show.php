<?php
$data = new ProductsController();
$product = $data->getProduct();

?>
<div class="container px-4 py-5 text-center">
    <h2 class="pb-2 border-bottom text-center" style="color: #947057;">Cookies</h2>
    <div class="fs-5 text-start" style="color: #947057;">
        <p>Artisan small batch cookies prepared from scratch each day. Our original recipes are mixed from all natural ingredients
            for a true homemade taste. A treat sure to make you smile!</p>
    </div>
</div>
<div class="d-flex justify-content-center flex-wrap">
    <h3 class="text-secondary m-3 text-center"> Add to Cart</h3>
    <form method="post" action="<?php echo BASE_URL;?>checkout">
        <div class="class form-group">
            <input type="number" name="product_qte" id="product_qte" class="form-control" value="1" min="1">
            <input type="hidden" name="product_title" value="<?=  $product->product_name; ?>">
            <input type="hidden" name="product_id" value="<?=  $product->product_id; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">
                Add to Cart
            </button>
        </div>
    </form>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-4 col-6">
            <img class="d-block img-fluid rounded-3 shadow" src="
              <?php echo $product->product_image ?>
              " alt="" role="button ">
            <p style="color: #947057;" class=" text-start fs-6"><?php echo $product->product_name; ?></p>
            <p style="color: #947057;" class=" text-start fs-6 fw-bolder">from $<?php echo $product->product_price; ?></p>
        </div>
    </div>

</div>