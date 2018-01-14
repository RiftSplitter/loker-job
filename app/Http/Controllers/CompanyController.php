<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests;

class CompanyController extends Controller
{
    public function index() {
    	$companies = Company::all();

    	return view('users.home')->with(['companies' => $companies]);
    }

    public function indexCompany() {
    	$company = Auth::user()->company->first();
 
    	$job = $company->job;
    	

    	return view('company.home')->with(['company' => $company, 'jobs' => $job]);
    }

    public function viewRegister() {
    	return view('users.register_company');
    }

    public function register(Request $request) {
    	$company = new Company();
    	$user = Auth::user();

    	$company->company_name = $request->company_name;
    	$company->user_id = Auth::user()->id;
    	$user->role = 'company';

    	$company->save();
    	$user->save();

    	return redirect('/home');
    }
 
}
