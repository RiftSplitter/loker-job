@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Companies</div>

                <div class="panel-body">
                    <div class="list-group">
                        @foreach($companies as $c)
                            <div class="list-group-item">
                                <div class="list-group-item-text">
                                    <a href="#">
                                        <p>
                                            {{$c->company_name}}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
