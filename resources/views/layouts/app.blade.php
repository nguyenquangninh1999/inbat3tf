<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif !important; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float { animation: float 3s ease-in-out infinite; }

        @keyframes pulse-ring {
            0% { transform: scale(1); opacity: 0.6; }
            100% { transform: scale(1.8); opacity: 0; }
        }
        .pulse-blue::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: #0068ff;
            animation: pulse-ring 1.5s ease-out infinite;
            z-index: -1;
        }
        .pulse-red::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: #ef4444;
            animation: pulse-ring 1.5s ease-out infinite;
            animation-delay: 0.4s;
            z-index: -1;
        }

        html { scroll-behavior: smooth; }
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 30;
            transition: transform 0.4s ease, box-shadow 0.3s ease;
        }
        header.hide {
            transform: translateY(-100%);
        }
        header.scrolled {
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        body {
            padding-top: 68px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">

<!-- Sidebar overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 z-40 hidden" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-[#5b2d8e] z-50 transform -translate-x-full transition-transform duration-300">
    <div class="p-4 border-b border-purple-700">
        <input type="text" placeholder="Tìm kiếm ..." class="w-full px-4 py-2 text-sm rounded bg-white text-gray-700 outline-none">
    </div>
    <nav class="flex flex-col text-white text-sm font-semibold">
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Về chúng tôi</a>
        <a href="#" onclick="scrollToSection('san-pham')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Sản phẩm</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Bảo giá</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Ưu đãi</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Hỗ trợ</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Cam kết</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Dự án</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 uppercase tracking-widest">Tư vấn</a>
    </nav>
</div>

<!-- Header -->
<header class="bg-[#5b2d8e] text-white">
    <div class="w-full px-4 md:px-12 flex items-center justify-between h-14 md:h-16">

        <!-- Logo -->
        <div class="flex items-center gap-2 md:gap-3 shrink-0">
            <div class="w-9 h-9 md:w-11 md:h-11 bg-orange-500 rounded-full flex items-center justify-center text-xs font-bold text-white shrink-0">BC</div>
            <div class="leading-tight">
                <div class="text-[9px] md:text-[10px] uppercase tracking-wider opacity-80">Xưởng in bạt quảng cáo</div>
                <div class="text-sm md:text-base font-bold uppercase">Nhà máy in BC</div>
            </div>
        </div>

        <!-- Nav desktop -->
        <nav class="hidden xl:flex items-center gap-6 text-sm font-semibold uppercase tracking-widest">
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Về chúng tôi</a>
            <a href="#" onclick="scrollToSection('san-pham')" class="hover:text-orange-300 whitespace-nowrap">Sản phẩm</a>
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Bảo giá</a>
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Ưu đãi</a>
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Hỗ trợ</a>
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Cam kết</a>
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Dự án</a>
            <a href="#" class="hover:text-orange-300 whitespace-nowrap">Tư vấn</a>
        </nav>

        <!-- Right icons -->
        <div class="flex items-center gap-2 md:gap-4">
            <button class="hover:text-orange-300 hidden md:block">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/></svg>
            </button>
            <button onclick="openSidebar()" class="hover:text-orange-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <a href="tel:" class="w-8 h-8 md:w-9 md:h-9 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 md:w-9 md:h-9 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5C3.9 4 3 4.9 3 6v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
            </a>
        </div>
    </div>

    <!-- Border line -->
    <div class="h-1 w-full flex">
        <div class="flex-1 bg-orange-500"></div>
        <div class="flex-1 bg-yellow-400"></div>
        <div class="flex-1 bg-orange-500"></div>
        <div class="flex-1 bg-yellow-400"></div>
        <div class="flex-1 bg-orange-500"></div>
        <div class="flex-1 bg-yellow-400"></div>
        <div class="flex-1 bg-orange-500"></div>
        <div class="flex-1 bg-yellow-400"></div>
        <div class="flex-1 bg-orange-500"></div>
        <div class="flex-1 bg-yellow-400"></div>
    </div>
</header>

<!-- Page content -->
<main>
    @yield('content')
</main>

<!-- Floating buttons + Hỗ trợ 24/7 -->
<div class="fixed bottom-6 left-4 z-50 flex flex-col gap-4">
    <!-- Zalo -->
    <a href="https://zalo.me/0977898283" target="_blank"
       class="relative w-12 h-12 rounded-full flex items-center justify-center shadow-xl pulse-blue"
       style="background:#0068ff;" title="Zalo">
        <img src="/icons8-zalo.svg" class="w-7 h-7" alt="Zalo">
    </a>

    <!-- Phone -->
    <a href="tel:0977898283"
       class="relative w-12 h-12 bg-red-500 rounded-full flex items-center justify-center shadow-xl pulse-red" title="Gọi ngay">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
    </a>
</div>

<!-- Hỗ trợ 24/7 bottom right -->
<div class="fixed bottom-6 right-4 z-50">
    <a href="tel:0977898283"
       class="flex items-center gap-2 bg-red-500 text-white text-sm font-semibold px-4 py-2 rounded-full shadow-lg float" style="animation-delay:.6s">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
        Hỗ trợ 24/7
    </a>
</div>

@stack('scripts')

<script>
    function scrollToSection(id) {
        event.preventDefault();
        const el = document.getElementById(id);
        if (!el) return;
        const offset = document.querySelector('header').offsetHeight;
        window.scrollTo({ top: el.offsetTop - offset, behavior: 'smooth' });
        closeSidebar();
    }

    function openSidebar() {
        document.getElementById('sidebar').classList.remove('-translate-x-full');
        document.getElementById('overlay').classList.remove('hidden');
    }
    function closeSidebar() {
        document.getElementById('sidebar').classList.add('-translate-x-full');
        document.getElementById('overlay').classList.add('hidden');
    }

    // Sticky header: chỉ hiệu ứng đẩy lên lần đầu khi scroll từ top
    const header = document.querySelector('header');
    let lastScroll = 0;
    let hasAnimated = false;
    let showTimer = null;

    window.addEventListener('scroll', () => {
        const current = window.scrollY;

        if (!hasAnimated && current > lastScroll && current > 80) {
            // Lần đầu scroll xuống từ top → ẩn rồi hiện lại
            header.classList.add('hide');
            header.classList.add('scrolled');
            hasAnimated = true;

            clearTimeout(showTimer);
            showTimer = setTimeout(() => {
                header.classList.remove('hide');
            }, 600);
        } else if (current > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
            hasAnimated = false; // reset khi về top
        }

        lastScroll = current;
    });
</script>
</body>
</html>
