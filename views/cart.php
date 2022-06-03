<?php
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-3">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION as $name => $product) :
                    ?>
                        <?php
                        if (substr($name, 0, 9) == "products_") :
                        ?>
                            <tr>
                                <td><?php echo $product["title"] ?></td>
                                <td>$<?php echo $product["price"] ?></td>
                                <td><?php echo $product["qte"] ?></td>
                                <td>$<?php echo $product["total"] ?></td>
                                <td>
                                    <form method="post" action="<?php echo BASE_URL; ?>cancelCart">
                                        <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $product["price"]; ?>">
                                        <input type="hidden" name="product_qte" value="<?php echo $product["qte"]; ?>">
                                        <button type="submit" class="btn btn-sm btn-danger text-white font-weight-bold p-1">
                                            &times;
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        endif;
                        ?>
                    <?php
                    endforeach;
                    ?>

                </tbody>
            </table>
        </div>
        <div class="col-4 col-md-4 float-right bg-white">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Products</th>
                        <td>
                            <?php echo isset($_SESSION['count']) ? $_SESSION['count'] : 0 ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Total TTC</th>
                        <td>
                            <strong data-amount="<?php echo isset($_SESSION["totaux"]) ?>">
                                <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0; ?><span class="fst-italic">$</span>
                            </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php if (isset($_SESSION["count"]) && $_SESSION["count"] > 0 && isset($_SESSION["logged"])) : ?>
            <form method="post" id="addOrder" action="<?php echo BASE_URL; ?>addOrder">
                <button type="submit" form="addOrder" class="btn btn-success">
                    Add Order
                </button>
            </form>
            <form method="post" action="<?php echo BASE_URL; ?>emptyCart">
                <button type="submit" class="btn btn-primary">
                    Empty Cart
                </button>
            </form>
        <?php elseif (isset($_SESSION["count"]) && $_SESSION["count"] > 0) : ?>
            <form method="post" action="<?php echo BASE_URL; ?>emptyCart">
                <button type="submit" class="btn btn-primary">
                    Empty Cart
                </button>
            </form>
            <a href="<?php echo BASE_URL; ?>login" class="btn btn-outline-primary mt-4 px-5 py-3">Login to your account to make a purchase</a>
        <?php endif; ?>
    </div>
</div>