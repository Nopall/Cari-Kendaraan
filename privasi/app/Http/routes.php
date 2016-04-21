<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route Layout
Route::group(['middleware' => 'web'], function(){

Route::get('/', array(
  'uses' => 'HomeController@getHome',
  'as' => 'index'
));

	Route::get('/about', array(
    'uses' => 'HomeController@about',
    'as' => 'template.about'
  ));

  Route::get('/police', function()
  {
    return view('template.police');
  });

  Route::get('/terms', function()
  {
    return view('template.terms');
  });

  Route::get('/blog', array(
    'uses' => 'HomeController@blog',
    'as' => 'template.blog'
  ));

  Route::get('/post/{id}/{slug}', array(
    'uses' => 'HomeController@blogpost',
    'as' => 'template.post'
  ));

  Route::get('/search', 'HomeController@getSearch');

  Route::get('/sresult', function()
  {
    return view('template.sresult');
  });

  Route::get('/post', function()
  {
    return view('template.post');
  });

  Route::get('/detail-produk', array(
    'uses' => 'HomeController@getDProduk',
    'as' => 'template.dproduk'
  ));

  Route::get('/mobil', array(
    'uses' => 'HomeController@getMobil',
    'as' => 'template.mobil'
  ));

  Route::get('/motor', array(
    'uses' => 'HomeController@getMotor',
    'as' => 'template.motor'
  ));

  Route::get('/sepeda', array(
    'uses' => 'HomeController@getSepeda',
    'as' => 'template.sepeda'
  ));

  Route::get('/redir', array(
    'uses' => 'HomeController@getRedir',
    'as' => 'redir'
  ));

  Route::get('/fav', array(
    'uses' => 'HomeController@getFav',
    'as' => 'fav'
  ));

  Route::get('/cari', [
    'uses' => 'HomeController@getCari',
    'as' => 'template.sresult'
    ]);

  Route::post('cari', [
    'uses' => 'HomeController@cariData',
    'as' => 'template.sresult'
    ]);

    			// Route Admin
    			Route::get('/admin', function()
    			{
    				return view('admin.login');
    			});

          Route::post('login',[
    			  'uses' => 'AdminController@postSignIn',
    			  'as' => 'admin.login'
            ]);

    			Route::get('/signup', function()
    			{
    				return view('admin.register');
    			});

          Route::post('signup',  [
    				'uses' => 'AdminController@postSignUp',
    				'as' => 'admin.register'
    				]);

          Route::get('logout', [
      			'uses' => 'AdminController@logout',
      			'as' => 'admin.login'
      			]);

          Route::get('/forgetpw', 'Auth\PasswordController@getUser');
          Route::post('/forgetpw', 'Auth\PasswordController@postUser');

});

Route::group(['middleware' => 'auth'], function() {

  Route::get('/admin/dashboard', function()
  {
    return view('admin.index');
  });

  Route::get('/admin/dashboard', [
    'uses' => 'AdminController@getDashboard',
    'as' => 'admin.index'
    ]);

	Route::get('admin/putcsv', array(
		'uses' => 'AdminController@getCsv',
		'as' => 'admin.formin'
	));

	Route::post('admin/putcsv', [
		'uses' => 'AdminController@inputCsv',
		'as' => 'admin.formin'
	]);

	Route::get('admin/csv', array(
		'uses' => 'AdminController@getDataCsv',
		'as' => 'admin.csv'
	));

    Route::resource('csv', 'BlogController');

});

Route::group(['prefix' => 'member'], function() {

		// Route Member
		Route::get('/member', function()
		{
			return view('usr.login');
		});

});
