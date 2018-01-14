@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $company->company_name }}</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @if(count($jobs) > 0)
                            @foreach($jobs as $j)
                                <li class="list-group-item dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown">
                                        <div class="list-group-item-text">
                                            
                                                <p>
                                                
                                                    <span>
                                                        {{ $j->job_name }}
                                                        <button class="btn btn-primary pull-right">
                                                            UPLOAD CV
                                                        </button>
                                                        <button class="btn btn-primary pull-right" onclick="alert('Thank you for applying for this job')">
                                                            APPLY
                                                        </button>
                                                    </span>
                                                
                                                </p>

                                            
                                        </div>
                                    </a>

                                    <ul class="dropdown-menu">
                                            <li class="job-dropdown-menu"> 
                                                <p>
                                                    Qualification:<br>
                                                    - Age > 20 years<br>  
                                                    - Experience > 1 year<br>
                                                    - Have good working attitude
                                                </p>
                                                    
                                            </li>

                                            <li class="divider"></li>

                                            <li class="job-dropdown-menu">
                                                <p>
                                                    Description: This paragraph will be describing the job that you choose
                                                </p>
                                            </li>
                                    </ul>
                                </li>
                            @endforeach
                        @else
                            <p>
                                No Job is available right now
                            </p>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
