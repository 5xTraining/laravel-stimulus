@extends('layouts/application')

@section('body')
<h1 class="text-6xl font-thin mb-4">會員註冊</h1>

<form action="/users" method="post" data-controller="register">
    <input type="text" class="demo mr-2" data-register-target="username">
    <button class="demo" data-action="register#submitData">註冊</button>

    <!-- modal -->
    <div class="modal-form" data-register-target="modal" data-controller="modal">
        <div class="modal-form-dialog">
            <div class="px-6 py-8 h-full">
                <header class="modal-form-header">
                    <h3 class="text-4xl font-thin">哈囉？</h3>
                    <button class="close-btn" data-action="modal#close">X</button>
                </header>
                <div>
                    <p class="text-lg"> 請填寫會員資訊，不然...我好像也不能拿你怎樣！ </p>
                </div>
            </div>
            <footer class="modal-form-footer">
                <button class="close-text-btn" data-action="modal#close">我知道了</button>
            </footer>
        </div>
    </div>
    <!-- modal -->
</form>

@endsection
