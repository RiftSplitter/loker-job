<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests;

class CompanyController extends Controller
{
    public function index() {
    	$companies = Company::all();

    	return view('users.home')->with(['companies' => $companies]);
    }
}
