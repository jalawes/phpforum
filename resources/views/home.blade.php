@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h1><i class="fa fa-list" aria-hidden="true"></i> Topic List</h1>
            {{ $topics->links() }}
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table">
                        <thead>
                            <tr>
                                <th>Topic</th>
                                <th><i class="fa fa-user" aria-hidden="true"></i> Author</th>
                                <th><i class="fa fa-calendar" aria-hidden="true"></i> Date</th>
                                <th><i class="fa fa-comments" aria-hidden="true"></i> Replies</th>
                                <th><i class="fa fa-reply" aria-hidden="true"></i> Last Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($topics as $topic)
                                <tr>
                                    <td><a href="/home/{{ $topic->id }}">{{ $topic->title }}</a></td>
                                    <td>{{ $topic->author->name }}</td>
                                    <td>{{ $topic->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $topic->replies->count() }}</td>
                                    <td>{{ $topic->last_reply_date() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $topics->links() }}
        </div>
    </div>
</div>
@endsection
