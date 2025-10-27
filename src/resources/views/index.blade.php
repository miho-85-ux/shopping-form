@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="shopping-top">
    <div class="top-box">
        <h2 class="top-box__title">買うもの</h2>
        <form class="top-box__title-text" action="">
            <input class="top-box__title-enter" name="text" value="入力してください">
        </form>
    </div>
    <div class="top-box">
        <h2 class="top-box__titel">個数</h2>
        <form >
            <select class="top-box__select-box" name="quantity" id="quantity">
                @foreach (range(1, 10) as $num)
                <option value="{{ $num }}">{{ $num }}個</option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="top-box">
        <!-- 空白 -->
    </div>
    <div class="top-box">
        <button class="top-box__register">登録</button>
    </div>
</div>

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
<div class="shopping-content">
    <div class="content-box">
        <div class="content-box__item">
            <form action="">
                <input class="content-checkbox" type="checkbox"> 
                <input class="content-text" type="text" name="content" value="test">
            </form>
        </div>        
    </div>
    <div class="content-box">
        <div class="content-box__item">
            <form action="">
                <input class="content-text" type="text" name="content" value="test">
                個
            </form>
        </div>
    </div>
    <div class="content-box">
        <div class="content-box__item">
            <form action="">
                <input class="content-text" type="text" name="content" value="test">
                円 
            </form>
        </div>
    </div>
    <div class="content-box">
        <div class="content-box__item">
            <div class="content-box__button">
                <button class="content-box__update-button" type="submit">更新</button>
                <button class="content-box__delete-button" type="submit">削除</button>
            </div>
        </div>
    </div>
</div>
@endsection