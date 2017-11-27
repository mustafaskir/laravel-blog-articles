@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <fieldset style="">
                <legend class="text-primary">Edit Article</legend>
                <form action="/articles/{{ $article->id }}" method="POST" style="margin: 15px;">

                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <label for="title" class="">Article Content</label>
                    <div class="input-group col-md-6">
                        <input type="text" class="form-control" name="title" placeholder="Article Title" value="{{ $article->title }}">
                        <div class="input-group-addon"><i class="fa fa-exchange"></i></div>
                    </div>

                    <label for="content">Type Words</label>
                    <div class="input-group col-md-6">
                        <textarea style="resize: none" name="content" id="content" cols="60" rows="4" placeholder="write words ">{{ $article->content }}</textarea>
                    </div>

                    <div class="checkbox">
                        <label for="live">
                            <input type="checkbox" name="live" {{ $article->live == 1 ? 'checked' : '' }}>
                            live
                        </label>
                    </div>

                    <input type="submit" value="Edit Article" class="btn btn-primary" style="float: right;margin-right: 170px;">

                </form>
            </fieldset>

        </div>
    </div>
@endsection
