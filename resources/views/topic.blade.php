@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>{{ $topic->title }}</h1>

            <div class="panel panel-default">

                <div class="panel-heading">Posted {{ $topic->created_at->toDayDateTimeString() }}</div>

                <div class="panel-body">
                    {{ $topic->body }}
                </div>
            </div>

            <h2>Replies {{ $topic->replies->count() }}</h2>

            @foreach ($topic->replies as $reply)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $reply->created_at->toDayDateTimeString() }}
                    </div>
                    <div class="panel-body">
                        {{ $reply->body }}
                    </div>
                </div>
            @endforeach

            <form action="/home/{{ $topic->id }}/" method="POST">
                {{ csrf_field() }}
                <h2>Reply</h2>
                <div class="form-group">
                    <textarea name="body" id="reply" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-default" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
