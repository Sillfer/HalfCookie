<?php
    if (isset($_POST["update"])) {
        $data = new UsersController();
        $data = $data->updateUser();
        // var_dump($_POST);
        // die();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>
    
<body>
    <div class="w-full">
        <div class="bg-gradient-to-b from-amber-900 to-amber-600 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
                <p class="text-3xl font-bold leading-7 text-center">UPDATE</p>
                <form  method="post" id="form">
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-full flex flex-col">
                            <label class="font-semibold leading-none">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>
                    </div>
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-full flex flex-col">
                            <label class="font-semibold leading-none">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>
                    </div>
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-full flex flex-col">
                            <label class="font-semibold leading-none">Email Adress</label>
                            <input type="email" name="email" id="email" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>
                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="font-semibold leading-none">Adress</label>
                            <textarea type="text" name="adress" id="adress" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button type="submit" name="update" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-amber-800 rounded hover:bg-amber-900 focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 focus:outline-none">
                            UPDATE
                        </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

