@extends('layouts.app')
<style>
    img:hover{
        opacity: 0.7;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center page-header">{{ Auth::user()->name }}</h2>
            <img src="/imgs/2.jpeg" alt="Image for {{ Auth::user()->name }}" height="300" width="300" class="img-circle center-block">
            <br>
            <p class="text-center text-info btn-link">Email : {{ Auth::user()->email }}</p>
        </div>
    </div>
@endsection
