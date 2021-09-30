@extends('layouts/application')

@section('body')
<header class="flex justify-between">
    <h1 class="text-6xl font-thin mb-4">商品</h1>
    <div>購物車 (0)</div>
</header>

<section class="product">
    <img src="{{ asset('images/cat.jpg') }}" alt="肥肥" class="product-image">
    <div class="flex flex-col">
        <div class="product-detail">
            <h2 class="mb-2">{{ $title }}</h2>
            <p class="my-2">{{ $subTitle }}</p>
            數量：
            <div class="product-amount">
                <button class="amount-btn">-</button>
                <input type="number" class="amount-input" value="1" min="1">
                <button class="amount-btn">+</button>
            </div>
            <p class="my-3">單價：{{ $price }} 元，小計 {{ $price }} 元</p>
            <p class="my-3">{{ $description }}</p>
        </div>
        <button class="chart-btn">加至購物車</button>
    </div>
</section>
@endsection
