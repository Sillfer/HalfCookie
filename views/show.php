<?php
$data = new ProductsController();
$product = $data->getProduct();

$id = $_POST['product_id'];

if (isset($_POST["submit"])) {
    $data = new UsersController();
    $product = $data->addToWhishlist();
}

?>
<title><?php echo $product->product_name; ?></title>
<div class="container px-4 py-5 text-center">
    <h2 class="pb-2 border-bottom text-center" style="color: #947057;">Cookies</h2>
    <div class="fs-5 text-start" style="color: #947057;">
        <p>Artisan small batch cookies prepared from scratch each day. Our original recipes are mixed from all natural ingredients
            for a true homemade taste. A treat sure to make you smile!</p>
    </div>
</div>
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <!-- Image -->
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="<?= "./public/uploads/" . $product->product_image ?>" alt="Product Img">
                </div>
            </div>
            <!-- Col -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body mt-5">
                        <h1 class="h2" style="color: #947057;"><?php echo $product->product_name; ?></h1>
                        <p class="h3 py-2 fs-3"><?php echo $product->product_price; ?> DH</p>
                        <h6 class="fs-3" style="color: #947057;">Description</h6>
                        <p class="fs-5"><?php echo $product->product_description; ?></p>

                        <div class="col-md-4">
                            <h3 class="m-3 text-start" style="color: #947057;">Quantity</h3>
                            <div class="d-flex">
                                <form method="post" action="<?php echo BASE_URL; ?>checkout">
                                    <div class="form-group">
                                        <input type="number" name="product_qte" id="product_qte" class="form-control mb-3" value="1" min="1">
                                        <input type="hidden" name="product_title" value="<?= $product->product_name; ?>">
                                        <input type="hidden" name="product_id" value="<?= $product->product_id; ?>">
                                    </div>
                                   
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-primary btn-block">
                                                Add to Cart
                                            </button>
                                        </div>
                                </form>
                                <?php if (isset($_SESSION["logged"])) : ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
                                            <div class="d-grid gap-2 d-md-block">
                                            <button type="submit" name="submit" class="btn btn-outline-danger btn-block ms-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                            </div>
                        <?php elseif (!isset($_SESSION["logged"])) : ?>
                            <div class="d-grid gap-2 d-md-block">
                            <a href="<?php echo BASE_URL; ?>login" class="btn btn-outline-danger btn-block ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                </svg>
                            </a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>