<?php
Route:: group (['prefix' => 'admin', 'as' => 'admin.','middleware' => 'checkLogin'],function () { //1

    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('photo', 'PhotoController');
    Route::resource('vendor', 'VendorController');
    Route::resource('user', 'UserController');
    Route::resource('product', 'ProductController');
    Route::resource('article', 'ArticleController');
    Route::resource('home', 'HomeController');
    Route::resource('contact', 'ContactController');
    Route::resource('setting', 'SettingController');
    Route::resource('order', 'OrderController');
    Route::post('order/remove-to-cart', 'OrderController@removeToCart')->name('order.remove');

}); //2
Route::get('/', 'HomeController@index')->name('home.index');
//bước 1 làm ra danh mục
Route::get('/danh-muc/{id}', 'HomeController@category')->name('home.category');
Route::get('/chi-tiet-td/{slug}', 'HomeController@detailProduct')->name('home.productDetail');
Route::get('/tin-tuc', 'HomeController@article')->name('home.article');
Route::get('/tin-tuc/{slug}_{id}', 'HomeController@detailArticle')->name('home.articleDetail');
Route::get('/dat-ban', 'HomeController@reservation')->name('home.reservation');
Route::get('/gio-hang', 'CartController@index')->name('home.cart');
Route::get('/gio-hang/them-sp-vao-gio-hang/{product_id}', 'CartController@addToCart')->name('home.cart.add-to-cart');
// Xóa SP khỏi giỏ hàng
Route::get('/gio-hang/xoa-sp-gio-hang/{id}', 'CartController@removeToCart')->name('home.cart.remove-to-cart');
// Cập nhật giỏ hàng
Route::get('/gio-hang/cap-nhat-so-luong-sp', 'CartController@updateToCart')->name('home.cart.update-to-cart');
// Hủy đơn đặt hàng
Route::get('/dat-hang', 'CartController@order')->name('home.cart.order');

Route::post('/dat-hang', 'CartController@postOrder')->name('home.cart.postOrder');

Route::get('/dat-hang/hoan-tat-dat-hang', 'CartController@completedOrder')->name('home.cart.completedOrder');

Route::get('/thanh-toan', 'CartController@checkout')->name('home.cart.checkout');

Route::get('/gio-hang/huy-don-hang', 'CartController@destroy')->name('home.cart.destroy');

Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/lien-he', 'HomeController@contact')->name('home.contact');
Route::get('/gioi-thieu', 'HomeController@about')->name('home.about');
Route::get('/dau-bep', 'HomeController@stuff')->name('home.stuff');
Route::get('/bo-suu-tap', 'HomeController@gallery')->name('home.gallery');






