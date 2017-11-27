@extends('layouts.app')

@section('content')

    <div class="col-md-4 col-md-offset-4">
        @forelse($articles as $article)
            <div class="panel panel-default">
                <div class="panel-heading" style="background: white">
                    <strong>{{ $article->title }}</strong>
                        @if(Auth::User()->id == $article->user_id)
                            <form action="articles/{{ $article->id }}" class="pull-right" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input style="color: red;position: relative;bottom: 5px" class="btn-link" value="delete" type="submit">
                            </form>
                        @endif
                    @if(Auth::User()->id == $article->user_id)
                        <small style="margin-right:2%" class="btn-link pull-right"><a href="/articles/{{ $article->id }}/edit"> Edit </a></small>
                    @endif

                </div>
                <div class="panel-body" style="font-family: 'Lato', sans-serif">
                    <b>{{ $article->shortContent }}</b>
                    <a href="/articles/{{ $article->id }}"> readmore</a>
                </div>
                <div class="panel-footer" style="background: white">
                    <span class="badge">{{ $article->created_at->diffForHumans() }}</span>
                    @if($article->live == 1)
                        <small class="badge col-xs-offset-3 pull-right" style="background-color: green">Online</small>
                    @else
                        <small class="badge col-xs-offset-3 pull-right" style="background-color: red">Offline</small>
                    @endif
                </div>
            </div>
        @empty
        @endforelse
    </div>

    <div class="row navbar-fixed-bottom">
        <small class="col-xs-6">
            {{ $articles->links() }}
        </small>
    </div>

@endsection
