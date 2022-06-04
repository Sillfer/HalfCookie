<title>Cart</title>
<?php
?>
<style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .bg-grey {
        background-color: #eae8e8;
    }

    @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }

    @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }
</style>
<section class="h-100 h-custom" style="background-color: #F4FAFF;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted"><?php echo isset($_SESSION['count']) ? $_SESSION['count'] : 0 ?> items</h6>
                                    </div>
                                    <hr class="my-4">

                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <?php
                                        foreach ($_SESSION as $name => $product) :
                                        ?>
                                            <?php
                                            if (substr($name, 0, 9) == "products_") :
                                            ?>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <!-- <h6 class="text-muted"></h6> -->
                                                    <h6 class="text-black mb-0"><?php echo $product["title"] ?></h6>
                                                </div>
                                                <!-- <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

                                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div> -->

                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"><?php echo $product["price"] ?> DH</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <h6 class="mb-0"><?php echo $product["qte"] ?></h6>
                                                </div>

                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"><?php echo $product["total"] ?> DH</h6>
                                                </div>
                                                <form method="post" class="col-md-1 col-lg-1 col-xl-1 text-end" action="<?php echo BASE_URL; ?>cancelCart">
                                                    <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">
                                                    <input type="hidden" name="product_price" value="<?php echo $product["price"]; ?>">
                                                    <input type="hidden" name="product_qte" value="<?php echo $product["qte"]; ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" class="text-muted"><i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                                <hr class="my-4">
                                            <?php
                                            endif;
                                            ?>

                                        <?php
                                        endforeach;
                                        ?>
                                    </div>
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="<?php echo BASE_URL; ?>allCookies" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">items <?php echo isset($_SESSION['count']) ? $_SESSION['count'] : 0 ?></h5>
                                        <strong data-amount="<?php echo isset($_SESSION["totaux"]) ?>">
                                            <h5> <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0; ?> DH</h5>
                                        </strong>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Shipping</h5>

                                    <div class="mb-4 pb-2">
                                        <select class="select">
                                            <option value="1">Home Delivary - 30 DH</option>

                                        </select>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5><?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0; ?> DH</h5>
                                    </div>
                                    <?php if (isset($_SESSION["count"]) && $_SESSION["count"] > 0 && isset($_SESSION["logged"])) : ?>
                                        <form method="post" id="addOrder" action="<?php echo BASE_URL; ?>addOrder">
                                        <div class="d-grid gap-2">
                                            <button type="submit" form="addOrder" class="bbtn btn-dark btn-block btn-lg mb-3">
                                                Add Order
                                            </button>
                                        </div>
                                        </form>
                                        <form method="post" action="<?php echo BASE_URL; ?>emptyCart">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-danger btn-block btn-lg">
                                                Empty Cart
                                            </button>
                                        </div>
                                        </form>
                                    <?php elseif (isset($_SESSION["count"]) && $_SESSION["count"] > 0) : ?>
                                        <form method="post" action="<?php echo BASE_URL; ?>emptyCart">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-danger btn-block btn-lg mb-3">
                                                Empty Cart
                                            </button>
                                        </div>
                                        </form>
                                        <div class="d-grid gap-2">
                                            <a href="<?php echo BASE_URL; ?>login" class="btn btn-outline-primary btn-lg">Login to make a purchase</a>
                                        </div>
                                    <?php endif; ?>

                                    <!-- <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Register</button> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>