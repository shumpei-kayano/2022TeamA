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

//新規登録
Route::get('person/add', 'PersonController@add');

//ホーム
Route::POST('person/index', 'PersonController@create');

Route::get('person/index', 'PersonController@home');
Route::get('person/index', 'PersonController@good');

//アカウント
Route::get('account/index', 'PersonController@show');
Route::get('account/index', 'PersonController@limit');
Route::get('account/set', 'AccountController@set');


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
Route::get('store/index', 'CouponController@store');


//近所のおすすめスポット
Route::get('spot/index', 'CouponConttroller@spot');

//クチコミ
Route::get('review/person', 'AccountController@update');
// Route::get('review/person', 'AccountController@delete');
// Route::get('review/person', 'AccountController@remove');

//クチコミ編集
Route::get('review/edit', 'AccountController@edit');

//いいね一覧
Route::get('review/good', 'AccountController@show');
Route::get('review/good', 'AccountController@good');


//ガチャ
Route::get('gacha/index', 'GachaController@see');
Route::get('gacha/view', 'GachaController@view');


//ガチャ演出
Route::get('gacha/staging', 'GachaController@play');
Route::get('gacha/staging', 'GachaController@stag');

//クーポン
Route::get('coupon/index', 'GachaController@get');

Route::get('coupon/index', 'CouponController@see');
Route::get('coupon/index', 'CouponController@caution');
Route::post('coupon/index', 'CouponController@use');
Route::post('coupon/index', 'CouponController@review');


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
Route::get('post/index', 'CouponController@view');
Route::post('post/index', 'CouponController@post');

//バッジ
Route::get('badge/index','BadgeController@see');


//管理者ログイン
Route::get('welcome/admin', 'AdminController@watch');
Route::get('welcome/admin', 'AdminController@in');

//店舗情報管理
Route::get('store/admin', 'AdminController@enter');
Route::get('store/admin', 'AdminController@show');
Route::get('store/admin', 'AdminController@edit');
Route::get('store/admin', 'AdminController@update');

//クーポン管理
Route::get('coupon/admin', 'AdminController@look');
Route::get('coupon/admin', 'AdminController@see');
Route::get('coupon/admin', 'AdminController@rewrite');
Route::get('coupon/admin', 'AdminController@set');
Route::get('coupon/admin', 'AdminController@add');
Route::get('coupon/admin', 'AdminController@create');

//クチコミ管理
Route::get('review/admin','AdminContoroller@view');

//モーダルテスト
Route::get('modal', function () {
    return view('modal');
});
