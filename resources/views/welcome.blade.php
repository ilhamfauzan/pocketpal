<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            /* background-color: #121212; */
            color: #ffffff;
        }
        nav.scrolled {
            background-color: rgba(30, 33, 37, 1) !important;
        }
    </style>
</head>
<body class="font-sans bg-[#181A20] text-white">

<!-- Navbar -->
<nav id="navbar" class="bg-white/10 backdrop-filter backdrop-blur-lg shadow-xl border border-gray-700 rounded-xl shadow-lg fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[80%] lg:w-[60%] z-50 transition-all duration-300">
    <div class="flex justify-between items-center px-6 py-3">
        <h1 class="text-xl font-bold text-[#FCD535]">PocketPal</h1>
        <div>
            <a href="/login" class="text-gray-200 hover:bg-[#FCD535]/20 px-4 py-3 rounded-lg transition"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="/register" class="text-gray-200 hover:bg-[#FCD535]/20 px-4 py-3 rounded-lg transition"><i class="fas fa-user-plus"></i> Register</a>
        </div>
    </div>
</nav>

<div class="container mx-auto px-6 pt-24">
    <!-- Jumbotron -->
    <div class="mt-20 p-8 flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-6">
        <div class="md:w-1/2">
            <h1 class="text-5xl font-bold text-[#FCD535]">Manage Your Finances</h1>
            <p class="text-gray-400 mt-4">Track your income, expenses, and savings with ease. PocketPal helps you stay on top of your financial goals.</p>
            <a href="/register" class="mt-6 inline-block bg-[#FCD535] text-gray-900 px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-yellow-500 transition"><i class="fas fa-user-plus"></i> Get Started</a>
        </div>
        <div class="md:w-1/2 relative">
            <img src="images/desktop.png" alt="Financial Management Desktop" class="w-full rounded-lg">
            <img src="images/mobile.png" alt="Financial Management Mobile" class="absolute bottom-0 right-4 w-1/4 rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Features Section -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white/10 rounded-lg shadow-lg p-6 text-center">
            <i class="fas fa-chart-line text-4xl text-[#FCD535]"></i>
            <h3 class="mt-4 text-xl font-bold">Track Spending</h3>
            <p class="mt-2 text-gray-400">Monitor your spending habits and identify areas where you can save more.</p>
        </div>
        <div class="bg-white/10 rounded-lg shadow-lg p-6 text-center">
            <i class="fas fa-wallet text-4xl text-[#FCD535]"></i>
            <h3 class="mt-4 text-xl font-bold">Manage Wallets</h3>
            <p class="mt-2 text-gray-400">Keep track of multiple wallets and their balances in one place.</p>
        </div>
        <div class="bg-white/10 rounded-lg shadow-lg p-6 text-center">
            <i class="fas fa-piggy-bank text-4xl text-[#FCD535]"></i>
            <h3 class="mt-4 text-xl font-bold">Save More</h3>
            <p class="mt-2 text-gray-400">Create savings wallet and watch your progress as you save more money.</p>
        </div>
    </div>

    {{-- Wallets Example Section --}}

    <div class="mt-9 flex flex-col items-center justify-center text-center">
        <h2 class="text-3xl font-bold mt-9">Customize your Wallet</h2>
        <p class="mt-2 text-gray-400">
            Whether you want to save for a big purchase, or just want
            to keep track of your spending, we've got you covered.
        </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-4 mt-12">
            <div onclick="#"
                class="border border-gray-700 shadow-xl rounded-lg cursor-pointer hover:bg-opacity-80 transition-all duration-200"
                style="background-color: #198876;" data-color="#FCD535">
                <div class="p-4 sm:p-6 flex flex-col justify-end h-full w-full aspect-square">
                    <div class="text-content">
                        <p class="text-4xl sm:text-6xl mb-2 sm:mb-4">🏖️</p>
                        <!-- Tampilkan emoji -->
                        <h3 class="text-lg sm:text-xl font-semibold">Holiday</h3>
                        <p class="text-sm sm:text-base">Rp1.500.000</p>
                    </div>
                </div>
            </div>
            <div onclick="#"
                class="border border-gray-700 shadow-xl rounded-lg cursor-pointer hover:bg-opacity-80 transition-all duration-200"
                style="background-color: #3498DB;" data-color="#FCD535">
                <div class="p-4 sm:p-6 flex flex-col justify-end h-full w-full aspect-square">
                    <div class="text-content">
                        <p class="text-4xl sm:text-6xl mb-2 sm:mb-4">🚗</p>
                        <!-- Tampilkan emoji -->
                        <h3 class="text-lg sm:text-xl font-semibold">New Car</h3>
                        <p class="text-sm sm:text-base">Rp90.330.000</p>
                    </div>
                </div>
            </div>
            <div onclick="#"
                class="border border-gray-700 shadow-xl rounded-lg cursor-pointer hover:bg-opacity-80 transition-all duration-200"
                style="background-color: #FF5733;" data-color="#FCD535">
                <div class="p-4 sm:p-6 flex flex-col justify-end h-full w-full aspect-square">
                    <div class="text-content">
                        <p class="text-4xl sm:text-6xl mb-2 sm:mb-4">🎉</p>
                        <!-- Tampilkan emoji -->
                        <h3 class="text-lg sm:text-xl font-semibold">Party</h3>
                        <p class="text-sm sm:text-base">Rp4.500.000</p>
                    </div>
                </div>
            </div>
            <div onclick="#"
                class="border border-gray-700 shadow-xl rounded-lg cursor-pointer hover:bg-opacity-80 transition-all duration-200"
                style="background-color: #2ECC71;" data-color="#FCD535">
                <div class="p-4 sm:p-6 flex flex-col justify-end h-full w-full aspect-square">
                    <div class="text-content">
                        <p class="text-4xl sm:text-6xl mb-2 sm:mb-4">🏠</p>
                        <!-- Tampilkan emoji -->
                        <h3 class="text-lg sm:text-xl font-semibold">Rent</h3>
                        <p class="text-sm sm:text-base">Rp2.500.000</p>
                    </div>
                </div>
            </div>
            <div onclick="#"
                class="border border-gray-700 shadow-xl rounded-lg cursor-pointer hover:bg-opacity-80 transition-all duration-200"
                style="background-color: #9B59B6;" data-color="#FCD535">
                <div class="p-4 sm:p-6 flex flex-col justify-end h-full w-full aspect-square">
                    <div class="text-content">
                        <p class="text-4xl sm:text-6xl mb-2 sm:mb-4">🍽️</p>
                        <!-- Tampilkan emoji -->
                        <h3 class="text-lg sm:text-xl font-semibold">Dining Out</h3>
                        <p class="text-sm sm:text-base">Rp3.000.000</p>
                    </div>
                </div>
            </div>
            
    </div>

</div>

<script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

</body>

<footer class=" text-white py-6 mt-12">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; {{ date('Y') }} Brotherhood's. All rights reserved.</p>
    </div>
</footer>

</html>
