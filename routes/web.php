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

// Test routes
Route::get('/get/users', function(){
	$users = DB::connection('sqlsrv')->table('users')->get();
	dd($users);
});



// Root 
Route::get('/', 'LoginController@index'); // root endpoint is to login

// Utilities
Route::get('/loading', function() {
	return View::make('partials.loading');
});
// Authentication
Route::post('/login', 'LoginController@login'); // post credentials and attempt to sign in
Route::get('/login', function(){return redirect('/');});
Route::get('/logout', 'LoginController@logout')->name('login'); // permission DENIED, login first! - name 'login' because Auth uses it prolly.

// Dashboard
Route::get('/dashboard', 'DashboardController@index');	
Route::get('/dashboard/sites', 'SitesController@index');	

// Services 
Route::get('/dashboard/services', function(){ return view('dashboard.services'); });
Route::get('/dashboard/services/alert', function(){ return view('dashboard.alert'); });	
Route::get('/dashboard/services/bubble', function(){ return view('dashboard.bubble'); });	
Route::get('/dashboard/services/bubble/view', function(){ 
	$faker = Faker\Factory::create('en_UK');
	return view('dashboard.bubble-view', compact('faker'));
});	
Route::get('/dashboard/services/secure', function(){ return view('dashboard.secure'); });	
Route::get('/dashboard/services/glow', function(){ return view('dashboard.glow'); });	
Route::get('/dashboard/services/glow/emered', function(){ return view('dashboard.emered'); });	
Route::get('/dashboard/services/stream', function(){ return view('dashboard.stream'); });	
Route::get('/dashboard/services/stream/autofill', function(){ return view('dashboard.autofill'); });	

// User accounts
Route::get('/dashboard/user-accounts', function() { return view('dashboard.user-accounts'); });
Route::get('/hash', function(){
	$pass = 
	'1AyU9kn7ASkvDlWUrDWQQCkb7ELrQ02Cw+oA2smPTRgJU6pvgA6Rpxg8RSEQHj6hoS0XDdSjb5VIn4une6nLjTJjNjljYjQ4LTMwZjgtNGFkMC1hNDg3LWIwMmRlMGFhZDhlOQ==';	
	$salt = 
	'2C69CB48-30F8-4AD0-A487-B02DE0AAD8E9';



	// byte[] passwordBytes = Encoding.UTF8.GetBytes(password);
	// byte[] saltBytes = Encoding.UTF8.GetBytes(salt);
	// byte[] iterationCountBytes = BitConverter.GetBytes(iterationCount);
	// int derivedLength = passwordBytes.Length + saltBytes.Length;
	// byte[] passwordSaltBytes = new byte[derivedLength];
	// byte[] pbkdf2Bytes;
	// string encryptedString;


	//return $pass;
	
});