<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Services | MS Travel Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        :root {
            --primary: #0a0f1c;
            --accent: #3b82f6;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }

        

        .hero-explore {
            background: linear-gradient(rgba(10, 15, 28, 0.6), rgba(10, 15, 28, 0.7)), 
                        url('https://images.unsplash.com/photo-1512100356956-c1227c3317bb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

        .glass-search {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="antialiased">
            <div class="xl:hidden text-white text-2xl cursor-pointer" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <div id="mobileMenu" class="hidden xl:hidden bg-[#0a0f1c] p-6 space-y-4 text-white border-t border-white/10">
            <a href="index.php" class="block">Home</a>
            <a href="explore.php" class="block text-blue-500">Explore</a>
            <a href="hotel_booking.php" class="block">Hotel Booking</a>
            <a href="flight.php" class="block">Flight Booking</a>
        </div>
    </header>

    <section class="hero-explore relative pt-48 pb-56 text-center text-white">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tighter italic">Our Premium Services</h1>
            <p class="text-lg md:text-xl text-slate-200 mb-12 font-medium">Everything you need for a seamless journey, all in one hub.</p>
            
            <div class="glass-search p-4 rounded-[40px] shadow-2xl max-w-3xl mx-auto">
                <form class="flex flex-col md:flex-row gap-2 bg-white rounded-[32px] p-2">
                    <select class="flex-1 bg-transparent px-6 py-3 outline-none text-slate-800 font-semibold border-b md:border-b-0 md:border-r border-slate-100">
                        <option>Select Service</option>
                        <option>Hotel Booking</option>
                        <option>Flight Booking</option>
                        <option>Car Rent</option>
                        <option>Holiday Packages</option>
                        <option>Visa Portal</option>
                    </select>
                    <input type="text" placeholder="Destination Region" class="flex-1 bg-transparent px-6 py-3 outline-none text-slate-800 font-semibold">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white rounded-full px-8 py-3 font-bold transition flex items-center justify-center gap-2">
                        <i class="fas fa-search"></i> Search
                    </button>
                </form>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-8 py-20">
        <div class="mb-12">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Explore Our Services</h2>
            <div class="h-1 w-20 bg-blue-500 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="category-card group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800" alt="Hotel Booking" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold text-blue-600 uppercase">Stay</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Hotel Booking</h3>
                    <p class="text-slate-500 mb-6 line-clamp-2">Book luxury resorts and boutique hotels at exclusive rates globally.</p>
                    <a href="hotel_booking.php" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:gap-4 transition-all">
                        Book Stay <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="category-card group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="./images/fly.jpg" alt="Flight Booking" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold text-sky-600 uppercase">Aviation</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Flight Booking</h3>
                    <p class="text-slate-500 mb-6 line-clamp-2">Global flight connections with the world's leading airlines at your fingertips.</p>
                    <a href="flight.php" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:gap-4 transition-all">
                        Find Flights <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="category-card group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800" alt="Holiday Packages" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold text-orange-600 uppercase">Tours</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Holiday Packages</h3>
                    <p class="text-slate-500 mb-6 line-clamp-2">Curated all-inclusive tour packages designed for luxury and adventure.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:gap-4 transition-all">
                        View Packages <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="category-card group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=800" alt="Car Rent" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold text-slate-700 uppercase">Transport</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Car Rent</h3>
                    <p class="text-slate-500 mb-6 line-clamp-2">Premium vehicle rentals for city drives or desert explorations in Dubai.</p>
                    <a href="car_rent.php" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:gap-4 transition-all">
                        Rent a Car <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="category-card group bg-white rounded-[32px] overflow-hidden border border-slate-100 shadow-sm transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?auto=format&fit=crop&w=800" alt="Visa Portal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold text-emerald-600 uppercase">Secure</div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Visa Portal Service</h3>
                    <p class="text-slate-500 mb-6 line-clamp-2">Fast-track your visa application with our automated and secure processing system.</p>
                    <a href="visa_portal.php" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:gap-4 transition-all">
                        Apply Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </main>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
<?php
include "footer.php";
?>
</body>
</html>