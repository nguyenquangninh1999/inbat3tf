@extends('layouts.app')

@section('content')

<!-- Carousel -->
<div class="relative w-full overflow-hidden" style="height: 600px;">

    <!-- Slides -->
    <div id="carousel" class="flex h-full transition-transform duration-700 ease-in-out">

        <!-- Slide 1 -->
        <div class="relative min-w-full h-full">
            <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=1600&q=80" class="w-full h-full object-cover" alt="slide 1">
        </div>

        <!-- Slide 2 -->
        <div class="relative min-w-full h-full">
            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1600&q=80" class="w-full h-full object-cover" alt="slide 2">
        </div>

        <!-- Slide 3 -->
        <div class="relative min-w-full h-full">
            <img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=1600&q=80" class="w-full h-full object-cover" alt="slide 3">
        </div>

    </div>

    <!-- Prev button -->
    <button onclick="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full border border-white/60 text-white flex items-center justify-center hover:bg-white/20 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>

    <!-- Next button -->
    <button onclick="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full border border-white/60 text-white flex items-center justify-center hover:bg-white/20 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>

    <!-- Dots -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-2" id="dots"></div>

</div>

<!-- About section -->
<section class="py-12 px-4 md:px-12 overflow-visible">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- Left: Text -->
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
                Xưởng In Bạt Quảng Cáo <br> lớn nhất miền Bắc
            </h2>
            <p class="text-sm text-gray-600 mb-5 leading-relaxed">
                <span class="font-semibold uppercase">Xưởng in bạt quảng cáo – Nhà máy in BC</span> được thành lập năm 2008 bởi những chuyên gia, họa sỹ mỹ thuật công nghiệp đầy tâm huyết. Chúng tôi quan tâm chăm sóc hình ảnh thương hiệu của quý khách bởi chúng tôi hiểu rằng thương hiệu là tài sản giá trị nhất, quý khách có được sau bao nhiêu khó khăn gây dựng trên thị trường.
            </p>

            <!-- Features grid -->
            <div class="grid grid-cols-2 gap-2 mb-6 text-sm text-gray-700">
                <div class="flex items-center gap-2"><span class="text-orange-500">✔</span> Sản phẩm in sắc nét</div>
                <div class="flex items-center gap-2"><span class="text-orange-500">✔</span> Chất lượng kiểm định</div>
                <div class="flex items-center gap-2"><span class="text-orange-500">✔</span> Cam kết giá tốt nhất</div>
                <div class="flex items-center gap-2"><span class="text-orange-500">✔</span> Nhiều năm kinh nghiệm</div>
                <div class="flex items-center gap-2"><span class="text-orange-500">✔</span> Hỗ trợ khách hàng 24/7</div>
                <div class="flex items-center gap-2"><span class="text-orange-500">✔</span> Xưởng in quy mô lớn</div>
            </div>

            <!-- CTA buttons -->
            <div class="grid grid-cols-2 gap-3">
                <a href="#" class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-3 hover:shadow transition">
                    <div class="w-9 h-9 bg-orange-500 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="font-bold text-gray-800 text-xs leading-tight">Tư vấn báo giá</div>
                        <div class="text-xs text-orange-500 leading-tight">Tư vấn miễn phí</div>
                    </div>
                </a>
                <a href="tel:0977898283" class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-3 hover:shadow transition">
                    <div class="w-9 h-9 bg-orange-500 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5C3.9 4 3 4.9 3 6v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="font-bold text-gray-800 text-xs leading-tight">0977.898.283</div>
                        <div class="text-xs text-orange-500 leading-tight">Hotline 24/7</div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Right: Image + badge -->
        <div class="relative" style="overflow: visible;">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80" alt="Xưởng in" class="w-full rounded-lg object-cover" style="height: 340px;">

            <!-- Badge đè lên góc dưới trái ảnh, dịch sang trái 50px -->
            <div class="absolute float text-white rounded-xl shadow-lg hidden md:flex items-center px-6 py-4 gap-6" style="bottom: 64px; left: -100px; min-width: 220px; background: linear-gradient(to right, #d946a8, #9333ea, #5b21b6); font-family: 'Poppins', sans-serif !important;">
                <div>
                    <div class="text-2xl font-bold">15+</div>
                    <div class="text-sm font-normal">Năm</div>
                </div>
                <div class="text-base font-semibold">Kinh nghiệm</div>
            </div>
        </div>

    </div>
</section>

<!-- Products section -->
<section id="san-pham" class="py-12 px-4 md:px-12 bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-2xl md:text-3xl font-bold text-orange-500">Nhà máy in Bạt Quảng Cáo</h1>
            <h1 class="text-gray-800 font-semibold mt-1 text-xl">Khẳng định đẳng cấp, vươn tầm thương hiệu</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach([
                'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80',
                'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=600&q=80',
                'https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=600&q=80',
                'https://images.unsplash.com/photo-1448375240586-882707db888b?w=600&q=80',
                'https://images.unsplash.com/photo-1562408590-e32931084e23?w=600&q=80',
                'https://images.unsplash.com/photo-1524234107056-1c1f48f64ab8?w=600&q=80',
                'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&q=80',
                'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=80',
            ] as $img)
            <div class="overflow-hidden rounded-xl group cursor-pointer aspect-square">
                <img src="{{ $img }}" alt="sản phẩm" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    const total = 3;
    let current = 0;
    let timer;

    const carousel = document.getElementById('carousel');
    const dotsContainer = document.getElementById('dots');

    // Build dots
    for (let i = 0; i < total; i++) {
        const dot = document.createElement('button');
        dot.className = 'w-2.5 h-2.5 rounded-full bg-white/50 transition';
        dot.onclick = () => goTo(i);
        dotsContainer.appendChild(dot);
    }

    function updateDots() {
        [...dotsContainer.children].forEach((d, i) => {
            d.className = i === current
                ? 'w-2.5 h-2.5 rounded-full bg-white transition'
                : 'w-2.5 h-2.5 rounded-full bg-white/50 transition';
        });
    }

    function goTo(index) {
        current = (index + total) % total;
        carousel.style.transform = `translateX(-${current * 100}%)`;
        updateDots();
        resetTimer();
    }

    function nextSlide() { goTo(current + 1); }
    function prevSlide() { goTo(current - 1); }

    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(nextSlide, 5000);
    }

    updateDots();
    resetTimer();
</script>
@endpush
