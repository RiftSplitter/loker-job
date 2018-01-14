@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">
                    Companies
                </div>

                <div class="panel-body">
                    <ul class="list-inline">
                        @foreach($companies as $c)
                            <li class="home-company-item list-inline-item">
                                <div class="list-inline-item-text">
                                    <a href="{{ url('/view_company_detail/'.$c->company_id) }}">
                                        <p>
                                            <img width="120px" height="120px" src="{{ asset('images/'.$c->company_pic) }}" class="img-responsive">
                                            {{$c->company_name}}
                                        </p>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
