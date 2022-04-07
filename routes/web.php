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

// ログインページ
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// ログイン処理
Route::post('/login', 'Auth\LoginController@Login');
// ログアウト機能
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// 未承認時のリダイレクトを定義
Route::group(['middleware' => ['auth']], function () {
    // ホーム
    Route::get('/', 'UserController@index')->name('home');
    // メニュー管理画面
    Route::get('/edit', 'UserController@edit')->name('edit');
    // 注文機能
    Route::post('/order/{customer}', 'CustomerController@order')->name('customer.order');
    // 注文履歴画面
    Route::get('/order/{customer}/list', 'CustomerController@orderList')->name('customer.order.list');
    //再注文機能
    Route::get('/order/list/reorder', 'CustomerController@reorder')->name('customer.reorder');
    // 会計機能
    Route::put('/order/{customer}/payment', 'CustomerController@payment')->name('customer.payment');
    // 会計完了画面
    Route::get('/order/complete', 'CustomerController@orderComplete')->name('customer.order.complete');
    // カテゴリー一覧ページ
    Route::get('/category', 'CategoryController@index')->name('category.index');
    // カテゴリー編集画面
    Route::get('/category/edit/{category}', 'CategoryController@edit')->name('category.edit');
    // カテゴリー追加画面
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    // カテゴリー追加機能
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    // カテゴリー編集機能
    Route::put('/category/update/{category}', 'CategoryController@update')->name('category.update');
    // カテゴリー削除機能
    Route::delete('/category/destroy/{category}', 'CategoryController@destroy')->name('category.destroy');
    // メニュー一覧ページ
    Route::get('/menu', 'MenuController@index')->name('menu.index');
    // メニュー編集画面
    Route::get('/menu/edit/{menu}', 'MenuController@edit')->name('menu.edit');
    // メニュー追加画面
    Route::get('/menu/create', 'MenuController@create')->name('menu.create');
    // メニュー追加機能
    Route::post('/menu/store', 'MenuController@store')->name('menu.store');
    // メニュー編集機能
    Route::put('/menu/update/{menu}', 'MenuController@update')->name('menu.update');
    // メニュー削除機能
    Route::delete('/menu/destroy/{menu}', 'MenuController@destroy')->name('menu.destroy');
    // オーダー管理画面
    Route::get('/order', 'CustomerController@order')->name('order.index');
    // オーダー管理画面　提供済み機能
    Route::get('/order/{id}', 'CustomerController@finishedOrder')->name('finished.order');
    // テーブル一覧画面
    Route::get('/table', 'CustomerController@showTable')->name('table.show');
    // 会計待ち一覧ページ
    Route::get('/table/billing', 'CustomerController@billing')->name('table.billing');
    // テーブル別一覧
    Route::get('/table/{table}', 'CustomerController@index')->name('table.index');
    // 会計画面
    Route::get('/table/billing/{table}', 'CustomerController@billingShow')->name('table.billing.show');
    // 会計完了機能
    Route::put('/table/complete/{table}', 'CustomerController@billingComplete')->name('table.complete');
    // 注文開始画面
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
    // 注文開始機能
    Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
    // おすすめ画面
    Route::get('/order/menu/pickup/{customer}', 'CustomerController@pickupShow')->name('pickup.show');
    //ランキング画面
    Route::get('/order/menu/ranking', 'CustomerController@ranking')->name('customer.ranking');
    // 注文画面
    Route::get('/order/menu/{customer}/{category}', 'CustomerController@show')->name('customer.show');
    //数量選択画面
    Route::get('/order/menu/{customer}/{menu}/number', 'CustomerController@number')->name('customer.order.number');
    //注文する
    Route::get('/order/menu/number', 'CustomerController@addCart')->name('customer.order.addCart');
    //お気に入り登録
    Route::get('/order/menu/like', 'CustomerController@like')->name('like');
});
