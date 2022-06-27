# RESE

## 1.概要
- ある企業のグループ会社の飲食店予約サービス。

## 2.制作背景・目的
- 外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持ちたい。

## 3.使用画面のイメージ
　会員登録ページ
<img width="1440" alt="rese registration" src="https://user-images.githubusercontent.com/98631346/175754715-34bb97f9-2cf1-405d-9f12-1340765226eb.png">

　サンクスページ
<img width="1440" alt="rese thanks" src="https://user-images.githubusercontent.com/98631346/175754755-65260b5e-eeac-400b-9154-092e33e7f4bd.png">

　店舗一覧ページ
<img width="1440" alt="rese home" src="https://user-images.githubusercontent.com/98631346/175754773-0bb43b54-a746-4ac2-ba2c-10f962275f8c.png">

　Area検索
<img width="1440" alt="rese areaSearch" src="https://user-images.githubusercontent.com/98631346/175754790-f8711397-aca2-4295-9f2f-62e6f542eb9f.png">

　Genre検索
<img width="1440" alt="rese genreSearch" src="https://user-images.githubusercontent.com/98631346/175754806-083b614a-a06b-4756-b31e-739f300c4b44.png">

　ログインページ
<img width="1440" alt="rese login" src="https://user-images.githubusercontent.com/98631346/175754820-6548c986-267f-4881-9796-532c6ce9b532.png">

　お気に入り追加
<img width="1440" alt="rese favorite" src="https://user-images.githubusercontent.com/98631346/175754824-9a2fd716-9fa7-4fb9-88a9-653eaf8545d3.png">

　店舗詳細、予約ページ
<img width="1440" alt="rese detail" src="https://user-images.githubusercontent.com/98631346/175754843-676003e9-02e0-4a4b-a2f8-53d137f4cf54.png">

　予約完了ページ
<img width="1440" alt="rese done" src="https://user-images.githubusercontent.com/98631346/175754864-ac677ecb-6e25-4f1a-bc81-e8b08e2c085f.png">

　マイページ
<img width="1440" alt="rese mypage" src="https://user-images.githubusercontent.com/98631346/175754874-4b6dd9c4-701d-4946-9277-bad5ce87c0ab.png">

　メニュー1
<img width="1440" alt="rese menu1" src="https://user-images.githubusercontent.com/98631346/175754480-c6389398-c10f-48c2-8c7c-a1e0a98259ca.png">

　メニュー2
<img width="1440" alt="rese menu2" src="https://user-images.githubusercontent.com/98631346/175754907-e2c2540f-3ec1-484c-a647-5aeb417e6565.png">


## 4.使用技術、バージョン

- フロントエンド
  - HTML / CSS
  - jQuery 3.5.1

- バックエンド
  - PHP 8.1.7
  - Laravel 8.83.12

- データベース
  - MySQL 5.7.34

## 5.環境構築手順

1.GitHubよりダウンロード

 $　git clone [https://github.com/jing-bay/rese.nihira.git`](https://github.com/yakushido/RESE.git)

2.Dockerのコンテナを作成、起動

 $ docker compose up
  
3.マイグレーションの実行

 $ docker-compose exec app bash
 $ php artisan migrate

## 6.機能一覧

- 会員登録
- ログイン
- ログアウト
- ユーザー情報取得
- ユーザー飲食店お気に入り一覧取得
- ユーザー飲食店予約情報取得
- 飲食店一覧取得
- 飲食店詳細取得
- 飲食店お気に入り追加
- 飲食店お気に入り削除
- 飲食店予約情報追加
- 飲食店予約情報削除
- エリアで検索する
- ジャンルで検索する
- 店名で検索する
