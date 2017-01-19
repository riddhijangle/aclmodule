@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    @role('owner')
                    <li><a href= "/admin/user">manage users</a></li>
                    @endrole
                    <li><a href= "/admin/user">manage post</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
