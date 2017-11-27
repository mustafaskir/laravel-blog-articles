@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ Auth::User()->name }}</div>

                <div class="panel-body">
                    You'r Logged as <strong>{{ Auth::User()->email }}</strong>
                    <br>
                    your <b>ID</b> is {{ Auth::User()->id }}
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores consequatur dolores doloribus explicabo fugit
                    <br>
                    nam quae quas, quibusdam quisquam quos saepe sint tempora unde velit? Enim, laudantium repudiandae. Fugit.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
