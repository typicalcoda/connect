<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitesController extends Controller
{
    function index(){
    	$sites = DB::connection('sqlsrv')->table('Sites')->select('id', 'SiteName')->where('AccountId', 'ED848867-C525-4688-BAF7-AA93C1F324A7')->get();
    	return view('dashboard.sites', compact('sites'));
    }
}
