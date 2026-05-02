<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name') . ' - Xưởng In Bạt Quảng Cáo Lớn Nhất Miền Bắc')</title>
    <meta name="description" content="@yield('description', 'Nhà máy in 3TF - Xưởng in bạt quảng cáo lớn nhất miền Bắc. Chuyên in UV, in bạt, in decal, cắt CNC, cắt mica. Cam kết chất lượng, giá tốt nhất.')">
    <meta name="keywords" content="@yield('keywords', 'in bạt quảng cáo, in UV, in decal, cắt CNC, cắt mica, in canvas, nhà máy in 3TF, xưởng in hà nội')">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#5b2d8e">
    <meta property="og:title" content="@yield('title', config('app.name') . ' - Xưởng In Bạt Quảng Cáo Lớn Nhất Miền Bắc')">
    <meta property="og:description" content="@yield('description', 'Nhà máy in 3TF - Xưởng in bạt quảng cáo lớn nhất miền Bắc.')">
    <meta property="og:image" content="@yield('og_image', asset('favicon.svg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', config('app.name') . ' - Xưởng In Bạt Quảng Cáo Lớn Nhất Miền Bắc')">
    <meta name="twitter:description" content="@yield('description', 'Nhà máy in 3TF - Xưởng in bạt quảng cáo lớn nhất miền Bắc.')">
    <meta name="twitter:image" content="@yield('og_image', asset('favicon.svg'))">
    <meta name="author" content="Nhà máy in 3TF">
    <meta name="geo.region" content="VN-HN">
    <meta name="geo.placename" content="Hà Nội">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="{{ $setting->logo ? asset('storage/' . $setting->logo) : asset('favicon.svg') }}">
    <link rel="shortcut icon" href="{{ $setting->logo ? asset('storage/' . $setting->logo) : asset('favicon.svg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif !important; }
        p, span, a, li, td, th, label, input, textarea, button { font-size: 16px !important; }
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

        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.92); }
            to   { opacity: 1; transform: scale(1); }
        }
        @keyframes fadeOutScale {
            from { opacity: 1; transform: scale(1); }
            to   { opacity: 0; transform: scale(0.92); }
        }
        .popup-enter { animation: fadeInScale 0.25s ease forwards; }
        .popup-leave { animation: fadeOutScale 0.2s ease forwards; }
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
            padding-top: 0;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('structured_data')
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
        <a href="#" onclick="scrollToSection('ve-chung-toi')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Về chúng tôi</a>
        <a href="#" onclick="scrollToSection('san-pham')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Sản phẩm</a>
        <a href="#" onclick="scrollToSection('bao-gia')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Bảo giá</a>
        <a href="#" onclick="scrollToSection('uu-dai')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Ưu đãi</a>
        <a href="#" onclick="scrollToSection('ho-tro')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Hỗ trợ</a>
        <a href="#" onclick="scrollToSection('cam-ket')" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Cam kết</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 border-b border-purple-700 uppercase tracking-widest">Dự án</a>
        <a href="#" class="px-6 py-4 hover:bg-purple-700 uppercase tracking-widest">Tư vấn</a>
    </nav>
</div>

<!-- Header -->
<header class="bg-[#5b2d8e] text-white">
    <div class="w-full px-4 md:px-12 flex items-center justify-between h-14 md:h-16">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 md:gap-3 shrink-0">
            <div class="w-9 h-9 md:w-11 md:h-11 shrink-0 rounded-full overflow-hidden">
                <img src="{{ $setting->logo ? asset('storage/' . $setting->logo) : asset('favicon.svg') }}" class="w-full h-full object-cover" alt="Logo">
            </div>
            <div class="leading-tight">
                <div class="text-[9px] md:text-[10px] uppercase tracking-wider opacity-80">Xưởng in bạt quảng cáo</div>
                <div class="text-sm md:text-base font-bold uppercase">Nhà máy in 3TF</div>
            </div>
        </a>
        <nav class="hidden xl:flex items-center gap-6 text-sm font-semibold uppercase tracking-widest">
            <a href="#" onclick="scrollToSection('ve-chung-toi')" class="hover:text-orange-300 whitespace-nowrap">Về chúng tôi</a>
            <a href="#" onclick="scrollToSection('san-pham')" class="hover:text-orange-300 whitespace-nowrap">Sản phẩm</a>
            <a href="#" onclick="scrollToSection('bao-gia')" class="hover:text-orange-300 whitespace-nowrap">Bảo giá</a>
            <a href="#" onclick="scrollToSection('uu-dai')" class="hover:text-orange-300 whitespace-nowrap">Ưu đãi</a>
            <a href="#" onclick="scrollToSection('ho-tro')" class="hover:text-orange-300 whitespace-nowrap">Hỗ trợ</a>
            <a href="#" onclick="scrollToSection('cam-ket')" class="hover:text-orange-300 whitespace-nowrap">Cam kết</a>
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
            <a href="tel:{{ $setting->phone }}" class="w-8 h-8 md:w-9 md:h-9 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-400 ring-2 ring-white">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
            </a>
            <a href="#" onclick="openPopup(); return false;" class="w-8 h-8 md:w-9 md:h-9 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-400 ring-2 ring-white">
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

<!-- Footer -->
<footer class="bg-[#4a1a7a] text-white pt-12 pb-4 px-4 md:px-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 mb-8">

        <!-- Col 1: Logo + Info -->
        <div>
            <div class="flex items-center gap-3 mb-3">
                <div class="w-14 h-14 shrink-0 rounded-full overflow-hidden">
                    <img src="{{ $setting->logo ? asset('storage/' . $setting->logo) : asset('favicon.svg') }}" class="w-full h-full object-cover" alt="Logo">
                </div>
                <div>
                    <div class="text-xs uppercase text-orange-400 tracking-wider">Xưởng in bạt quảng cáo</div>
                    <div class="text-xl font-bold uppercase">Nhà máy in 3TF</div>
                </div>
            </div>
            <p class="text-xs text-purple-300 uppercase mb-1">Xưởng in bạt quảng cáo – Nhà máy in 3TF</p>
            <p class="text-base font-bold uppercase text-white mb-4">Công ty TNHH In 3TF</p>
            <div class="space-y-2 text-sm text-purple-200">
                <div class="flex items-start gap-2"><span>📍</span><span>Địa chỉ: {{ $setting->address ?? '' }}</span></div>
                <div class="flex items-center gap-2"><span>📞</span><span>Hotline: {{ $setting->phone ?? '' }}</span></div>
                <div class="flex items-center gap-2"><span>✉️</span><span>Email: {{ $setting->send_email ?? '' }}</span></div>
                <div class="flex items-center gap-2"><span>🌐</span><span>Website: https://inbat3tf.com/</span></div>
            </div>
        </div>

        <!-- Col 2: Về chúng tôi -->
        <div>
            <h3 class="font-bold uppercase text-white mb-3 tracking-wide">Về chúng tôi</h3>
            <div class="w-8 h-0.5 bg-orange-500 mb-4"></div>
            <ul class="space-y-2 text-sm text-purple-200">
                <li><a href="#" onclick="scrollToSection('ve-chung-toi')" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Về chúng tôi</a></li>
                <li><a href="#" onclick="scrollToSection('san-pham')" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Sản phẩm</a></li>
                <li><a href="#" onclick="scrollToSection('bao-gia')" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Báo giá</a></li>
                <li><a href="#" onclick="scrollToSection('uu-dai')" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Ưu đãi</a></li>
                <li><a href="#" onclick="scrollToSection('ho-tro')" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Hỗ trợ</a></li>
                <li><a href="#" onclick="scrollToSection('cam-ket')" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Cam kết</a></li>
                <li><a href="#" class="hover:text-orange-400 flex items-center gap-2"><span class="text-orange-400">➤</span> Dự án</a></li>
            </ul>
        </div>

        <!-- Col 3: Dịch vụ nổi bật -->
        <div>
            <h3 class="font-bold uppercase text-white mb-3 tracking-wide">Dịch vụ nổi bật</h3>
            <div class="w-8 h-0.5 bg-orange-500 mb-4"></div>
            <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm text-purple-200">
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In UV</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In Canvas</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In Bạt giá rẻ</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In Mica</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In Decal</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In Bạt 3M</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In UV Cuộn</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> Cắt Mica</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In Fomex</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> In UV phẳng</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> Tráng gương</a>
                <a href="#" class="hover:text-orange-400 flex items-center gap-1"><span class="text-orange-400">➤</span> Dán tường</a>
            </div>
        </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t border-purple-700 pt-4">
        <div class="flex flex-wrap justify-center gap-4 text-xs text-purple-300 mb-2 uppercase">
            <a href="#" class="hover:text-orange-400">Về chúng tôi</a>
            <a href="#" class="hover:text-orange-400">Sản phẩm</a>
            <a href="#" class="hover:text-orange-400">Báo giá</a>
            <a href="#" class="hover:text-orange-400">Ưu đãi</a>
            <a href="#" class="hover:text-orange-400">Hỗ trợ</a>
            <a href="#" class="hover:text-orange-400">Cam kết</a>
            <a href="#" class="hover:text-orange-400">Dự án</a>
            <a href="#" class="hover:text-orange-400">Tư vấn</a>
        </div>
        <p class="text-center text-xs text-purple-400">Copyright © 2008 – 2025 | In Bạt Quảng Cáo – Thiết kế Web & Vận hành bởi CÔNG TY 3TF</p>
    </div>
</footer>

<!-- Floating buttons + Hỗ trợ 24/7 -->
<div class="fixed bottom-6 left-4 z-50 flex flex-col gap-4">
    <!-- Zalo -->
    <a href="https://zalo.me/{{ $setting->zalo }}" target="_blank"
       class="relative w-12 h-12 rounded-full flex items-center justify-center shadow-xl pulse-blue"
       style="background:#0068ff;" title="Zalo">
        <img src="/icons8-zalo.svg" class="w-7 h-7" alt="Zalo">
    </a>

    <!-- Phone -->
    <a href="tel:{{ $setting->phone }}"
       class="relative w-12 h-12 bg-red-500 rounded-full flex items-center justify-center shadow-xl pulse-red" title="Gọi ngay">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
    </a>
</div>

<!-- Hỗ trợ 24/7 bottom right -->
<div class="fixed bottom-6 right-4 z-50">
    <a href="tel:{{ $setting->phone }}" onclick="openPopup(); return false;"
       class="flex items-center gap-2 bg-red-500 text-white text-sm font-semibold px-4 py-2 rounded-full shadow-lg float" style="animation-delay:.6s">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
        Hỗ trợ 24/7
    </a>
</div>

<!-- Popup tư vấn báo giá -->
<div id="popup-tuvan" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg mx-4 p-8 relative popup-box">
        <button onclick="closePopup()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl leading-none">&times;</button>
        <h1 class="text-2xl md:text-3xl font-bold text-center text-[#5b2d8e] uppercase mb-2">Đăng ký nhận tư vấn</h1>
        <p class="text-center text-gray-600 text-sm mb-6">Xưởng cung cấp In Bạt Quảng Cáo lớn nhất miền Bắc!</p>

        <form id="form-tuvan" class="flex flex-col gap-4">
            @csrf
            <input type="text" name="name" placeholder="Tên tổ chức/ cá nhân ..."
                class="w-full px-4 py-3 border border-gray-200 rounded-lg text-gray-700 text-sm outline-none focus:border-[#5b2d8e]" required>
            <input type="tel" name="phone" placeholder="Số điện thoại ..."
                class="w-full px-4 py-3 border border-gray-200 rounded-lg text-gray-700 text-sm outline-none focus:border-[#5b2d8e]" required>
            <input type="email" name="email" placeholder="Địa chỉ email ..."
                class="w-full px-4 py-3 border border-gray-200 rounded-lg text-gray-700 text-sm outline-none focus:border-[#5b2d8e]">
            <textarea name="note" rows="4" placeholder="Ghi chú dịch vụ cần tư vấn"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg text-gray-700 text-sm outline-none resize-none focus:border-[#5b2d8e]"></textarea>
            <div id="popup-msg" class="hidden text-center text-green-600 text-sm font-semibold">Gửi yêu cầu thành công! Chúng tôi sẽ liên hệ sớm.</div>
            <button type="submit"
                class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-full transition mx-auto uppercase tracking-wide">
                Gửi yêu cầu
            </button>
        </form>
    </div>
</div>

@stack('scripts')

<script>
    function openPopup() {
        const popup = document.getElementById('popup-tuvan');
        const box = popup.querySelector('.popup-box');
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        box.classList.remove('popup-leave');
        box.classList.add('popup-enter');
    }
    function closePopup() {
        const popup = document.getElementById('popup-tuvan');
        const box = popup.querySelector('.popup-box');
        box.classList.remove('popup-enter');
        box.classList.add('popup-leave');
        setTimeout(() => {
            popup.classList.add('hidden');
            popup.classList.remove('flex');
        }, 200);
    }

    // Submit form popup
    document.getElementById('form-tuvan').addEventListener('submit', async function(e) {
        e.preventDefault();
        const btn = this.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.textContent = 'Đang gửi...';
        const form = e.target;
        const data = new FormData(form);
        const res = await fetch('/consultation', { method: 'POST', body: data });
        const json = await res.json();
        if (json.success) {
            form.reset();
            document.getElementById('popup-msg').classList.remove('hidden');
            setTimeout(() => {
                closePopup();
                document.getElementById('popup-msg').classList.add('hidden');
                btn.disabled = false;
                btn.textContent = 'Gửi yêu cầu';
            }, 2000);
        } else {
            btn.disabled = false;
            btn.textContent = 'Gửi yêu cầu';
        }
    });

    // Đóng popup khi click ngoài
    document.getElementById('popup-tuvan').addEventListener('click', function(e) {
        if (e.target === this) closePopup();
    });
    function updateBodyPadding() {
        document.body.style.paddingTop = document.querySelector('header').offsetHeight + 'px';
    }
    updateBodyPadding();
    window.addEventListener('resize', updateBodyPadding);

    function openSidebar() {
        document.getElementById('sidebar').classList.remove('-translate-x-full');
        document.getElementById('overlay').classList.remove('hidden');
    }
    function closeSidebar() {
        document.getElementById('sidebar').classList.add('-translate-x-full');
        document.getElementById('overlay').classList.add('hidden');
    }

    function scrollToSection(id) {
        event.preventDefault();
        if (window.location.pathname !== '/') {
            window.location.href = '/#' + id;
            return;
        }
        const el = document.getElementById(id);
        if (!el) return;
        const offset = document.querySelector('header').offsetHeight;
        window.scrollTo({ top: el.offsetTop - offset, behavior: 'smooth' });
        closeSidebar();
        const header = document.querySelector('header');
        header.classList.add('hide');
        header.classList.add('scrolled');
        hasAnimated = true;
        clearTimeout(showTimer);
        showTimer = setTimeout(() => { header.classList.remove('hide'); }, 600);
    }

    // Sticky header
    const header = document.querySelector('header');
    let lastScroll = 0;
    let hasAnimated = false;
    let showTimer = null;

    window.addEventListener('scroll', () => {
        const current = window.scrollY;
        if (!hasAnimated && current > lastScroll && current > 80) {
            header.classList.add('hide');
            header.classList.add('scrolled');
            hasAnimated = true;
            clearTimeout(showTimer);
            showTimer = setTimeout(() => { header.classList.remove('hide'); }, 600);
        } else if (current > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
            hasAnimated = false;
        }
        lastScroll = current;
    });
</script>
</body>
</html>
