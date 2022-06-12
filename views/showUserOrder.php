<title>Orders</title>
<?php
$orders = new OrdersController();
$order = $orders->getUserOrders();
// var_dump($order);
// die();
?>

<div class="container px-4 py-5 text-center">
    <h2 class="pb-2 border-bottom text-center" style="color: #947057;">Orders</h2>
    <div class="fs-5 text-start" style="color: #947057;">
        <p>Artisan small batch cookies prepared from scratch each day. Our original recipes are mixed from all natural ingredients
            for a true homemade taste. A treat sure to make you smile!</p>
    </div>
</div>
<div class="container py-5 h-100">
    <table class="table p-4">
        <thead class="bg-[#947057]">
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Order Total</th>
                <th>Date Order</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $order) : ?>
                <tr>
                    <td>
                        <span class="fw-normal mb-1"><?php echo $order->id_order; ?></span>
                    </td>
                    <td>
                        <span class="fw-normal mb-1"><?php echo $order->product; ?> </span>
                    </td>
                    <td>
                        <span class="fw-normal mb-1"><?php echo $order->total; ?> DH</span>
                    </td>
                    <td>
                        <span class="fw-normal mb-1"><?php echo $order->date_order; ?></span>
                    </td>
                    <?php if ($order->order_status == "Waiting for validation") : ?>
                    <td>
                        <span class="badge rounded-pill bg-warning text-dark"><?php echo $order->order_status; ?></span>
                    </td>
                    <?php elseif ($order->order_status == "Validated") : ?>
                    <td>
                        <span class="badge rounded-pill bg-success"><?php echo $order->order_status; ?></span>
                    </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>