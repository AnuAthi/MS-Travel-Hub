<?php
// You can add your PHP login logic here
// Example: if(isset($_POST['login'])) { ... }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MS Travel Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        :root {
            --ms-dark: #0a0f1c;
            --ms-card: #0f172a;
            --ms-blue: #3b82f6;
            --ms-sky: #0ea5e9;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: linear-gradient(rgba(10, 15, 28, 0.88), rgba(10, 15, 28, 0.96)), 
                        url('https://images.unsplash.com/photo-1518684079-3c830dcef090?q=80&w=1920') center/cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .login-card {
            background-color: var(--ms-card);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        .tab-btn {
            background-color: #1e293b;
            color: #64748b;
            border: 1px solid transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tab-btn.active {
            background-color: #334155;
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .input-field {
            background-color: #1e293b;
            border: 1.5px solid #334155;
            color: #f8fafc;
            transition: all 0.2s ease;
        }

        .input-field:focus {
            border-color: var(--ms-sky);
            outline: none;
            box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.15);
        }

        .fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-section-hidden {
            display: none !important;
        }
    </style>
</head>
<body class="antialiased">

    <header class="w-full py-8 text-center">
        <div class="inline-block">
            <span class="text-3xl font-extrabold tracking-tighter text-white uppercase">
                MS Travel <span class="text-blue-500">Hub</span>
            </span>
        </div>
    </header>

    <main class="flex-1 flex items-center justify-center px-4 mb-12">
        <div class="login-card w-full max-w-[440px] rounded-3xl p-8 md:p-10 fade-in">
            
            <div class="flex justify-center mb-8">
                <div class="w-20 h-20 bg-white p-4 rounded-2xl flex items-center justify-center shadow-2xl">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Portal Logo" class="w-full h-auto">
                </div>
            </div>

            <div id="loginFormSection">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-white tracking-tight">Login to Portal</h2>
                    <p class="text-slate-400 text-sm mt-2">Manage your global travel bookings</p>
                </div>

                <div class="flex gap-2 p-1.5 bg-slate-900/50 rounded-2xl mb-8 border border-slate-800">
                    <button id="customerTab" onclick="switchLogin('customer')" class="tab-btn active flex-1 py-3 text-xs font-extrabold rounded-xl uppercase tracking-widest">
                        <i class="fas fa-user mr-2 text-[10px]"></i> Customer
                    </button>
                    <button id="companyTab" onclick="switchLogin('company')" class="tab-btn flex-1 py-3 text-xs font-extrabold rounded-xl uppercase tracking-widest">
                        <i class="fas fa-building mr-2 text-[10px]"></i> Company
                    </button>
                </div>

                <form method="POST" action="" class="space-y-6">
                    <div>
                        <label id="idLabel" class="block text-[11px] font-extrabold text-slate-400 uppercase tracking-widest mb-2 ml-1">Account Email</label>
                        <div class="relative">
                            <span class="absolute left-4 top-3.5 text-slate-500">
                                <i class="fas fa-envelope text-sm"></i>
                            </span>
                            <input type="email" name="email" required placeholder="example@mstravel.com" 
                                class="input-field w-full pl-11 pr-4 py-3.5 rounded-xl text-sm placeholder:text-slate-500">
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2 ml-1">
                            <label class="text-[11px] font-extrabold text-slate-400 uppercase tracking-widest">Security Password</label>
                            <button type="button" onclick="toggleForgotForm(true)" class="text-[11px] font-bold text-sky-500 hover:text-sky-400 uppercase tracking-tighter cursor-pointer">Reset Key?</button>
                        </div>
                        <div class="relative">
                            <span class="absolute left-4 top-3.5 text-slate-500">
                                <i class="fas fa-lock text-sm"></i>
                            </span>
                            <input type="password" name="password" id="passwordField" required placeholder="••••••••" 
                                class="input-field w-full pl-11 pr-16 py-3.5 rounded-xl text-sm placeholder:text-slate-500">
                            <button type="button" onclick="togglePassword()" class="absolute right-4 top-3.5 text-slate-500 hover:text-sky-400 transition-colors">
                                <span id="toggleText" class="text-[10px] font-extrabold uppercase tracking-tighter">Show</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 py-1">
                        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded border-slate-700 bg-slate-800 text-sky-500 focus:ring-0">
                        <label for="remember" class="text-sm text-slate-400 cursor-pointer select-none">Stay logged in for 30 days</label>
                    </div>

                    <button type="submit" name="login" id="submitBtn" class="w-full bg-sky-600 hover:bg-sky-500 text-white font-extrabold py-4 rounded-xl transition-all shadow-xl shadow-sky-900/30 active:scale-[0.97] uppercase tracking-widest text-xs">
                        Sign in as Customer
                    </button>
                </form>
            </div>

            <div id="forgotFormSection" class="form-section-hidden fade-in">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-white tracking-tight">Reset Password</h2>
                    <p class="text-slate-400 text-sm mt-2">Enter your email to recover your account</p>
                </div>

                <form method="POST" action="" class="space-y-6">
                    <div>
                        <label class="block text-[11px] font-extrabold text-slate-400 uppercase tracking-widest mb-2 ml-1">Registered Email</label>
                        <div class="relative">
                            <span class="absolute left-4 top-3.5 text-slate-500">
                                <i class="fas fa-paper-plane text-sm"></i>
                            </span>
                            <input type="email" name="reset_email" required placeholder="your-email@mstravel.com" 
                                class="input-field w-full pl-11 pr-4 py-3.5 rounded-xl text-sm placeholder:text-slate-500">
                        </div>
                    </div>

                    <button type="submit" name="reset_password" class="w-full bg-sky-600 hover:bg-sky-500 text-white font-extrabold py-4 rounded-xl transition-all shadow-xl shadow-sky-900/30 active:scale-[0.97] uppercase tracking-widest text-xs">
                        Send Recovery Link
                    </button>

                    <button type="button" onclick="toggleForgotForm(false)" class="w-full text-slate-500 hover:text-white text-[10px] font-bold uppercase tracking-widest transition-colors mt-2">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Login
                    </button>
                </form>
            </div>

            <div class="mt-10 pt-8 border-t border-slate-800/60 text-center">
                <p class="text-sm text-slate-400">
                    New to MS Travel Hub? <a href="#" class="text-sky-500 font-extrabold hover:underline ml-1">Register Now</a>
                </p>
                <div class="mt-6">
                    <a href="index.php" class="text-[10px] font-extrabold text-slate-500 hover:text-white uppercase tracking-[0.2em] transition-colors">
                        <i class="fas fa-chevron-left mr-2"></i> Return to Homepage
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-6 text-center">
        <p class="text-[10px] font-bold text-slate-600 uppercase tracking-[0.3em]">
            &copy; <?php echo date("Y"); ?> MS Travel Hub Dubai &bull; Secure Portal
        </p>
    </footer>

    <script>
        function switchLogin(mode) {
            const customerTab = document.getElementById('customerTab');
            const companyTab = document.getElementById('companyTab');
            const idLabel = document.getElementById('idLabel');
            const submitBtn = document.getElementById('submitBtn');

            customerTab.classList.remove('active');
            companyTab.classList.remove('active');

            if (mode === 'customer') {
                customerTab.classList.add('active');
                idLabel.innerText = 'Customer Email';
                submitBtn.innerText = 'Sign in as Customer';
                submitBtn.style.backgroundColor = "#0ea5e9"; 
            } else {
                companyTab.classList.add('active');
                idLabel.innerText = 'Corporate ID / Email';
                submitBtn.innerText = 'Enter Company Portal';
                submitBtn.style.backgroundColor = "#4f46e5"; 
            }
        }
        function toggleForgotForm(isForgot) {
            const loginSection = document.getElementById('loginFormSection');
            const forgotSection = document.getElementById('forgotFormSection');
            
            if (isForgot) {
                loginSection.classList.add('form-section-hidden');
                forgotSection.classList.remove('form-section-hidden');
            } else {
                loginSection.classList.remove('form-section-hidden');
                forgotSection.classList.add('form-section-hidden');
            }
        }
        function togglePassword() {
            const field = document.getElementById('passwordField');
            const btnText = document.getElementById('toggleText');
            
            if (field.type === "password") {
                field.type = "text";
                btnText.innerText = "Hide";
            } else {
                field.type = "password";
                btnText.innerText = "Show";
            }
        }
    </script>
</body>
</html>