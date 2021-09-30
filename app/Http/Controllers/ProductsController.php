<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($id) {
        return view('products.show', [
            'id' => 'THANKYOU9527',
            'title' => '小貓兩隻',
            'subTitle' => '一隻很胖，一隻很傲嬌，請以認養代替購買！',
            'description' => '都是浪浪，已經跟工程師貓奴們相處好幾年，可愛好相處，愛吃但不黏人，各位貓奴們走過路過不要錯過喔',
            'price' => 520
        ]);
    }
}
