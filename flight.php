<?php
include "header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Booking | MS Travel Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc;
        }

        .hero-flight {
            background: linear-gradient(rgba(10, 15, 28, 0.7), rgba(10, 15, 28, 0.7)), 
                        url('https://images.unsplash.com/photo-1436491865332-7a61a109c053?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .flight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="antialiased">
    <section class="hero-flight relative pt-48 pb-56 text-white text-center">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="inline-block bg-blue-500/20 border border-blue-500/30 px-4 py-2 rounded-full mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Premium Air Travel</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tighter">
                The World is <span class="text-blue-500">Waiting.</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto font-medium">
                Search and compare thousands of flights across 500+ airlines to find your perfect journey.
            </p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-6 -mt-24 relative z-30">
        <div class="glass-card rounded-[35px] shadow-2xl p-2 border border-white">
            <div class="bg-white rounded-[30px] p-8 md:p-10 shadow-sm">
                
                <div class="flex gap-6 mb-8 border-b border-slate-100 pb-4">
                    <label class="flex items-center gap-2 cursor-pointer font-bold text-slate-900">
                        <input type="radio" name="trip" checked class="w-4 h-4 text-blue-600"> Round Trip
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer font-bold text-slate-500 hover:text-blue-600 transition">
                        <input type="radio" name="trip" class="w-4 h-4 text-blue-600"> One Way
                    </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div class="flex flex-col gap-1">
                        <label class="text-[10px] font-bold text-blue-600 uppercase ml-2">From</label>
                        <select class="bg-slate-50 border border-slate-200 rounded-2xl px-4 py-4 outline-none focus:border-blue-500 font-semibold transition">
                            <option>Colombo (CMB)</option>
                            <option>Dubai (DXB)</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-[10px] font-bold text-blue-600 uppercase ml-2">To</label>
                        <select class="bg-slate-50 border border-slate-200 rounded-2xl px-4 py-4 outline-none focus:border-blue-500 font-semibold transition">
                            <option>Male (MLE)</option>
                            <option>London (LHR)</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-[10px] font-bold text-blue-600 uppercase ml-2">Departure</label>
                        <input type="date" class="bg-slate-50 border border-slate-200 rounded-2xl px-4 py-4 outline-none focus:border-blue-500 font-semibold transition">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-[10px] font-bold text-blue-600 uppercase ml-2">Passengers</label>
                        <select class="bg-slate-50 border border-slate-200 rounded-2xl px-4 py-4 outline-none focus:border-blue-500 font-semibold transition">
                            <option>1 Adult, Economy</option>
                            <option>2 Adults, Business</option>
                        </select>
                    </div>

                    <div class="flex items-end">
                        <button class="w-full bg-[#0a0f1c] text-white py-4 rounded-2xl font-extrabold hover:bg-blue-600 transition-all shadow-lg shadow-blue-900/20">
                            Search Flights
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="max-w-5xl mx-auto px-6 py-24">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-3xl font-extrabold text-slate-900">Recommended Flights</h2>
            <button class="text-blue-600 font-bold hover:underline">Sort by Lowest Price</button>
        </div>

        <div class="space-y-6">
            <div class="flight-card bg-white rounded-3xl border border-slate-100 p-8 flex flex-col md:flex-row items-center gap-8 shadow-sm">
                <div class="flex-1 flex items-center gap-6">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-plane-departure text-blue-600 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">SriLankan Airlines</h3>
                        <p class="text-slate-500 font-medium">UL 101 • Non-stop</p>
                    </div>
                </div>

                <div class="flex-[2] flex items-center justify-between gap-4 text-center">
                    <div>
                        <p class="text-2xl font-extrabold text-slate-900">10:30</p>
                        <p class="text-sm font-bold text-slate-400">CMB</p>
                    </div>
                    <div class="flex-1 border-t-2 border-dashed border-slate-200 relative">
                        <i class="fas fa-plane absolute top-[-10px] left-1/2 -translate-x-1/2 text-slate-300"></i>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">1h 15m</span>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-slate-900">11:45</p>
                        <p class="text-sm font-bold text-slate-400">MLE</p>
                    </div>
                </div>

                <div class="flex-1 text-right">
                    <p class="text-xs font-bold text-slate-400 line-through">LKR 95,000</p>
                    <p class="text-3xl font-extrabold text-blue-600 mb-2">LKR 89,500</p>
                    <button class="bg-[#0a0f1c] text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-600 transition">Book Now</button>
                </div>
            </div>

            <div class="flight-card bg-white rounded-3xl border border-slate-100 p-8 flex flex-col md:flex-row items-center gap-8 shadow-sm">
                <div class="flex-1 flex items-center gap-6">
                    <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-plane-departure text-red-600 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">Emirates</h3>
                        <p class="text-slate-500 font-medium">EK 651 • Non-stop</p>
                    </div>
                </div>

                <div class="flex-[2] flex items-center justify-between gap-4 text-center">
                    <div>
                        <p class="text-2xl font-extrabold text-slate-900">02:00</p>
                        <p class="text-sm font-bold text-slate-400">CMB</p>
                    </div>
                    <div class="flex-1 border-t-2 border-dashed border-slate-200 relative">
                        <i class="fas fa-plane absolute top-[-10px] left-1/2 -translate-x-1/2 text-slate-300"></i>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">4h 30m</span>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-slate-900">06:30</p>
                        <p class="text-sm font-bold text-slate-400">DXB</p>
                    </div>
                </div>

                <div class="flex-1 text-right">
                    <p class="text-3xl font-extrabold text-blue-600 mb-2">LKR 145,000</p>
                    <button class="bg-[#0a0f1c] text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-600 transition">Book Now</button>
                </div>
            </div>
        </div>
    </section>
<?php
include "footer.php"
?>
</body>
</html>