@extends('layouts.default')
@section('contents')
<link rel="stylesheet" href="{{ asset('css\admin.css') }}">
<div class="admin">
    <h1>管理者画面</h1>
    <div>
        <div clas="manager_add">
            <form action="{{ route('manager.add') }}" method="POST">
            @csrf
                <div>店舗名：
                    <select name="shop_name">
                        @foreach($shops as $shop)
                        <option value="{{ $shop['id'] }}">{{ $shop['name']  }}</option>
                        @endforeach
                    </select>
                </div>
                <div>店舗管理者名：
                    <input type="text" name="manager_name">
                </div>
                <div>メールアドレス
                    <input type="email" name="email">
                </div>
                <div>パスワード
                    <input type="password" name="password">
                </div>
                <div class="button"><button>追加</button></div>
            </form>
        </div>
        <div class="manager_list">
            <h2>店舗管理者一覧</h2>
            <div>
                <table class="manager_list_table">
                    <tr>
                        <th>店舗名</th>
                        <th>店舗管理者名</th>
                    </tr>
                    @foreach($managers as $manager)
                    <tr>
                        <td>{{ $manager['shop']['name'] }}</td>
                        <td>{{ $manager['name'] }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection