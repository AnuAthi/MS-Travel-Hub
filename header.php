<?php
// Mock login check - Replace with your real session logic (e.g., isset($_SESSION['user']))
$is_logged_in = false; 
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        #mobile-menu { max-height: 0; transition: max-height 0.3s ease-out; overflow: hidden; }
        #mobile-menu.open { max-height: 600px; }
    </style>
</head>
<body> <header class="fixed top-0 left-0 w-full z-50 bg-[#0a0f1c]/95 backdrop-blur-md border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <div class="flex-shrink-0">
                <a href="index.php" class="text-xl lg:text-2xl font-extrabold tracking-tighter text-white uppercase">
                    MS TRAVEL <span class="text-blue-500">HUB</span>
                </a>
            </div>

            <nav class="hidden xl:flex items-center space-x-4">
                <a href="index.php" class="text-[12px] font-bold <?php echo ($current_page == 'index.php') ? 'text-blue-400' : 'text-white hover:text-blue-400'; ?> transition-colors uppercase tracking-wider">Home</a>
                
                <?php if (!$is_logged_in): ?>
                    <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider">About</a>
                    <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider">Explore</a>
                    <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider">Contact</a>
                <?php else: ?>
                    <a href="dashboard.php" class="text-[12px] font-bold text-blue-400 hover:text-blue-300 transition-colors uppercase tracking-wider">Customer Dashboard</a>
                <?php endif; ?>

                <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider">Hotel Booking</a>
                <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider">Visa Portal</a>
                <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider">Flight Booking</a>
                <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider text-nowrap">Holiday booking</a>
                <a href="#" class="text-[12px] font-bold text-white hover:text-blue-400 transition-colors uppercase tracking-wider text-nowrap">Car Rent</a>
                
                <a href="login.php" class="ml-2 px-5 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-[12px] font-extrabold uppercase transition-all shadow-lg shadow-blue-900/30">
                    <?php echo $is_logged_in ? 'Logout' : 'Login'; ?>
                </a>
            </nav>

            <div class="xl:hidden flex items-center">
                <button id="menu-btn" class="text-white hover:text-blue-500 transition-colors focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="xl:hidden bg-[#0d1425] border-t border-white/5">
        <div class="px-6 py-6 space-y-4">
            <a href="index.php" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">Home</a>
            
            <?php if (!$is_logged_in): ?>
                <a href="#" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">About</a>
                <a href="#" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">Explore</a>
                <a href="#" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">Contact</a>
            <?php else: ?>
                <a href="dashboard.php" class="block text-sm font-bold text-blue-400 uppercase">Customer Dashboard</a>
            <?php endif; ?>

            <a href="#" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">Hotel Booking</a>
            <a href="#" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">Visa Portal</a>
            <a href="#" class="block text-sm font-bold text-white hover:text-blue-400 uppercase">Flight Booking</a>
            <a href="login.php" class="inline-block w-full text-center px-6 py-3 rounded-lg bg-blue-600 text-white text-sm font-extrabold uppercase">
                <?php echo $is_logged_in ? 'Logout' : 'Login'; ?>
            </a>
        </div>
    </div>
</header>

<div class="h-20 w-full"></div> <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
        
        const icon = menuBtn.querySelector('i');
        if (mobileMenu.classList.contains('open')) {
            icon.classList.replace('fa-bars', 'fa-times');
        } else {
            icon.classList.replace('fa-times', 'fa-bars');
        }
    });
</script>

</body>
</html>