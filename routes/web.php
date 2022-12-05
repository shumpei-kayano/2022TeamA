<?php

use App\Http\Controllers\Admin;
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
Route::get('login', 'PersonController@out')->name('login');

//新規登録
Route::get('register', 'PersonController@add');

//ホーム
// Route::POST('person/index', 'PersonController@create')->name('person/index');

// Route::get('person/index', 'PersonController@home')->name('person/index')->middleware('auth');
// ホーム画面をただ表示
Route::get('person/home', 'PersonController@create')->name('person/home')->middleware('auth');
// いいね処理
Route::POST('/home/good', 'PersonController@good')->name('/home/good')->middleware('auth');
// いいね処理から戻る時
Route::get('person/wasgood', 'PersonController@wasgood')->name('person/wasgood')->middleware('auth');

Route::delete('person/home', 'PersonController@nogood')->name('nogood')->middleware('auth');



// Route::get('person/index', 'PersonController@good');

//アカウント
Route::get('account/index', 'PersonController@show')->name('account/index')->middleware('auth');
// Route::get('account/index', 'PersonController@limit');
// Route::get('account/set', 'AccountController@set');


//アカウント設定
Route::get('account/setting', 'AccountController@set')->name('account/setting')->middleware('auth');

//新規登録確認
Route::get('person/addcheck', function () {
    return view('person.addcheck');
});


//お知らせ
Route::get('notice/index', 'NoticeController@show')->name('notice/index')->middleware('auth');

//各店舗
Route::get('tourist/index', 'AccountController@spot')->name('tourist/index')->middleware('auth');

//店舗詳細
// Route::get('store/index', 'AccountController@store');
Route::get('store/get/{store_id}/{coupon_id}', 'CouponController@storeget')->name('store/get')->middleware('auth');
Route::get('store/index/{id}', 'CouponController@store')->name('store/index')->middleware('auth');


//近所のおすすめスポット
Route::get('spot/index', 'CouponController@spot')->middleware('auth');

//クチコミ
Route::get('account/review', 'AccountController@review')->name('account/review')->middleware('auth');
Route::get('review/person', 'AccountController@update')->middleware('auth');
// Route::get('review/person', 'AccountController@delete');
// Route::get('review/person', 'AccountController@remove');

//クチコミ編集
// Route::get('review/edit', 'AccountController@edit')->name('review/edit');
Route::get('review/edit/{id}', 'AccountController@edit')->name('review/edit')->middleware('auth');
Route::POST('review/edited', 'AccountController@edited')->name('review/edited')->middleware('auth');

// クチコミ削除
Route::get('review/delete/{id}', 'AccountController@remove')->name('review/delete')->middleware('auth');

//いいね一覧
Route::get('review/good', 'AccountController@show')->name('review/good')->middleware('auth');
// Route::get('review/good', 'AccountController@good');


//ガチャ
// Route::get('gacha/index', 'GachaController@see');
// Route::get('gacha/view', 'GachaController@view');

Route::get('gacha/index', 'GachaController@show')->name('gacha/index')->middleware('auth');

Route::post('gacha/index', 'GachaController@change_area');



//ガチャ演出
Route::get('gacha/staging/{currentArea?}', 'GachaController@play')->name('gacha/staging')->middleware('auth');
// Route::get('gacha/staging', 'GachaController@stag');

//クーポン
// Route::get('coupon/index', 'GachaController@get');

// Route::get('coupon/index', 'CouponController@see');
// Route::get('coupon/index', 'CouponController@caution');
// Route::post('coupon/index', 'CouponController@use');
// Route::post('coupon/index', 'CouponController@review');

Route::get('coupon/index', 'CouponController@show')->name('coupon/index')->middleware('auth');
Route::get('coupon/get/{store_id}/{coupon_id}', 'CouponController@get')->name('coupon/get')->middleware('auth');
// Route::get('coupon/use', 'CouponController@show')->name('coupon/index');

//クーポン確認
Route::get('coupon/confirmation', function () {
    return view('coupon.confirmation');
});

//クーポン使用
Route::get('coupon/use', function () {
    return view('coupon.use');
});

//クーポンフラグ
Route::get('coupon/flg/{id}', 'CouponController@flg')->name('coupon/flg');

//クーポン使用済み
Route::get('coupon/used', 'CouponController@used')->name('coupon/used')->middleware('auth');

//クチコミ投稿
// Route::get('post/index', 'CouponController@view');
Route::get('post/used/{store_id}', 'CouponController@view')->name('post/used');
Route::get('post/index/{store_id}/{ticket_id}', 'CouponController@view')->name('post/index');
// Route::post('post/index', 'CouponController@post');
Route::POST('/post/send', 'CouponController@edit')->name('/post/send')->middleware('auth');


//バッジ
Route::get('badge/index', 'BadgeController@see')->name('badge/index')->middleware('auth');


//管理者ログイン
Route::get('welcome/admin', 'Auth\AdminController@watch')->middleware('auth');
Route::get('welcome/admin', 'Auth\AdminController@in')->middleware('auth');

//店舗情報管理

// Route::get('store/admin', 'Auth\AdminController@show')->name('store/admin')->middleware('auth');
Route::post('store/storeupdate', 'Auth\AdminController@storeupdate')->name('store/storeupdate')->middleware('auth');
// Route::get('store/admin', 'AdminController@edit');
// Route::get('store/admin', 'AdminController@update');
// Route::get('store/admin', 'AdminController@enter');

//クーポン管理
Route::get('coupon/admin', 'Auth\AdminController@see')->name('coupon/admin');
Route::post('coupon/couponupdate', 'Auth\AdminController@couponupdate')->name('coupon/couponupdate');
// Route::get('coupon/admin', 'AdminController@look');
// Route::get('coupon/admin', 'AdminController@rewrite');
// Route::get('coupon/admin', 'AdminController@set');
// Route::get('coupon/admin', 'AdminController@add');
// Route::get('coupon/admin', 'AdminController@create');

//クチコミ管理
Route::get('review/admin', 'Auth\AdminController@view')->name('review/admin');

//モーダルテスト
Route::get('modal', function () {
    return view('modal');
});

//地図テスト
Route::get('map', function () {
    return view('map');
});

//吹き出しテスト
Route::get('hukidashi', function () {
    return view('hukidashi');
});


//店舗テスト
Route::get('store', function () {
    return view('store');
});

//セッションテスト
Route::get('SessionTest', 'HelloController@ses_get');
Route::post('SessionTest', 'HelloController@ses_put');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Auth\AdminController@enter')->name('admin');


// 管理
Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login');
    // Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admins.store');
});
