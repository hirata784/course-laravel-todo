@extends('layouts.app')

<!-- 本番用のapp.blade.php リンク先を変更している。注意 -->
<!-- <a class="header-nav__link" href="/practice/categories">カテゴリ一覧</a> -->

@section('css')
<link rel="stylesheet" href="{{ asset('css/practice/category.css') }}">
@endsection('css')

@section('content')
<!-- 成功メッセージ -->
<div class="alert">
    <div class="alert_inner">
        <div class="alert_success">カテゴリを削除しました</div>
    </div>
</div>

<!-- テキストボックスと作成ボタン -->
<form class="form">
    <div class="form_inner">
        <input type="text" class="create_txt">
        <input type="submit" value="作成" class="create_btn">
    </div>
</form>

<!-- カテゴリ編集欄 -->
<table class="table_category">
    <tr>
        <th class="category">category</th>
    </tr>
    <tr>
        <td>
            <form action="/">
                <input type="text" class="table_category_txt" value="category1"></input>
        </td>
        <td class="cell_btn">
            <button type="submit" class="update btn">更新</button>
        </td>
        </form>

        <form action="/">
            <td class="cell_btn">
                <button type="submit" class="delete btn">削除</button>
            </td>
        </form>
    </tr>

    <tr>
        <td>
            <form action="/">
                <input type="text" class="table_category_txt" value="category2"></input>
        </td>
        <td class="cell_btn">
            <button type="submit" class="update btn">更新</button>
        </td>
        </form>

        <form action="/">
            <td class="cell_btn">
                <button type="submit" class="delete btn">削除</button>
            </td>
        </form>
    </tr>
</table>
@endsection('content')