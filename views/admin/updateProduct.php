<?php
$categories = new CategoriesController();
$categories = $categories->getAllCategories();
$productToUpdate = new ProductsController();
$productToUpdate = $productToUpdate->getProduct();
if (isset($_POST["submit"])) {
    $product = new ProductsController();
    $product->editProduct();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Products</title>
</head>

<body>
    <!-- tailwind.config.js -->
    <!-- component -->
    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-[#947057] overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-columns-gap" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                        </svg>

                        <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                    </div>
                </div>

                <nav class="mt-10">
                    <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="<?php echo BASE_URL; ?>dashboard">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>

                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-200 hover:text-amber-100" href="<?php echo BASE_URL; ?>products">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>

                        <span class="mx-3">Products</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="<?php echo BASE_URL; ?>categories">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>

                        <span class="mx-3">Categories</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="<?php echo BASE_URL; ?>clients">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                        <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg> -->

                        <span class="mx-3">Clients</span>
                    </a>
                </nav>
            </div>
            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-amber-800">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center">

                        <h5 class="text-base font-semibold text-gray-700 mr-2"><?php echo $_SESSION["username"] ?></h5>
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80" alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10" style="display: none;">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"><?php echo $_SESSION["username"] ?></a>
                                <a href="<?php echo BASE_URL; ?>logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <?php
                    include('views/includes/alerts.php');
                    ?>
                    <div class="container mx-auto px-6 py-8">
                        <h3 class="text-gray-700 text-3xl font-medium">Update Product</h3>

                        <style>
                            .-z-1 {
                                z-index: -1;
                            }

                            .origin-0 {
                                transform-origin: 0%;
                            }

                            input:focus~label,
                            input:not(:placeholder-shown)~label,
                            textarea:focus~label,
                            textarea:not(:placeholder-shown)~label,
                            select:focus~label,
                            select:not([value='']):valid~label {
                                --tw-translate-x: 0;
                                --tw-translate-y: 0;
                                --tw-rotate: 0;
                                --tw-skew-x: 0;
                                --tw-skew-y: 0;
                                transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                                --tw-scale-x: 0.75;
                                --tw-scale-y: 0.75;
                                --tw-translate-y: -1.5rem;
                            }

                            input:focus~label,
                            select:focus~label {
                                --tw-text-opacity: 1;
                                color: rgba(0, 0, 0, var(--tw-text-opacity));
                                left: 0px;
                            }
                        </style>

                        <div class="min-h-screen p-0 sm:p-12">
                            <div class="mx-auto max-w-md px-6 py-12 bg-[#F4FAFF] border-0 shadow-lg sm:rounded-3xl">

                                <form method="post">
                                    <div class="relative z-0 w-full mb-5">
                                        <input type="text" name="product_name" value="<?php echo $productToUpdate->product_name; ?>" required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent  border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                                        <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter Product name</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
                                    </div>
                                    <div class="relative z-0 w-full mb-5">
                                        <select name="product_category_id" value="" onclick="this.setAttribute('value', this.value);" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent  border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                                            <option value="" selected disabled hidden></option>
                                            <?php foreach ($categories as $category) : ?>
                                                <option <?php echo $productToUpdate->product_category_id === $category['id_category'] ? "selected" : ""; ?> value="<?php echo $category["id_category"]; ?>">
                                                    <?php echo $category["name_category"]; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select a category</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                                    </div>
                                    <div class="relative z-0 w-full mb-5">
                                        <input type="number" name="product_price" value="<?php echo $productToUpdate->product_price; ?>" class="pt-3 pb-2 pl-1 block w-full px-0 mt-0 bg-transparent  border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" min="10" />
                                        <div class="absolute top-0 left-10 mt-3 ml-1 text-gray-400">MAD</div>
                                        <label for="money" class="absolute duration-300 top-0 left-1 -z-1 origin-0 text-gray-500">Price</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Price is required</span>
                                    </div>
                                    <div class="relative z-0 w-full mb-5">
                                        <input type="number" name="product_quantity" value="<?php echo $productToUpdate->product_quantity; ?>" class="pt-3 pb-2 pl-1 block w-full px-0 mt-0 bg-transparent  border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" min="10" />
                                        <label for="money" class="absolute duration-300 top-0 left-1 -z-1 origin-0 text-gray-500">Select Quantity</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Quantity is required</span>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?php echo $productToUpdate->product_id; ?>">

                                    <div class="relative z-0 w-full mb-5">
                                        <textarea name="product_description" placeholder=" " class="pt-3 pb-2 pl-1 block w-full px-0 mt-0 bg-transparent  border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"><?php echo $productToUpdate->product_description; ?></textarea>
                                        <label for="money" class="absolute duration-300 top-0 left-1 -z-1 origin-0 text-gray-500">Description</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Description is required</span>
                                    </div>
                                    <div class="relative z-0 w-full mb-5">
                                        <textarea name="short_description" placeholder=" " class="pt-3 pb-2 pl-1 block w-full px-0 mt-0 bg-transparent  border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"><?php echo $productToUpdate->short_description; ?></textarea>
                                        <label for="money" class="absolute duration-300 top-0 left-1 -z-1 origin-0 text-gray-500">Short Description</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Description is required</span>
                                    </div>
                                    <div class="relative z-0 w-full mb-5">
                                        <div>
                                            <img src="./public/uploads/<?php echo $productToUpdate->product_image; ?>" alt="" srcset="">
                                        </div>
                                        <input type="file" name="image" placeholder=" " class="pt-3 pb-2 pl-1 block w-full px-0 mt-0 bg-transparent  border-b-2 focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                                        <label for="image" class="absolute duration-300 top-0 left-1 -z-1 origin-0 text-gray-500">Image</label>
                                        <span class="text-sm text-red-600 hidden" id="image">Image is required</span>
                                    </div>
                                    <!-- <a href="" name="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-[#947057] hover:bg-[#603a20] hover:shadow-lg focus:outline-none">ADD PRODUCT</a> -->
                                    <div class="form-group">
                                        <button name="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-[#947057] hover:bg-[#603a20] hover:shadow-lg focus:outline-none">
                                            ADD PRODUCT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="public\js\main.js"></script>

</body>


</html>