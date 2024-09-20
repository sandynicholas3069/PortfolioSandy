<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio-Sandy Nicholas</title>

        <!-- Memanggil Tailwind CSS -->
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

        <style>
            .primary-color {
                color: #FFA500;
            }
            .primary-bg {
                background-color: #FFA500;
            }
            .bg-dark {
                background-color: #1f1f1f;
            }
            /*custom animation*/
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .fadeInUp {
                animation: fadeInUp 1s ease-out;
            }
        </style>
    </head>
    <body class="bg-dark text-white">

    <!-- Navbar -->
    <nav class="bg-dark p-4 fixed w-full z-10 top-0 shadow-lg">
        <div class="container mx-auto flex justify-between items-center max-w-screen-lg">
            <h1 class="text-xl font-bold text-white tracking-wide">Sandy Nicholas</h1>
            <ul class="flex space-x-6">
                <li><a href="#home" class="hover:text-[#FFA500] transition duration-300 ease-in-out">Home</a></li>
                <li><a href="#transcript" class="hover:text-[#FFA500] transition duration-300 ease-in-out">Transcript</a></li>
                <li><a href="#cv" class="hover:text-[#FFA500] transition duration-300 ease-in-out">Curriculum Vitae</a></li>
                <li><a href="#portfolio" class="hover:text-[#FFA500] transition duration-300 ease-in-out">Portfolio</a></li>
                <li><a href="#contact" class="hover:text-[#FFA500] transition duration-300 ease-in-out">Contact Me</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-r from-orange-300 to-orange-900 text-center fade-in-up">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center space-x-8 max-w-screen-lg">
            <!-- Image Section -->
            <div class="mb-6 md:mb-0">
                <img src="<?= base_url('assets/img/profile.png'); ?>" alt="Sandy Nicholas" class="rounded-full w-64 h-64 object-cover shadow-lg">
            </div>

            <!-- Text Content -->
            <div>
                <h2 class="text-5xl font-extrabold text-white mb-4">Hi, My Name is <span class="text-primary"><?= $personal_info['name']; ?></span></h2>
                <p class="text-2xl text-gray-300 mb-6"><?= $personal_info['occupation']; ?></p>
                <p class="text-lg text-justify text-gray-100 max-w-3xl mx-auto"><?= $personal_info['description']; ?></p>
            </div>
        </div>
    </section>

    <!-- Transcript Section -->
    <section id="transcript" class="py-16 bg-gradient-to-r from-teal-500 to-blue-500 fade-in-up">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold text-center text-white mb-8">Transcript</h2>
            <div class="overflow-x-auto">
                <table class="w-full table-auto bg-gray-900 rounded-lg shadow-lg text-white">
                    <thead class="bg-primary-color text-white-uppercase">
                        <tr>
                            <th class="px-6 py-3 text-center border-b border-gray-700">Course Name</th>
                            <th class="px-6 py-3 text-center border-b border-gray-700">Code</th>
                            <th class="px-6 py-3 text-center border-b border-gray-700">Credit</th>
                            <th class="px-6 py-3 text-center border-b border-gray-700">Predicate</th>
                            <th class="px-6 py-3 text-center border-b border-gray-700">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transcript as $course): ?>
                        <tr class="hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">
                            <td class="border-t border-gray-700 px-6 py-4 text-center"><?= $course['course']; ?></td>
                            <td class="border-t border-gray-700 px-6 py-4 text-center"><?= $course['kode']; ?></td>
                            <td class="border-t border-gray-700 px-6 py-4 text-center"><?= $course['credit']; ?></td>
                            <td class="border-t border-gray-700 px-6 py-4 text-center"><?= $course['predicate']; ?></td>
                            <td class="border-t border-gray-700 px-6 py-4 text-center"><?= $course['semester']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Curriculum Vitae Section -->
    <section id="cv" class="py-16 bg-gradient-to-r from-blue-500 to-pink-500 fade-in-up">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold text-center text-white mb-8">Curriculum Vitae</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Programming Skills -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg transition duration-300 hover:scale-105 hover:bg-gray-700">
                    <h3 class="text-2xl font-semibold primary-color mb-4 flex items-center">
                        Programming Skills
                    </h3>
                    <ul class="list-disc ml-6 text-gray-300 space-y-2">
                        <?php foreach ($skills as $skill): ?>
                            <li><?= $skill; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Educational Background -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg transition duration-300 hover:scale-105 hover:bg-gray-700">
                    <h3 class="text-2xl font-semibold primary-color mb-4 flex items-center">
                        Educational Background
                    </h3>
                    <ul class="list-disc ml-6 text-gray-300 space-y-2">
                        <?php foreach ($education as $edu): ?>
                            <li><?= $edu; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Organizational History -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg transition duration-300 hover:scale-105 hover:bg-gray-700">
                    <h3 class="text-2xl font-semibold primary-color mb-4 flex items-center">
                        Organizational History
                    </h3>
                    <ul class="list-disc ml-6 text-gray-300 space-y-2">
                        <?php foreach ($organization as $org): ?>
                            <li><?= $org; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Achievement History -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg transition duration-300 hover:scale-105 hover:bg-gray-700">
                    <h3 class="text-2xl font-semibold primary-color mb-4 flex items-center">
                        Achievement History
                    </h3>
                    <ul class="list-disc ml-6 text-gray-300 space-y-2">
                        <?php foreach ($achievements as $achievement): ?>
                            <li><?= $achievement; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-gradient-to-r from-pink-500 to-orange-500 fade-in-up">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold text-center text-white mb-8">Portfolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($portfolio as $project): ?>
                <div class="bg-black-900 rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                    <img src="<?= base_url($project['image']); ?>" alt="<?= $project['title']; ?>" class="w-full h-48 object-cover">
                    <div class="p-6 bg-gray-800 bg-opacity-80">
                        <h3 class="text-2xl font-semibold text-white mb-2"><?= $project['title']; ?></h3>
                        <p class="text-gray-300 mb-4"><?= $project['description']; ?></p>
                        <p class="text-gray-200 mb-4"><strong>Stack:</strong> <?= implode(', ', $project['stack']); ?></p>
                        <a href="<?= $project['href']; ?>" target="_blank" class="text-primary-color hover:underline">View Project</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-teal-500 to-pink-500 text-center fade-in-up">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="text-4xl font-bold text-white mb-6">Contact Me</h2>
            <p class="text-xl text-gray-200 mb-2">Email: sandynicholas1201@gmail.com</p>
            <p class="text-xl text-gray-200 mb-2">Phone: 0822-2912-1208</p>
            <p class="text-xl text-gray-200">Location: Surabaya, East Java, Indonesia</p>
        </div>
    </section>

    <!-- Memanggil JavaScript menggunakan base_url -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>

    </body>
</html>