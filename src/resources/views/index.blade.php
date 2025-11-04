@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="shopping__alert">
    @if(session('message'))
    <div class="shopping__alert--success">
        {{ session('message') }}
    </div>
    @endif
</div>
@if ($errors->any())
<div class="shopiing__alert--danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/shopping-lists" method="POST">
    @csrf 
    <div class="shopping-top">
        <div class="top-box">
            <h2 class="top-box__title">買うもの</h2>
            <input class="top-box__title-enter" name="content" placeholder="入力してください" value="{{ old('content') }}" />
        </div>
        <div class="top-box">
            <h2 class="top-box__titel">個数</h2>
            <select class="top-box__select-box" name="quantity" id="quantity" value="{{ old('quantity') }}" >
                @foreach (range(1, 10) as $num)
                <option value="{{ $num }}">{{ $num }}個</option>
                @endforeach
            </select>
        </div>
        <div class="top-box">
            <!-- 空白 -->
        </div>
        <div class="top-box">
            <button class="top-box__register" type="submit">登録</button>
        </div>
    </div>
</form>

<div class="shopping-content">
    <div class="content-box">
        <div class="content-box__item">
            <div class="content-box__item-title">買い物リスト</div>            
        </div>
    </div>
    <div class="content-box">
        <div class="content-box__item">
            <div class="content-box__item-title">
                個数
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="content-box__item">
            <div class="content-box__item-title">
                金額
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="content-box__item"> 

        </div>
    </div>
</div>
@foreach($shoppings as $shopping)
<form action="/shopping-lists/update" method="POSt">
    @method('PATCH')
    @csrf 
    <input type="hidden" name="id" value="{{ $shopping['id'] }}">
    <div class="shopping-content">
        <div class="content-box">
            <div class="content-box__item">
                <input class="content-checkbox" type="checkbox"> 
                <input class="content-text" type="text" name="content" value="{{ $shopping->content }}">
            </div>        
        </div>
        <div class="content-box">
            <div class="content-box__item">
                <input class="content-text" type="text" name="quantity" value="{{ $shopping->quantity }}">
                個
            </div>
        </div>
        <div class="content-box">
            <div class="content-box__item">
                <input class="content-text" type="text" name="price" value="{{ $shopping->price ?? '' }}">
                円 
            </div>
        </div>
        <div class="content-box">
            <div class="content-box__item">
                <div class="content-box__button">
                    <button class="content-box__update-button" type="submit">更新</button>
                    <!-- <button formaction="/shopping-lists/delete" formmethod="POSt" class="content-box__delete-button" type="submit">
                        @method('DELETE')
                        @csrf 
                        削除
                    </button> -->
                </div>
            </div>
        </div>
    </div>
</form>

@endforeach
@endsection

    

        