@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <fieldset style="">
                <legend class="text-primary">New Post</legend>
                <form action="/articles" method="POST" style="margin: 15px;">

                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <label for="title" class="">Article Content</label>
                    <div class="input-group col-md-6">
                        <input type="text" class="form-control" name="title" placeholder="Article Title">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                    </div>

                    <label for="content">Type Words</label>
                    <div class="input-group col-md-6">
                        <textarea name="content" id="" cols="60" rows="4" placeholder="write words "></textarea>
                    </div>

                    <div class="checkbox">
                        <label for="live">
                            <input type="checkbox" name="live">
                            live
                        </label>
                    </div>

                    <input type="submit" value="Post" class="btn btn-primary" style="float: right;margin-right: 170px;">

                </form>
            </fieldset>

        </div>
    </div>
@endsection
