<?php

namespace App\Http\Controllers;

use Auth;
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

    public function viewInsertJob() {
    	$company = Auth::user()->company;

    	return view('company.insert_job')->with(['company' => $company]);
    }

    public function insert(Request $request) {
    	$job = new Job();
    	$company = Auth::user()->company;

    	$job->job_name = $request->job_name;
    	$job->company_id = $company->company_id;
    	

    	$job->save();

    	return redirect('/home');
    }
}
