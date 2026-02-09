<?php
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Portal | MS Travel Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc;
        }

        .hero-mesh {
            background-color: #0a0f1c;
            background-image: 
                radial-gradient(at 0% 0%, hsla(217,100%,39%,0.15) 0, transparent 50%), 
                radial-gradient(at 100% 100%, hsla(188,100%,50%,0.1) 0, transparent 50%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-blue {
            background: #3b82f6;
            transition: all 0.3s ease;
        }

        .btn-blue:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(59, 130, 246, 0.4);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.1);
        }

        /* Custom scrollbar for better UX */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #3b82f6; border-radius: 10px; }
    </style>
</head>
<body class="antialiased">
    <section class="hero-mesh relative pt-48 pb-56 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <div class="inline-block bg-blue-500/10 border border-blue-500/20 px-4 py-2 rounded-full mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Trusted by 1M+ Travelers</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold mb-8 leading-tight tracking-tighter">
                Global Travel Starts <br>
                <span class="text-blue-500">With One Click.</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-medium">
                The most advanced digital visa processing system. Fast, secure, and fully automated for your convenience.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#apply" class="btn-blue px-10 py-5 rounded-2xl font-bold text-lg text-white">New Application</a>
                <a href="#" class="bg-white/5 border border-white/10 px-10 py-5 rounded-2xl font-bold text-lg text-white hover:bg-white/10 transition">View Requirements</a>
            </div>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6 -mt-24 relative z-30">
        <div class="glass-card rounded-[35px] shadow-2xl p-2 border border-white">
            <div class="bg-white rounded-[30px] p-8 md:p-10 flex flex-col md:flex-row items-center gap-8 shadow-sm">
                <div class="text-center md:text-left min-w-[200px]">
                    <h3 class="font-extrabold text-2xl text-slate-900">Track Visa</h3>
                    <p class="text-slate-500 text-sm font-semibold">Enter details below</p>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="flex-1 w-full flex flex-col sm:flex-row gap-4">
                    <input type="text" name="visa_id" required placeholder="Application ID / Passport Number" class="flex-1 bg-slate-50 border border-slate-200 rounded-2xl px-6 py-5 outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 font-semibold transition-all">
                    <button type="submit" class="bg-[#0a0f1c] text-white px-10 py-5 rounded-2xl font-extrabold hover:bg-blue-600 transition-all">
                        Search Status
                    </button>
                </form>
            </div>
        </div>
    </div>

    <section id="apply" class="max-w-7xl mx-auto px-6 py-32">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">Select Your Visa Type</h2>
            <p class="text-slate-500 text-lg font-medium">Fast-track your global journey with our automated portal.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="group hover-lift bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-3xl mb-8">🏖️</div>
                <h3 class="text-2xl font-bold mb-4">Tourist Visa</h3>
                <p class="text-slate-500 mb-8">Perfect for holidays and family visits. 30, 60, and 90-day options.</p>
                <button class="w-full py-4 rounded-xl font-bold bg-slate-100 text-slate-900 group-hover:bg-blue-600 group-hover:text-white transition-all">Apply Now</button>
            </div>
            
            <div class="group hover-lift bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center text-3xl mb-8">💼</div>
                <h3 class="text-2xl font-bold mb-4">Business Visa</h3>
                <p class="text-slate-500 mb-8">For corporate meetings and trade shows. Includes priority processing.</p>
                <button class="w-full py-4 rounded-xl font-bold bg-slate-100 text-slate-900 group-hover:bg-blue-600 group-hover:text-white transition-all">Apply Now</button>
            </div>
            
            <div class="group hover-lift bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm">
                <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-3xl mb-8">✈️</div>
                <h3 class="text-2xl font-bold mb-4">Transit Visa</h3>
                <p class="text-slate-500 mb-8">Short term 48-96 hour entry permits for layovers and connections.</p>
                <button class="w-full py-4 rounded-xl font-bold bg-slate-100 text-slate-900 group-hover:bg-blue-600 group-hover:text-white transition-all">Apply Now</button>
            </div>
        </div>
    </section>
<?php 
include 'footer.php'; 
?>
</body>
</html>
