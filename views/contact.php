<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Us</title>
</head>

<body>
    <div class="w-full">
        <div class="bg-gradient-to-b from-amber-900 to-amber-600 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
                <p class="text-3xl font-bold leading-7 text-center">Contact me</p>
                <form action="https://api.web3forms.com/submit" method="post" id="form">
                    <input type="hidden" name="apikey" value="13f12666-074f-4f88-b1e0-f65747d6e808">
                        <input type="hidden" name="subject" value="New Message from HalfCookie Client">
                        <input type="checkbox" name="botcheck" id="" style="display: none;">
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-full flex flex-col">
                            <label class="font-semibold leading-none">First Name</label>
                            <input type="text" name="name" id="name" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>
                    </div>
                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-full flex flex-col">
                            <label class="font-semibold leading-none">Last Name</label>
                            <input type="text" name="name" id="name" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
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
                            <label class="font-semibold leading-none">Message</label>
                            <textarea type="text" name="message" id="message" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button type="submit" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-amber-800 rounded hover:bg-amber-900 focus:ring-2 focus:ring-offset-2 focus:ring-amber-700 focus:outline-none">
                            Send message
                        </button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Contact Us</h1>
                    <p class="text-gray-400 dark:text-gray-400">Fill up the form below to send us a message.</p>
                </div>
                <div class="m-7">
                    <form action="https://api.web3forms.com/submit" method="POST" id="form">

                        <input type="hidden" name="apikey" value="13f12666-074f-4f88-b1e0-f65747d6e808">
                        <input type="hidden" name="subject" value="New Message from HalfCookie Client">
                        <input type="checkbox" name="botcheck" id="" style="display: none;">


                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">First Name</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Last Name</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your Message</label>

                            <textarea rows="5" name="message" id="message" placeholder="Your Message" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required></textarea>
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Send Message</button>
                        </div>
                        <p class="text-base text-center text-gray-400" id="result">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        const form = document.getElementById('form');
        const result = document.getElementById('result');

        form.addEventListener('submit', function(e) {
            const formData = new FormData(form);
            e.preventDefault();
            var object = {};
            formData.forEach((value, key) => {
                object[key] = value
            });
            var json = JSON.stringify(object);
            result.innerHTML = "Please wait..."

            fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: json
                })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-green-500');
                    } else {
                        console.log(response);
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-red-500');
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.innerHTML = "Something went wrong!";
                })
                .then(function() {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 5000);
                });
        })
    </script>
</body>

</html>