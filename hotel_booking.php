<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Hotel Booking | MS Travel Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }

       

        .hero-gradient {
            background: linear-gradient(rgba(10, 15, 28, 0.6), rgba(10, 15, 28, 0.6)), 
                        url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hotel-card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hotel-card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="antialiased">
    <section class="hero-gradient relative pt-48 pb-64 text-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tighter">
                Find Your <span class="text-blue-400">Perfect</span> Stay.
            </h1>
            <p class="text-lg md:text-xl text-slate-200 max-w-2xl mx-auto font-medium">
                From luxury Dubai penthouses to serene Sri Lankan resorts. Experience comfort redefined.
            </p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-6 -mt-32 relative z-30">
        <div class="glass-card rounded-[40px] p-4 shadow-2xl">
            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 p-4 bg-white rounded-[32px]">
                <div class="flex flex-col px-4 border-r border-slate-100">
                    <label class="text-xs font-bold text-blue-600 uppercase mb-1">Location</label>
                    <input type="text" placeholder="Where are you going?" class="outline-none text-slate-800 font-semibold placeholder:text-slate-400">
                </div>
                <div class="flex flex-col px-4 border-r border-slate-100">
                    <label class="text-xs font-bold text-blue-600 uppercase mb-1">Check In</label>
                    <input type="date" class="outline-none text-slate-800 font-semibold">
                </div>
                <div class="flex flex-col px-4 border-r border-slate-100">
                    <label class="text-xs font-bold text-blue-600 uppercase mb-1">Guests</label>
                    <select class="outline-none text-slate-800 font-semibold bg-transparent">
                        <option>2 Adults, 1 Room</option>
                        <option>1 Adult, 1 Room</option>
                    </select>
                </div>
                <button class="bg-[#0a0f1c] hover:bg-blue-600 text-white rounded-2xl font-bold py-4 transition-all duration-300">
                    <i class="fas fa-search mr-2"></i> Search Hotels
                </button>
            </form>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-24 flex flex-col lg:flex-row gap-12">
        
        <aside class="w-full lg:w-72 space-y-8">
            <div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Popular Filters</h3>
                <div class="space-y-3">
                    <?php 
                    $filters = ["Free Cancellation", "Breakfast Included", "Swimming Pool", "4 & 5 Star Hotels"];
                    foreach($filters as $f) {
                        echo "<label class='flex items-center gap-3 cursor-pointer group'>
                                <input type='checkbox' class='w-5 h-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500'>
                                <span class='text-slate-600 group-hover:text-blue-600 transition font-medium'>$f</span>
                              </label>";
                    }
                    ?>
                </div>
            </div>
            <div class="p-6 bg-blue-50 rounded-3xl border border-blue-100">
                <h4 class="font-bold text-blue-900 mb-2">Need help?</h4>
                <p class="text-sm text-blue-700 mb-4">Our travel experts are available 24/7 to assist you.</p>
                <a href="#" class="text-blue-600 font-bold hover:underline">Contact Support</a>
            </div>
        </aside>

        <section class="flex-1 space-y-8">
            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-bold text-slate-900">Recommended Stays</h2>
                <span class="text-slate-500 font-medium">142 hotels found</span>
            </div>

            <div class="hotel-card-hover bg-white rounded-[32px] overflow-hidden border border-slate-100 flex flex-col md:flex-row shadow-sm">
                <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-extrabold text-slate-900">Rove JBR Resort</h3>
                            <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-bold uppercase">Best Value</span>
                        </div>
                        <p class="text-slate-500 flex items-center gap-2 mb-4">
                            <i class="fas fa-map-marker-alt text-blue-500"></i> Jumeirah Beach, Dubai
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span class="text-xs font-semibold bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg">✔ Free WiFi</span>
                            <span class="text-xs font-semibold bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg">✔ Breakfast & Dinner</span>
                            <span class="text-xs font-semibold bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg">✔ Pool Access</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end mt-8 border-t border-slate-50 pt-6">
                        <div>
                            <p class="text-slate-400 text-sm line-through">LKR 56,000</p>
                            <p class="text-3xl font-extrabold text-slate-900">LKR 42,500 <span class="text-sm font-medium text-slate-500">/ night</span></p>
                        </div>
                        <button class="bg-[#0a0f1c] hover:bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold transition-all">Book Now</button>
                    </div>
                </div>
            </div>

            <div class="hotel-card-hover bg-white rounded-[32px] overflow-hidden border border-slate-100 flex flex-col md:flex-row shadow-sm">
                <div class="md:w-1/3 h-64 md:h-auto overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-extrabold text-slate-900">Le Méridien Luxury</h3>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold uppercase">Featured</span>
                        </div>
                        <p class="text-slate-500 flex items-center gap-2 mb-4">
                            <i class="fas fa-map-marker-alt text-blue-500"></i> Garhoud, Dubai
                        </p>
                        <p class="text-slate-600 font-medium mb-4">Superior Double Room with City View. All-inclusive luxury experience.</p>
                    </div>
                    <div class="flex justify-between items-end mt-8 border-t border-slate-50 pt-6">
                        <div>
                            <p class="text-slate-400 text-sm line-through">LKR 60,000</p>
                            <p class="text-3xl font-extrabold text-slate-900">LKR 46,500 <span class="text-sm font-medium text-slate-500">/ night</span></p>
                        </div>
                        <button class="bg-[#0a0f1c] hover:bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold transition-all">Book Now</button>
                    </div>
                </div>
            </div>

        </section>
    </div>
<?php 
include 'footer.php'; 
?>

</body>
</html>