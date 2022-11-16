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
Route::get('welcome/index', 'PersonController@out')->name('welcome/index');

//新規登録
Route::get('person/add', 'PersonController@add');

//ホーム
// Route::POST('person/index', 'PersonController@create')->name('person/index');

Route::get('person/index', 'PersonController@home')->name('person/index');
Route::get('person/home', 'PersonController@create')->name('person/home');

// Route::get('person/index', 'PersonController@good');

//アカウント
Route::get('account/index', 'PersonController@show')->name('account/index');
// Route::get('account/index', 'PersonController@limit');
// Route::get('account/set', 'AccountController@set');


//アカウント設定
Route::get('account/setting', 'AccountController@set')->name('account/setting');

//新規登録確認
Route::get('person/addcheck', function () {
    return view('person.addcheck');
});


//お知らせ
Route::get('notice/index', 'NoticeController@show')->name('notice/index');

//各店舗
Route::get('tourist/index', 'AccountController@spot')->name('tourist/index');

//店舗詳細
// Route::get('store/index', 'AccountController@store');
Route::get('store/index/{id}', 'CouponController@store')->name('store/index');


//近所のおすすめスポット
Route::get('spot/index', 'CouponConttroller@spot');

//クチコミ
Route::get('account/review', 'AccountController@review')->name('account/review');
Route::get('review/person', 'AccountController@update');
// Route::get('review/person', 'AccountController@delete');
// Route::get('review/person', 'AccountController@remove');

//クチコミ編集
Route::get('review/edit', 'AccountController@edit')->name('review/edit');

//いいね一覧
Route::get('review/good', 'AccountController@show')->name('review/good');
// Route::get('review/good', 'AccountController@good');


//ガチャ
// Route::get('gacha/index', 'GachaController@see');
// Route::get('gacha/view', 'GachaController@view');

Route::get('gacha/index', 'GachaController@show')->name('gacha/index');



//ガチャ演出
Route::get('gacha/staging', 'GachaController@play')->name('gacha/staging');
// Route::get('gacha/staging', 'GachaController@stag');

//クーポン
// Route::get('coupon/index', 'GachaController@get');

// Route::get('coupon/index', 'CouponController@see');
// Route::get('coupon/index', 'CouponController@caution');
// Route::post('coupon/index', 'CouponController@use');
// Route::post('coupon/index', 'CouponController@review');

Route::get('coupon/index', 'CouponController@show')->name('coupon/index');



//クーポン確認
Route::get('coupon/confirmation', function () {
    return view('coupon.confirmation');
});

//クーポン使用
Route::get('coupon/use', function () {
    return view('coupon.use');
});

//クーポン使用済み
Route::get('coupon/used', 'CouponController@used')->name('coupon/used');

//クチコミ投稿
// Route::get('post/index', 'CouponController@view');
// Route::post('post/index', 'CouponController@post');
Route::get('post/index', 'CouponController@edit')->name('post/index');


//バッジ
Route::get('badge/index', 'BadgeController@see')->name('badge/index');


//管理者ログイン
Route::get('welcome/admin', 'AdminController@watch');
Route::get('welcome/admin', 'AdminController@in');

//店舗情報管理

Route::get('store/admin', 'AdminController@show')->name('store/admin');
// Route::get('store/admin', 'AdminController@edit');
// Route::get('store/admin', 'AdminController@update');
// Route::get('store/admin', 'AdminController@enter');

//クーポン管理
Route::get('coupon/admin', 'AdminController@see')->name('coupon/admin');
// Route::get('coupon/admin', 'AdminController@look');
// Route::get('coupon/admin', 'AdminController@rewrite');
// Route::get('coupon/admin', 'AdminController@set');
// Route::get('coupon/admin', 'AdminController@add');
// Route::get('coupon/admin', 'AdminController@create');

//クチコミ管理
Route::get('review/admin', 'AdminController@view')->name('review/admin');

//モーダルテスト
Route::get('modal', function () {
    return view('modal');
});

//地図テスト
Route::get('map', function () {
    return view('map');
});
//セッションテスト
Route::get('SessionTest','HelloController@ses_get');
Route::post('SessionTest','HelloController@ses_put');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
