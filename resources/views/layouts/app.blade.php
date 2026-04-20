<!doctype html>
<html class="bg-dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- Tailwind Css CDN link --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- Font Awsome Link --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Taskly App</title>
</head>

<body class="bg-neutral-200 font-sans">

    <!-- NAVBAR -->
    <nav class="bg-white/80 backdrop-blur shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Logo -->
                <h1 class="text-2xl font-bold text-emerald-600">TaskFlow</h1>

                <!-- Links -->
                <div class="flex space-x-10 text-gray-700 font-medium">
                    <a href="#" class="hover:text-emerald-600 transition">Dashboard</a>
                    <a href="#" class="hover:text-emerald-600 transition">Tasks</a>
                    <a href="#" class="hover:text-emerald-600 transition">Projects</a>
                </div>

                <!-- Button -->
                <button class="bg-emerald-600 text-white px-5 py-2 rounded-lg hover:bg-emerald-700 transition">
                    Add Task
                </button>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="py-20 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-3">
            @yield('Hero')
        </h2>
        <p class="text-gray-500 mb-6">
            @yield('heroDescription')
        </p>
    </section>


    <!-- TASKS -->
    <section class="max-w-7xl mx-auto px-8 pb-20">
        <h3 class="text-2xl font-bold text-gray-800 mb-10">Your Tasks</h3>

        <div class="grid grid-cols-3 gap-8">

            <!-- Task Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition border">

                <!-- Title -->
                <h4 class="text-xl font-semibold text-gray-800 mb-2">
                    Build Laravel App
                </h4>

                <!-- Status -->
                <span class="inline-block mb-3 px-3 py-1 text-sm rounded-full bg-amber-100 text-amber-600">
                    In Progress
                </span>

                <!-- Description -->
                <p class="text-gray-600 mb-4">
                    Create a simple task management system.
                </p>

                <!-- Long Description -->
                <p class="text-gray-500 text-sm mb-6">
                    This project includes CRUD operations, authentication, and UI design using Tailwind CSS.
                </p>

                <!-- Footer -->
                <div class="flex justify-between items-center text-sm text-gray-400">
                    <span>2 days ago</span>
                    <button class="text-emerald-600 hover:underline">
                        View
                    </button>
                </div>
            </div>


            <!-- Completed Task -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition border">

                <h4 class="text-xl font-semibold text-gray-800 mb-2">
                    Learn Tailwind
                </h4>

                <span class="inline-block mb-3 px-3 py-1 text-sm rounded-full bg-emerald-100 text-emerald-600">
                    Completed
                </span>

                <p class="text-gray-600 mb-4">
                    Practice layout, spacing, and responsive design.
                </p>

                <p class="text-gray-500 text-sm mb-6">
                    Covered flexbox, grid, and modern UI components.
                </p>

                <div class="flex justify-between items-center text-sm text-gray-400">
                    <span>1 week ago</span>
                    <button class="text-emerald-600 hover:underline">
                        View
                    </button>
                </div>
            </div>

        </div>
    </section>


    <!-- FOOTER -->
    <footer class="bg-neutral-900 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-3 gap-10">

            <div>
                <h4 class="text-white font-semibold mb-3">TaskFlow</h4>
                <p class="text-sm">
                    A modern task management system to keep your workflow organized.
                </p>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-3">Navigation</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">Dashboard</a></li>
                    <li><a href="#" class="hover:text-white">Tasks</a></li>
                    <li><a href="#" class="hover:text-white">Projects</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-3">Contact</h4>
                <p class="text-sm">info@Haidary.com</p>
            </div>

        </div>

        <div class="text-center mt-10 text-sm text-gray-500">
            © 2026 Haidary. All rights reserved.
        </div>
    </footer>



</html>
