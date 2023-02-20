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
Route::POST('userRegister', 'PersonController@userRegister')->name('userRegister');

//パスワード
Route::get('/password/change', 'Auth\ChangePasswordController@edit');
Route::patch('/password/change', 'Auth\ChangePasswordController@update')->name('password.change');

// ログアウト
Route::get('userlogout', 'AccountController@userlogout')->name('userlogout');

//ホーム
// Route::POST('person/index', 'PersonController@create')->name('person/index');

// Route::get('person/index', 'PersonController@home')->name('person/index')->middleware('auth');
// ホーム画面をただ表示
Route::get('person/home', 'PersonController@create')->name('person/home')->middleware('auth');
// いいね処理
Route::POST('/home/good', 'PersonController@good')->name('/home/good')->middleware('auth');
Route::POST('/home/gensan', 'PersonController@gensan')->name('/home/gensan')->middleware('auth');
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
Route::POST('account/setting', 'AccountController@setting')->name('account/setting')->middleware('auth');


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
Route::get('store/get/{store_id}/{coupon_id}/{areaid}', 'CouponController@storeget')->name('store/get')->middleware('auth');
Route::get('store/index/{id}', 'CouponController@store')->name('store/index')->middleware('auth');


//近所のおすすめスポット（ないからたぶん消す？）
// Route::get('spot/index', 'CouponController@spot')->middleware('auth');

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

Route::post('/gacha/latlng','GachaController@show')->name('/gacha/latlng')->middleware('auth');




//ガチャ演出
//ガチャ演出画面 表示
Route::get('gacha/staging/{currentArea?}', 'GachaController@play')->name('gacha/staging')->middleware('auth');
//クーポン→×
Route::get('model/test{store_id}/{coupon_id}/{areaid}', 'GachaController@modeldelete')->name('model/test');

// Route::get('gacha/staging', 'GachaController@stag');

//クーポン
//クーポン画面 表示
// Route::get('coupon/index', 'GachaController@get');

// Route::get('coupon/index', 'CouponController@see');
// Route::get('coupon/index', 'CouponController@caution');
// Route::post('coupon/index', 'CouponController@use');
// Route::post('coupon/index', 'CouponController@review');

Route::get('coupon/index', 'CouponController@show')->name('coupon/index')->middleware('auth');
//ガチャ→クーポン一覧
Route::get('coupon/get/{store_id}/{coupon_id}/{areaid}', 'CouponController@get')->name('coupon/get')->middleware('auth');
// Route::get('coupon/use', 'CouponController@show')->name('coupon/index');

//クーポン確認
//クーポン確認画面 表示
Route::get('coupon/confirmation', function () {
    return view('coupon.confirmation');
});

//クーポン使用
//クーポン使用画面 表示
Route::get('coupon/use', function () {
    return view('coupon.use');
});

//クーポンフラグ
//クーポン一覧画面 表示
Route::get('coupon/flg/{id}', 'CouponController@flg')->name('coupon/flg');

//クーポン使用済み
//クーポン一覧画面の使用済み 表示
Route::get('coupon/used', 'CouponController@used')->name('coupon/used')->middleware('auth');

//クチコミ投稿
// Route::get('post/index', 'CouponController@view');

// 使用済みクーポンからクチコミをかく
//クチコミ投稿画面 表示
Route::get('post/used/{store_id}/{ticket_id}', 'CouponController@review')->name('post/used');

// 使用可能クーポンからクチコミを書く
//クチコミ投稿画面 表示
Route::get('post/index/{store_id}/{ticket_id}', 'CouponController@view')->name('post/index');
// Route::post('post/index', 'CouponController@post');

// 投稿したクチコミの保存
//クチコミ編集の保存
Route::POST('/post/send', 'CouponController@edit')->name('/post/send')->middleware('auth');


//バッジ
//バッジ画面 表示
Route::get('badge/index', 'BadgeController@see')->name('badge/index')->middleware('auth');


//管理者ログイン
// Route::get('welcome/admin', 'Auth\AdminController@watch')->middleware('auth:admin');
// Route::get('welcome/admin', 'Auth\AdminController@in')->middleware('auth');

//店舗情報管理

// Route::get('store/admin', 'Auth\AdminController@show')->name('store/admin')->middleware('auth');
Route::post('store/storeregister', 'Auth\AdminController@storeregister')->name('store/storeregister')->middleware('auth:admin');
Route::post('store/storeupdate', 'Auth\AdminController@storeupdate')->name('store/storeupdate')->middleware('auth:admin');
// Route::get('store/admin', 'AdminController@edit');
// Route::get('store/admin', 'AdminController@update');
// Route::get('store/admin', 'AdminController@enter');

//クーポン管理
// Route::get('admin/coupon', 'Auth\AdminController@see')->name('admin/coupon')->middleware('admin');
Route::post('coupon/couponregister', 'Auth\AdminController@couponregister')->name('coupon/couponregister')->middleware('auth:admin');
Route::post('coupon/couponupdate', 'Auth\AdminController@couponupdate')->name('coupon/couponupdate')->middleware('auth:admin');
// Route::get('admin/coupon', 'AdminController@look');
// Route::get('admin/coupon', 'AdminController@rewrite');
// Route::get('admin/coupon', 'AdminController@set');
// Route::get('admin/coupon', 'AdminController@add');
// Route::get('admin/coupon', 'AdminController@create');

//クチコミ管理
// Route::get('admin/review', 'Auth\AdminController@view')->name('admin/review')->middleware('auth:admin');

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


//クーポンテスト
Route::get('coupon', function () {
    return view('coupon');
});

//セッションテスト
Route::get('SessionTest', 'HelloController@ses_get');
Route::post('SessionTest', 'HelloController@ses_put');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Auth\AdminController@enter')->name('admin');


// 管理
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@adminlogin')->name('admin.login');
    // Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@enter')->name('store.register');
    Route::get('/', 'Auth\AdminController@index')->name('admins.store');
    Route::get('coupon', 'Auth\AdminController@see')->name('admin.coupon');
    Route::get('review', 'Auth\AdminController@view')->name('admin.review');
});

//パスワードを忘れた方はこちら
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// 管理者の方はこちら
Route::get('admin/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');

//プロフィール
Route::get('profile', function () {
    return view('account.profile');
});

Route::get('admin/register', 'Auth\AdminController@enter')->name('store.register');
Route::get('coupon/register', 'Auth\AdminController@set')->name('coupon.register');
Route::get('admins/store', 'Auth\AdminController@update')->name('admins.store');
Route::get('coupon/admin', 'Auth\AdminController@see')->name('admin.coupon');
//テスト
Route::get('test', function () {
    return view('homeadmin');
});

//管理者ログイン画面から新規登録画面へ
Route::get('admin/open', function () {
    return view('admins.register');
})->name('admin.register');

//管理者新規登録
Route::post
('/store/add', 'StoreController@new')->name('store.add');

