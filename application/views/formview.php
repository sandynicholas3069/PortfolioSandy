<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>

    <!-- Memanggil Tailwind CSS -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gradient-to-r from-gray-800 to-gray-900 flex items-center justify-center min-h-screen py-20">
        <div class="bg-gray-900 shadow-lg p-8 rounded-lg w-full max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-orange-400 mb-6">Profile Information</h2>
            <form action="<? base_url('portfolio/saveProfile')?>" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-800 p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold text-orange-400 mb-4">Personal Information</h3>

                    <div>
                        <label for="name" class=" block text-sm font-medium text-orange-300">Name:</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Name">
                    </div>

                    <div>
                        <label for="birth" class=" block text-sm font-medium text-orange-300">Place and Date of Birth</label>
                        <input type="text" id="birth" name="birth" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Place and Date of Birth">
                    </div>

                    <div>
                        <label for="gender" class=" block text-sm font-medium text-orange-300">Gender:</label>
                        <input type="text" id="gender" name="gender" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Gender">
                    </div>

                    <div>
                        <label for="religion" class=" block text-sm font-medium text-orange-300">Religion:</label>
                        <input type="text" id="religion" name="religion" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Religion">
                    </div>

                    <div>
                        <label for="blood_type" class=" block text-sm font-medium text-orange-300">Blood Type:</label>
                        <input type="text" id="blood_type" name="blood_type" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Blood Type">
                    </div>

                    <div>
                        <label for="height" class=" block text-sm font-medium text-orange-300">Height:</label>
                        <input type="text" id="height" name="height" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Height">
                    </div>

                    <div>
                        <label for="weight" class=" block text-sm font-medium text-orange-300">Weight:</label>
                        <input type="text" id="weight" name="weight" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Weight">
                    </div>

                    <div>
                        <label for="martial_status" class=" block text-sm font-medium text-orange-300">Martial Status</label>
                        <input type="text" id="martial_status" name="martial_status" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Input Your Martial Status">
                    </div>

                    <div>
                        <label for="nationality" class=" block text-sm font-medium text-orange-300">Nationality:</label>
                        <input type="text" id="nationality" name="nationality" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Nasionality">
                    </div>

                    <div>
                        <label for="hobby" class=" block text-sm font-medium text-orange-300">Hobby:</label>
                        <textarea id="hobby" name="hobby" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Hobbies"></textarea>
                    </div>
                </div>

                <div class="bg-gray-800 p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold text-orange-400 mb-4">Academic Information</h3>

                    <div>
                        <label for="npm" class=" block text-sm font-medium text-orange-300">NPM:</label>
                        <input type="text" id="npm" name="npm" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your NPM">
                    </div>

                    <div>
                        <label for="major" class=" block text-sm font-medium text-orange-300">Major:</label>
                        <input type="text" id="major" name="major" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Major">
                    </div>

                    <div>
                        <label for="faculty" class=" block text-sm font-medium text-orange-300">Faculty:</label>
                        <input type="text" id="faculty" name="faculty" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter Your Faculty">
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <button type="submit" class="w-full bg-orange-500 text-white font-semibold py-2 rounded-md hover:bg-orange-600 transition">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>