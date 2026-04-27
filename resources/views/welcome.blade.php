@extends('layouts.app')

@section('content')

<!-- Carousel -->
<div class="relative w-full overflow-hidden" style="height: 390px; " id="carousel-wrapper">

    <!-- Slides -->
    <div id="carousel" class="flex h-full transition-transform duration-700 ease-in-out">

        <!-- Slide 1 -->
        <div class="relative min-w-full h-full">
            <picture>
                <source media="(max-width: 767px)" srcset="/mb2.jpg">
                <img src="/sl03.jpg" class="w-full h-full object-cover" alt="slide 1">
            </picture>
        </div>

        <!-- Slide 2 -->
        <div class="relative min-w-full h-full">
            <picture>
                <source media="(max-width: 767px)" srcset="/mb4.jpg">
                <img src="/sl04.jpg" class="w-full h-full object-cover" alt="slide 2">
            </picture>
        </div>

        <!-- Slide 3 -->
        <div class="relative min-w-full h-full">
            <picture>
                <source media="(max-width: 767px)" srcset="/kh-1.png">
                <img src="/sl05.jpg" class="w-full h-full object-cover" alt="slide 3">
            </picture>
        </div>

    </div>

    <!-- Prev button -->
    <button onclick="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full border border-white/60 text-white hidden md:flex items-center justify-center hover:bg-white/20 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>

    <!-- Next button -->
    <button onclick="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full border border-white/60 text-white hidden md:flex items-center justify-center hover:bg-white/20 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>

    <!-- Dots -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-2" id="dots"></div>

</div>

<!-- About section -->
<section id="ve-chung-toi" class="py-12 px-4 md:px-12 overflow-visible">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- Left: Text -->
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
                Xưởng In Bạt Quảng Cáo Lớn Nhất Miền Bắc
            </h1>
            <p class="text-sm text-gray-600 mb-5 leading-relaxed">
                <span class="font-semibold uppercase">Xưởng in bạt quảng cáo – Nhà máy in 3TF</span> được thành lập năm 2008 bởi những chuyên gia, họa sỹ mỹ thuật công nghiệp đầy tâm huyết. Chúng tôi quan tâm chăm sóc hình ảnh thương hiệu của quý khách bởi chúng tôi hiểu rằng thương hiệu là tài sản giá trị nhất, quý khách có được sau bao nhiêu khó khăn gây dựng trên thị trường.
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
                <a href="#" onclick="openPopup(); return false;" class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-3 hover:shadow transition">
                    <div class="w-9 h-9 bg-orange-500 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="font-bold text-gray-800 text-xs leading-tight">Tư vấn báo giá</div>
                        <div class="text-xs text-orange-500 leading-tight">Tư vấn miễn phí</div>
                    </div>
                </a>
                <a href="tel:0987654321" class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-3 hover:shadow transition">
                    <div class="w-9 h-9 bg-orange-500 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5C3.9 4 3 4.9 3 6v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="font-bold text-gray-800 text-xs leading-tight">0987654321</div>
                        <div class="text-xs text-orange-500 leading-tight">Hotline 24/7</div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Right: Image + badge -->
        <div class="relative" style="overflow: visible;">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80" alt="Xưởng in" class="w-full rounded-lg object-cover">

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
            <h1 class="text-gray-800 font-semibold mt-1 text-2xl">Khẳng định đẳng cấp, vươn tầm thương hiệu</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach(\App\Models\Product::latest()->take(8)->get() as $product)
            <a href="{{ route('product.show', $product->id) }}" class="overflow-hidden rounded-xl group cursor-pointer aspect-square block">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                @else
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400 text-sm">{{ $product->name }}</div>
                @endif
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Bảng giá section -->
<section id="bao-gia" class="py-12 px-4 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-8">Bảng giá in Bạt Quảng Cáo lớn nhất Miền Bắc</h1>

        <!-- 2 ảnh bảng giá -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <img src="/z5-2.jpg" alt="Bảng giá In UV" class="w-full rounded-lg border border-gray-200 shadow-sm">
            <img src="/inuv.png" alt="Bảng giá In Mực Dầu" class="w-full rounded-lg border border-gray-200 shadow-sm">
        </div>

        <!-- Slogan -->
        <p class="text-center text-gray-600 italic text-sm md:text-base mb-8">
            "In bạt quảng cáo – Giao hàng nhanh – Cam kết in chuẩn màu sắc nét – Giá tốt nhất thị trường Miền Bắc!"
        </p>

        <!-- CTA buttons -->
        <div class="flex gap-3 justify-center">
            <a href="tel:0987654321" class="flex items-center gap-2 bg-red-500 text-white font-semibold px-4 md:px-6 py-3 rounded-full hover:bg-red-600 transition shadow text-sm md:text-base whitespace-nowrap">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                0987654321
            </a>
            <a href="#" onclick="openPopup(); return false;" class="flex items-center gap-2 bg-orange-500 text-white font-semibold px-4 md:px-6 py-3 rounded-full hover:bg-orange-600 transition shadow text-sm md:text-base whitespace-nowrap">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5C3.9 4 3 4.9 3 6v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                Tư vấn báo giá
            </a>
        </div>
    </div>
</section>

<!-- Khuyến mãi + Form section -->
<section id="uu-dai" class="py-12 px-4 md:px-12 bg-gray-100">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-stretch">

        <!-- Left: Khuyến mãi -->
        <div class="flex flex-col justify-center">
            <h1 class="text-2xl md:text-3xl font-bold uppercase text-gray-900 mb-1 text-center md:text-left">Chương trình khuyến mãi</h1>
            <p class="text-gray-500 mb-6 text-center md:text-left" style="font-size:16px;">Chúng tôi tự hào là nhà cung cấp <span class="font-semibold text-gray-700">In Bạt Quảng Cáo</span> lớn nhất miền Bắc</p>

            <div class="flex flex-col gap-4 flex-1">
                <!-- Item 1 -->
                <div class="flex items-center gap-4 border border-gray-200 rounded-xl p-4 shadow-sm border-l-4 border-l-[#5b2d8e] flex-1">
                    <img src="/icon-4-right.png" class="w-12 h-12 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-gray-800 uppercase text-sm mb-1">01. Ưu đãi giảm giá</div>
                        <p class="text-gray-500 text-sm">Giảm giá lên tới 20% cho khách hàng đặt hàng ngay hôm nay, giảm 10% cho sản phẩm tiếp theo.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="flex items-center gap-4 border border-gray-200 rounded-xl p-4 shadow-sm border-l-4 border-l-[#5b2d8e] flex-1">
                    <img src="/icon-4-right.png" class="w-12 h-12 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-gray-800 uppercase text-sm mb-1">02. Miễn phí thiết kế</div>
                        <p class="text-gray-500 text-sm">Miễn phí thiết kế, không giới hạn số lần điều chỉnh. In trên được nhiều chất liệu, tốc độ in nhanh chóng.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="flex items-center gap-4 border border-gray-200 rounded-xl p-4 shadow-sm border-l-4 border-l-[#5b2d8e] flex-1">
                    <img src="/icon-4-right.png" class="w-12 h-12 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-gray-800 uppercase text-sm mb-1">03. Miễn phí vận chuyển</div>
                        <p class="text-gray-500 text-sm">Giảm 10% tổng đơn hàng khi đặt từ 2 dịch vụ, miễn phí vận chuyển trong bán kính 10km.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Form đăng ký -->
        <div class="bg-[#5b2d8e] rounded-2xl p-8 text-white flex flex-col items-center">
            <h1 class="text-2xl md:text-3xl font-bold uppercase mb-2 text-center">Đăng ký nhận tư vấn</h1>
            <p class="text-purple-200 mb-6 text-center" style="font-size:16px;">Liên hệ ngay với chúng tôi để nhận tư vấn và báo giá tốt nhất.</p>

            <form id="form-dangky" class="flex flex-col gap-4 flex-1 w-full">
                @csrf
                <input type="text" name="name" placeholder="Tên tổ chức/ cá nhân ..."
                    class="w-full px-4 py-3 rounded-lg bg-white text-gray-700 text-sm outline-none">
                <input type="tel" name="phone" placeholder="Số điện thoại ..."
                    class="w-full px-4 py-3 rounded-lg bg-white text-gray-700 text-sm outline-none">
                <input type="email" name="email" placeholder="Địa chỉ email ..."
                    class="w-full px-4 py-3 rounded-lg bg-white text-gray-700 text-sm outline-none">
                <textarea name="note" rows="4" placeholder="Ghi chú dịch vụ cần tư vấn"
                    class="w-full px-4 py-3 rounded-lg bg-white text-gray-700 text-sm outline-none resize-none flex-1"></textarea>
                <div id="dangky-msg" class="hidden text-center text-green-300 text-sm font-semibold">Gửi yêu cầu thành công!</div>
                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-lg transition mx-auto">
                    Gửi yêu cầu
                </button>
            </form>
        </div>

    </div>
</section>

<!-- Hỗ trợ khách hàng section -->
<!-- Hỗ trợ khách hàng section -->
<section id="ho-tro" class="py-12 px-4 md:px-12 bg-[#5b2d8e] relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, #fff 0, #fff 1px, transparent 0, transparent 50%); background-size: 20px 20px;"></div>
    <div class="max-w-7xl mx-auto relative z-10">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-white mb-8">Hỗ trợ khách hàng</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <!-- Hỗ trợ tư vấn -->
            <div class="bg-white rounded-xl p-6">
                <div class="flex items-start gap-4">
                    <img src="/o1.png" class="w-14 h-14 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-[#5b2d8e] text-base mb-2">Hỗ trợ tư vấn</div>
                        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                            <li>Tư vấn 24/24</li>
                            <li>Tư vấn giải pháp chuyên sâu</li>
                            <li>Tư vấn kỹ thuật miễn phí</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bảo hành -->
            <div class="bg-white rounded-xl p-6">
                <div class="flex items-start gap-4">
                    <img src="/o3.png" class="w-14 h-14 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-[#5b2d8e] text-base mb-2">Bảo hành</div>
                        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                            <li>Thời gian bảo hành 24 tháng</li>
                            <li>Quy định bảo hành rõ ràng</li>
                            <li>Quy trình bảo hành chuyên nghiệp</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Vận chuyển -->
            <div class="bg-white rounded-xl p-6">
                <div class="flex items-start gap-4">
                    <img src="/o2.png" class="w-14 h-14 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-[#5b2d8e] text-base mb-2">Vận chuyển</div>
                        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                            <li>Giao hàng đúng tiến độ</li>
                            <li>Nhiều chính sách ưu đãi</li>
                            <li>Miễn phí vận chuyển bán kính 3km</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Chất lượng -->
            <div class="bg-white rounded-xl p-6">
                <div class="flex items-start gap-4">
                    <img src="/o4.png" class="w-14 h-14 shrink-0 object-contain" alt="icon">
                    <div>
                        <div class="font-bold text-[#5b2d8e] text-base mb-2">Chất lượng</div>
                        <ul class="space-y-1 text-sm text-gray-600 list-disc list-inside">
                            <li>Cam kết in ấn chất lượng cao</li>
                            <li>Với giá thành hợp lý nhất</li>
                            <li>Sản phẩm in sắc nét</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA buttons -->
        <div class="flex gap-3 justify-center">
            <a href="tel:0987654321" class="flex items-center gap-2 bg-red-500 text-white font-semibold px-5 py-3 rounded-full hover:bg-red-600 transition shadow text-sm whitespace-nowrap">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                0987654321
            </a>
            <a href="#" onclick="openPopup(); return false;" class="flex items-center gap-2 bg-orange-500 text-white font-semibold px-5 py-3 rounded-full hover:bg-orange-600 transition shadow text-sm whitespace-nowrap">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5C3.9 4 3 4.9 3 6v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
                Yêu cầu tư vấn
            </a>
        </div>
    </div>
</section>

<!-- Cam kết section -->
<section id="cam-ket" class="py-12 px-4 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-3">Cam kết từ chúng tôi</h1>
        <p class="text-center text-gray-500 text-sm mb-8">Chúng tôi cam kết mang đến cho quý khách một dịch vụ in ấn hài lòng nhất, đảm bảo đưa ra những sản phẩm với chất lượng và thẩm mỹ cao nhất.</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-[#5b2d8e] rounded-xl p-6 text-white text-center">
                <img src="/quality-1-400x400-1.png" class="w-16 h-16 mx-auto mb-4 object-contain" alt="icon">
                <div class="font-bold uppercase text-sm mb-3">Chất lượng</div>
                <p class="text-white/80 text-xs leading-relaxed">Chúng tôi luôn đặt chất lượng hàng đầu thỏa mãn yêu cầu của khách hàng.</p>
            </div>
            <div class="bg-gray-900 rounded-xl p-6 text-white text-center">
                <img src="/quality-1-400x400-1.png" class="w-16 h-16 mx-auto mb-4 object-contain" alt="icon">
                <div class="font-bold uppercase text-sm mb-3">Chất liệu</div>
                <p class="text-white/80 text-xs leading-relaxed">Cam kết sử dụng chuẩn 1 loại chất liệu tốt và dòng mực in chính hãng tốt nhất.</p>
            </div>
            <div class="bg-[#5b2d8e] rounded-xl p-6 text-white text-center">
                <img src="/quality-1-400x400-1.png" class="w-16 h-16 mx-auto mb-4 object-contain" alt="icon">
                <div class="font-bold uppercase text-sm mb-3">Độ bền</div>
                <p class="text-white/80 text-xs leading-relaxed">Cam kết tuổi thọ các sản phẩm có thể nên đến 10 năm sử dụng trong nhà, 5 năm ngoài trời.</p>
            </div>
            <div class="bg-gray-900 rounded-xl p-6 text-white text-center">
                <img src="/quality-1-400x400-1.png" class="w-16 h-16 mx-auto mb-4 object-contain" alt="icon">
                <div class="font-bold uppercase text-sm mb-3">Vận chuyển</div>
                <p class="text-white/80 text-xs leading-relaxed">Hư hại, hỏng sản phẩm trong quá trình vận chuyển – hoàn tiền lại 100% cho khách hàng.</p>
            </div>
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

    // Responsive carousel height
    function setCarouselHeight() {
        const el = document.getElementById('carousel-wrapper');
        if (el) el.style.height = window.innerWidth >= 768 ? '730px' : '390px';
    }
    setCarouselHeight();
    window.addEventListener('resize', setCarouselHeight);

    // Submit form đăng ký nhận tư vấn
    document.getElementById('form-dangky').addEventListener('submit', async function(e) {
        e.preventDefault();
        const btn = this.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.textContent = 'Đang gửi...';
        const data = new FormData(this);
        const res = await fetch('/consultation', { method: 'POST', body: data });
        const json = await res.json();
        if (json.success) {
            this.reset();
            const msg = document.getElementById('dangky-msg');
            msg.classList.remove('hidden');
            setTimeout(() => {
                msg.classList.add('hidden');
                btn.disabled = false;
                btn.textContent = 'Gửi yêu cầu';
            }, 3000);
        } else {
            btn.disabled = false;
            btn.textContent = 'Gửi yêu cầu';
        }
    });
</script>
@endpush
