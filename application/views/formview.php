<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-800 to-gray-900 flex items-center justify-center min-h-screen py-20">
    <div class="bg-gray-900 shadow-lg rounded-lg p-8 w-full max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-orange-400 mb-6">Profile Information</h2>
        <form action="<?= base_url('portfolio/saveProfile') ?>" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-800 p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-orange-400">Personal Information</h3>
                
                <div>
                    <label for="name" class="block text-sm font-medium text-orange-300">Name:</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your name">
                </div>

                <div>
                    <label for="birth" class="block text-sm font-medium text-orange-300">Place and Date of Birth:</label>
                    <input type="text" id="birth" name="birth" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter place and date of birth">
                </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-orange-300">Gender:</label>
                    <input type="text" id="gender" name="gender" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your gender">
                </div>

                <div>
                    <label for="religion" class="block text-sm font-medium text-orange-300">Religion:</label>
                    <input type="text" id="religion" name="religion" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your religion">
                </div>

                <div>
                    <label for="blood_type" class="block text-sm font-medium text-orange-300">Blood Type:</label>
                    <input type="text" id="blood_type" name="blood_type" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your blood type">
                </div>

                <div>
                    <label for="height" class="block text-sm font-medium text-orange-300">Height:</label>
                    <input type="text" id="height" name="height" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your height">
                </div>

                <div>
                    <label for="weight" class="block text-sm font-medium text-orange-300">Weight:</label>
                    <input type="text" id="weight" name="weight" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your weight">
                </div>

                <div>
                    <label for="marital_status" class="block text-sm font-medium text-orange-300">Marital Status:</label>
                    <input type="text" id="marital_status" name="marital_status" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your marital status">
                </div>

                <div>
                    <label for="nationality" class="block text-sm font-medium text-orange-300">Nationality:</label>
                    <input type="text" id="nationality" name="nationality" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your nationality">
                </div>

                <div>
                    <label for="hobby" class="block text-sm font-medium text-orange-300">Hobby:</label>
                    <textarea id="hobby" name="hobby" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your hobbies"></textarea>
                </div>
            </div>

            <div class="bg-gray-800 p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-orange-400">Academic Information</h3>

                <div>
                    <label for="npm" class="block text-sm font-medium text-orange-300">NPM:</label>
                    <input type="text" id="npm" name="npm" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your NPM">
                </div>

                <div>
                    <label for="major" class="block text-sm font-medium text-orange-300">Major:</label>
                    <input type="text" id="major" name="major" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your major">
                </div>

                <div>
                    <label for="faculty" class="block text-sm font-medium text-orange-300">Faculty:</label>
                    <input type="text" id="faculty" name="faculty" required class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 placeholder-orange-500 rounded-md focus:ring focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your faculty">
                </div>
            </div>

            <div class="col-span-1 md:col-span-2">
                <button type="submit" class="w-full bg-orange-500 text-white font-semibold py-2 rounded-md hover:bg-orange-600 transition">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
