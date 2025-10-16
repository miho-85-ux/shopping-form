@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="shopping-content">
        <div class="shopping-content__title">
            <h2 class="create-title">買うもの</h2>
            <form class="create-form">
                    <input class="create-text" type="text"  name="text">
            </form>
        </div>
        <div class="shopping-content__title">
            <h2 class="create-title">個数</h2>
            <form class="create-form__select-box">
                <select name="quantity" id="quantity">
                    @foreach (range(1, 10) as $num)
                    <option value="{{ $num }}">{{ $num }}個</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit"  type="submit">登録</button>
        </div>
    </div>

    <div class="shopping-table">
        <table class="shopping-table__inner">
            <tr class="shopping-table__row">
                <th class="shopping-table__header">
                    <span class="shopping-table__header-span">買い物リスト</span>
                    <span class="shopping-table__header-span">個数</span>
                    <span class="shoppind-table__header__span">金額</span>
                </th>
            </tr>
            <tr class="shopping-table__row">

        </table>
        <div>
            <h2></h2>
        </div>
    </div>

@endsection