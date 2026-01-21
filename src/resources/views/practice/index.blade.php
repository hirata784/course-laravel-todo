@extends('layouts.practice.app')
<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}"> -->
@section('css')
<link rel="stylesheet" href="{{ asset('css/practice/index.css')}}">
@endsection('css')

<!-- <title>Document</title>
</head>

<body>
    <header>
        <div class="header__inner">
            <a class="header__logo" href="/">Todo</a>
        </div>
    </header> -->


@section('result')
<!-- 処理成功時 -->
<div class="success">
    <div class="success__inner">
        <div class="success__logo">Todoを作成しました</div>
    </div>
</div>
@endsection('result')


<!-- <main>
        <form class="form">
            @csrf
            <div class="input">
                <input class="input__txt" type="text">
                <button class="input__button" type="submit">作成</button>
            </div>
        </form>

        <p class="Todo">Todo</p>
        <div class="item">
            <form class="item__inner">
                @csrf
                <input class="item__inner__value" type="text" value="test" readonly></input>
                <div class="item__inner__button">
                    <button class="item__inner__button__update">更新</button>
                    <button class="item__inner__button__delete">削除</button>
                </div>
            </form>
        </div>

        <div class="item">
            <form class="item__inner">
                @csrf
                <input class="item__inner__value" type="text" value="test2" readonly></input>
                <div class="item__inner__button">
                    <button class="item__inner__button__update">更新</button>
                    <button class="item__inner__button__delete">削除</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html> -->