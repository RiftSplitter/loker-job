<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Job;
use App\Http\Requests;

class JobController extends Controller
{
    public function view($id) {
    	
		$company = Company::find($id);
		//dd($company);
    	$jobs = Job::where('company_id', '=', $id)->get();

    	

    	return view('users.view_company')->with(['jobs' => $jobs, 'company' => $company]);
    }
}
