<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Page Not Found</title>
</head>

<body>
    <!-- component -->
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>
    <div class="min-w-screen min-h-screen bg-[#F4FAFF] flex items-center p-5 lg:p-20 overflow-hidden relative">
        <div class="flex-1 min-h-full min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
            <div class="w-full md:w-1/2">
                
                <div class="mb-10 md:mb-20 text-gray-600 font-light">
                    <h1 class="font-black uppercase text-3xl lg:text-5xl text-[#947057] mb-10">You seem to be lost!</h1>
                    <p>The page you're looking for isn't available.</p>
                    <p>Try searching again or use the Go Back button below.</p>
                </div>
                <div class="mb-20 md:mb-0">
                    <button class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-[#947057] hover:text-yellow-600"><i class="mdi mdi-arrow-left mr-2"></i>
                    <a href="<?php echo BASE_URL; ?>">
                    Go Back
                    </a>
                    </button>
                </div>
            </div>
            <div class="w-full md:w-1/2 text-center">
                <img src="views\assets\images\6333070.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="w-64 md:w-96 h-96 md:h-full bg-blue-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform"></div>
        <div class="w-96 h-full bg-yellow-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform"></div>
    </div>

    <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>