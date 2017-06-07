<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	function __construct(){
	}
	function index(){
		if(\Auth::check()){
			return redirect('dashboard');
		}
		return view('login');
	}
	function login(){

		return  [ 
		'credentials' => [
		'Username: '.request('username'),
		'Password: '.request('password')
		],
		'data' => auth()->attempt(request(['username', 'password']))
		];
	}

	function logout(){
		auth()->logout();
		return redirect('/');
	}
}
