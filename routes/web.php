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
Route::get('welcome/index', 'PersonController@out');

//ログインエラー
Route::get('welcome/error', function () {
    return view('welcome.error');
});

//新規登録
Route::get('person/add', 'PersonController@add');

//ホーム
Route::POST('person/index', 'PersonController@create');

//アカウント
Route::get('account/index', 'PersonController@show');

//アカウント設定
Route::get('account/setting', 'AccountController@set');

//新規登録確認
Route::get('person/addcheck', function () {
    return view('person.addcheck');
});


//お知らせ
Route::get('notice/index', 'NoticeController@show');

//各店舗
Route::get('tourist/index', 'AccountController@spot');

//店舗詳細
Route::get('store/index', 'AccountController@store');

//近所のおすすめスポット
Route::get('spot/index', function () {
    return view('spot.index');
});

//クチコミ
Route::get('review/person', 'AccountController@update');

//クチコミ編集
Route::get('review/edit', 'AccountController@edit');

//いいね一覧
Route::get('review/good', 'AccountController@show');

//ガチャ
Route::get('gacha/index', 'GachaController@see');

//ガチャ演出
Route::get('gacha/staging', 'GachaController@play');

//ガチャエラー
Route::get('gacha/error', function () {
    return view('gacha.error');
});

//クーポン
Route::get('coupon/index', 'GachaController@get');

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

//モーダルテスト
Route::get('modal', function () {
    return view('modal');
});
