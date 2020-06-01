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

Route::get('/','PublicController@index')->name('index');
Route::get('post/{post}','PublicController@singlePost')->name('singlePost');
Route::get('about','PublicController@about')->name('about');
Route::get('contact','PublicController@contact')->name('contact');
Route::post('contact','PublicController@contactPost')->name('contactPost');

Auth::routes();
Route::get('dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function(){
	Route::post('new-comment','UserController@newComment')->name('newComment');
	Route::get('dashboard','UserController@dashboard')->name('userDashboard');
	Route::get('comments','UserController@comments')->name('userComments');
	Route::post('comments/{id}/delete','UserController@deleteComment')->name('deleteComment');
	Route::get('profile','UserController@profile')->name('userProfile');
	Route::post('profile','UserController@profilePost')->name('userprofilePost');
});

Route::prefix('author')->group(function(){
	Route::get('dashboard','AuthorController@dashboard')->name('authorDashboard');
	Route::get('posts','AuthorController@posts')->name('authorPosts');
	Route::get('posts/new','AuthorController@newPost')->name('newPost');
	Route::post('posts/new','AuthorController@createPost')->name('createPost');
	Route::get('/post/{id}/edit','AuthorController@postEdit')->name('editPost');
	Route::post('/post/{id}/edit','AuthorController@postEditPost')->name('postEditPost');
	Route::post('/post/{id}/delete','AuthorController@deletePost')->name('deletePost');
	Route::get('comments','AuthorController@comments')->name('authorComments');

	Route::get('menulist','AuthorController@createMenu')->name('createMenu');
	
	Route::get('menu/create','AuthorController@newMenuPost')->name('newMenuPost');
	Route::post('menu/create','AuthorController@createMenu')->name('createMenuPost');

	Route::get('menu/{id}/edit','AuthorController@createMenuEdit')->name('createMenuEdit');
	Route::post('menu/{id}/edit','AuthorController@createMenuEdit')->name('createMenuEditPost');
});

Route::prefix('admin')->group(function(){
	Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');
	Route::get('posts','AdminController@posts')->name('adminPosts');
	Route::get('/post/{id}/edit','AdminController@postEdit')->name('adminPostEdit');
	Route::post('/post/{id}/edit','AdminController@postEditPost')->name('adminPostEditPost');
	Route::post('/post/{id}/delete','AdminController@deletePost')->name('adminDeletePost');
	Route::get('comments','AdminController@comments')->name('adminComments');
	Route::post('comments/{id}/delete','AdminController@deleteComment')->name('adminDeleteComment');
	Route::get('users','AdminController@users')->name('adminUsers');
	Route::get('users/{id}/edit','AdminController@editUser')->name('adminEditUser');
	Route::post('users/{id}/edit','AdminController@editUserPost')->name('adminEditUserPost');
	Route::post('users/{id}/delete','AdminController@deleteUser')->name('adminDeleteUser');


	Route::get('products','AdminController@products')->name('adminProducts');

	Route::get('products/new','AdminController@newProduct')->name('adminNewProduct');
	Route::post('products/new','AdminController@newProductPost')->name('adminNewProduct');

	Route::get('product/{id}','AdminController@editProduct')->name('adminEditProduct');
	Route::post('product/{id}','AdminController@editProductPost')->name('adminEditProductPost');

});
Route::prefix('shop')->group(function(){
	Route::get('/','ShopController@index')->name('shop.index');
	// Route::get()->name();
});