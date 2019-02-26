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


Route::post('ajax-image-upload', 'UserController@ajaxImage');
Route::post('ajax-image-name', 'UserController@ajaxImagename');
Route::delete('ajax-remove-image/{filename}', 'UserController@deleteImage');

      Route::get('/', 'MainController@main')->name('main');
        // Route::get('/test',function()
        // {
        //   return view('editAD');
        // });
      Auth::routes();

      Route::get('/home', 'HomeController@index')->name('home');

      Route::get('/selectBrand/{id}', 'MainController@selectBrand');
      Route::get('/selectType/{brandId}/{categoryId}', 'MainController@selectType');
      Route::post('/New-Advertising', 'ProductController@store');

      Route::get('/New-Advertising', 'ProductController@create')->name('ad');

      Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

      Route::post('/check-point', 'MainController@checkPoint');
      Route::group(['middleware' => 'auth'], function()
      {
            Route::get('/Edit-Advertising/{product}', 'ProductController@edit');
      });

      Route::group(['middleware' => ['isAdmin']], function () {
    // Route::get('/Admin-home', 'AdminController@index')->name('Admin_home');
    //
		//=================category=======================

		  Route::get('/categories', 'CategoryController@index')->name('Category');
		  Route::post('/add-category', 'CategoryController@store');
			Route::post('/update-Category/{category}', 'CategoryController@update');
			Route::post('/delete-Category', 'CategoryController@destroy');
      //=================brand=======================

      Route::get('/Brand', 'BrandController@index')->name('Brand');
      Route::get('/edit-Brand/{item}', 'BrandController@edit');
      Route::post('/add-Brand', 'BrandController@store');
      Route::post('/update-Brand/{brand}', 'BrandController@update');
      Route::post('/delete-Brand', 'BrandController@destroy');
    //================= Type =======================

      Route::get('/Type', 'TypeController@index')->name('Type');
      Route::get('/edit-Type/{type}', 'TypeController@edit');
      Route::post('/add-Type', 'TypeController@store');
      Route::post('/update-Type/{type}', 'TypeController@update');
      Route::post('/delete-Type', 'TypeController@destroy');
	 //================= 	Products =======================
      Route::get('/products', 'ProductController@index')->name('products');
			Route::get('/wait-products', 'ProductController@waitApprove')->name('waitApprove');
      Route::get('/products-approved', 'ProductController@approved')->name('approved');
      Route::get('/approv-product/{product}', 'ProductController@approv');
			Route::get('/delete-product/{product}', 'ProductController@destroy');

	//================= 	Slider  =======================
		 Route::get('/slider', 'SliderController@index')->name('Slider');
		 Route::post('/add-slider', 'SliderController@store');
		 Route::post('/update-slider/{slider}', 'SliderController@update');
		 Route::post('/delete-slider', 'SliderController@destroy');

      });
