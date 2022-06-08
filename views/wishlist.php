<title>Wishlist</title>
<?php
if (!isset($_SESSION["logged"])) {
    Redirect::to("login");
}

$user = new UsersController();
$result = $user->getAllWishlist();


?>
<!-- <link rel="stylesheet" href="public\css\table.css"> -->

<div class="container px-4 py-5 text-center">
    <?php
    // print_r($_SESSION);
    ?>
    <h2 class="pb-2 border-bottom text-center" style="color: #947057;">Cookies</h2>
    <div class="fs-5 text-start" style="color: #947057;">
        <p>Artisan small batch cookies prepared from scratch each day. Our original recipes are mixed from all natural ingredients
            for a true homemade taste. A treat sure to make you smile!</p>
    </div>
</div>
<div class="container">
<table class="table p-4">
    <thead class="bg-light">
        <tr>
            <th></th>
            <th>Product name</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $result) : ?>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="<?= "./public/uploads/" . $result['product_image'] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $result["product_name"]; ?></p>
                </td>
                <td>
                    <span class="fw-normal mb-1"><?php echo $result["name_category"]; ?></span>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
