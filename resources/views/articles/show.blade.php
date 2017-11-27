@extends('layouts.app')

@section('content')

    <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default">
                <div class="panel-heading" style="background: white">
                    <strong>{{ $article->title }}</strong>
                </div>
                <div class="panel-body" style="font-family: 'Lato', sans-serif">
                    {{ $article->content }}
                </div>
            </div>
    </div>
@endsection