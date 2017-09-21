@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>{{ $topic->title }}</h1>
            <ol class="breadcrumb">
                <li>
                <a href="/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li class="active">{{ $topic->title }}</li>
            </ol>

            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Posted {{ $topic->created_at->toDayDateTimeString() }}</div>
                <div class="panel-body">{{ $topic->body }}</div>
                <div class="panel-footer text-right">
                    <i class="fa fa-user" aria-hidden="true"></i> {{ $topic->author->name }}
                </div>
            </div>

            <h2><i class="fa fa-comments" aria-hidden="true"></i> Replies {{ $topic->replies->count() }}</h2>

            @foreach ($topic->replies as $reply)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                        {{ $reply->created_at->toDayDateTimeString() }}
                    </div>
                    <div class="panel-body">
                        {{ $reply->body }}
                    </div>
                    <div class="panel-footer text-right">
                        by {{ $reply->author->name }}
                    </div>
                </div>
            @endforeach

            <form action="/home/{{ $topic->id }}/" method="POST">
                {{ csrf_field() }}
                <h2><i class="fa fa-reply" aria-hidden="true"></i> Post Reply</h2>
                <div class="form-group">
                    <textarea name="body" id="reply" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-default" type="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
