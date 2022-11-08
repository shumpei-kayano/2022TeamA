<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//INDEX
Route::get('/', function () {
    return view('index');
});


//ログイン画面
Route::get('welcome/index', function () {
    return view('welcome.index');
});

//ログインエラー
Route::get('welcome/error', function () {
    return view('welcome.error');
});

//新規登録
Route::get('person/add', function () {
    return view('person.add');
});

//ホーム
Route::get('person/index', function () {
    return view('person.index');
});

//アカウント
Route::get('account/index', function () {
    return view('account.index');
});

//アカウント設定
Route::get('account/setting', function () {
    return view('account.setting');
});

//お知らせ
Route::get('notice/index', function () {
    return view('notice.index');
});

//各店舗
Route::get('tourist/index', function () {
    return view('tourist.index');
});

//店舗詳細
Route::get('store/index', function () {
    return view('store.index');
});

//近所のおすすめスポット
Route::get('spot/index', function () {
    return view('spot.index');
});

//クチコミ
Route::get('review/person', function () {
    return view('review.person');
});

//クチコミ編集
Route::get('review/edit', function () {
    return view('review.edit');
});

//いいね一覧
Route::get('review/good', function () {
    return view('review.good');
});

//ガチャ
Route::get('gacha/index', function () {
    return view('gacha.index');
});

//ガチャ演出
Route::get('gacha/staging', function () {
    return view('gacha.staging');
});

//ガチャエラー
Route::get('gacha/error', function () {
    return view('gacha.error');
});

//クーポン獲得
Route::get('gacha/get', function () {
    return view('gacha.get');
});

//クーポン
Route::get('coupon/index', function () {
    return view('coupon.index');
});

//クーポン確認
Route::get('coupon/confirmation', function () {
    return view('coupon.confirmation');
});

//クーポン使用
Route::get('coupon/use', function () {
    return view('coupon.use');
});

//クーポン使用済み
Route::get('coupon/used', function () {
    return view('coupon.used');
});

//クチコミ投稿
Route::get('post/index', function () {
    return view('post.index');
});

//バッジ
Route::get('badge/index', function () {
    return view('badge.index');
});

//管理者ログイン
Route::get('welcome/admin', function () {
    return view('welcome.admin');
});

//店舗情報管理
Route::get('store/admin', function () {
    return view('store.admin');
});

//クーポン管理
Route::get('coupon/admin', function () {
    return view('coupon.admin');
});

//クチコミ管理
Route::get('review/admin', function () {
    return view('review.admin');
});
