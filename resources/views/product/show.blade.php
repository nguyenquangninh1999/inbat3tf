@extends('layouts.app')

@section('title', $product->name . ' - Nhà Máy In 3TF')
@section('description', strip_tags(substr($product->description ?? '', 0, 160)))
@section('og_image', $product->image ? asset('storage/' . $product->image) : asset('favicon.svg'))

@section('content')
<section class="py-10 px-4 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto">

        <!-- Breadcrumb -->
        <div class="text-sm text-gray-500 mb-6">
            <a href="/" class="hover:text-orange-500">Trang chủ</a>
            <span class="mx-2">/</span>
            <a href="/#san-pham" class="hover:text-orange-500">Sản phẩm</a>
            <span class="mx-2">/</span>
            <span class="text-gray-800">{{ $product->name }}</span>
        </div>

        <!-- Ảnh + Thông tin -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-10">
            <div class="aspect-square overflow-hidden rounded-xl shadow">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                         class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">Chưa có ảnh</div>
                @endif
            </div>

            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">{{ $product->name }}</h1>
                <div class="text-2xl font-bold text-orange-500 mb-4">
                    {{ number_format($product->price, 0, ',', '.') }} ₫
                </div>
                <button onclick="openPopup()" class="bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-full transition">
                    Tư vấn báo giá
                </button>
            </div>
        </div>

        <!-- Mô tả -->
        @if($product->description)
        <div class="mb-10">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Mô tả sản phẩm</h2>
            <div class="text-gray-700 leading-relaxed">
                {!! $product->description !!}
            </div>
        </div>
        @endif

        <!-- Video -->
        @if($product->embed_url)
        <div class="mb-10">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Video sản phẩm</h2>
            <div class="relative w-full" style="padding-bottom: 56.25%;">
                <iframe src="{{ $product->embed_url }}"
                    class="absolute inset-0 w-full h-full rounded-xl"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        @endif

        <!-- Sản phẩm khác -->
        @php $others = \App\Models\Product::where('id', '!=', $product->id)->latest()->take(8)->get(); @endphp
        @if($others->count())
        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4">Sản phẩm khác</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($others as $item)
                <a href="{{ route('product.show', $item->id) }}" class="overflow-hidden rounded-xl group cursor-pointer aspect-square block">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400 text-sm p-2 text-center">{{ $item->name }}</div>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
