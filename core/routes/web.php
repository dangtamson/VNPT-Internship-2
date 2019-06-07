<?php
// Route::get('/uploadfile', 'UploadfileController@index');
// Route::post('/uploadfile', 'UploadfileController@upload');
 Route::get('/main', 'MainController@index');
 Route::post('/main/checklogin', 'MainController@checklogin');
 Route::get('main/successlogin', 'MainController@successlogin');
 Route::get('main/logout', 'MainController@logout');
 Auth::routes(['verify' => true]); 

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/dsnv', 'MainController@dsnv')->name('dsnv');
// Route::get('/themnv', 'MainController@themnv')->name('themnv');

Route::get('/', function(){
	return view('successlogin');
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'user'],function(){

		Route::get('danhsach','UserController@getDanhSach');
		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');
		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');
		Route::post('search',['as'=>'us_getSearch1','uses'=>'UserController@getSearch']);
		Route::get('xoa/{id}','UserController@getXoa');
		Route::get('useradmin','UserController@userAdmin');
		Route::get('usernhanvien','UserController@userNhanVien');
		Route::get('getpass/{id}','UserController@getpass');
	
	});

	Route::group(['prefix'=>'phongban'],function(){

		Route::get('danhsach','PhongbanController@getDanhSach');
		Route::get('them','PhongbanController@getThem');
		Route::post('them','PhongbanController@postThem');
		Route::get('sua/{id}','PhongbanController@getSua');
		Route::post('sua/{id}','PhongbanController@postSua');
		Route::post('search',['as'=>'us_getSearch2','uses'=>'PhongbanController@getSearch']);
		Route::get('xoa/{id}','PhongbanController@getXoa');
		
	});
	Route::group(['prefix'=>'chucvu'],function(){

			Route::get('danhsachcv','ChucvuController@getDanhSachcv');
			Route::get('themcv','ChucvuController@getThemcv');
			Route::post('themcv','ChucvuController@postThemcv');
			Route::post('search',['as'=>'us_getSearch3','uses'=>'ChucvuController@getSearch']);
			Route::get('xoacv/{id_cv}','ChucvuController@getXoacv');
			Route::get('suacv/{id_cv}','ChucvuController@getSuacv');
			Route::post('suacv/{id_cv}','ChucvuController@postSuacv');
	});

	Route::group(['prefix'=>'linhvuc'],function(){

			Route::get('danhsachlv','LinhvucController@getDanhSachlv');
			Route::get('themlv','LinhvucController@getThemlv');
			Route::post('themlv','LinhvucController@postThemlv');
			Route::post('search',['as'=>'us_getSearch4','uses'=>'LinhvucController@getSearch']);
			Route::get('xoalv/{id_lv}','LinhvucController@getXoalv');
			Route::get('sualv/{id_lv}','LinhvucController@getSualv');
			Route::post('sualv/{id_lv}','LinhvucController@postSualv');
	});
});

Route::get('lienket',function(){
	$data = App\User::find(8)->phongban->toArray();
	var_dump($data);
});

Route::get('lienketphongban',function(){
	$data = App\Phongban::find(3)->user->toArray();
	var_dump($data);
});