@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h1>Topic List</h1>
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
                                <th>Date</th>
                                <th>Replies</th>
                                <th>Last Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($topics as $topic)
                                <tr>
                                    <td><a href="/home/{{ $topic->id }}">{{ $topic->title }}</a></td>
                                    <td>{{ $topic->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $topic->replies->count() }}</td>
                                    <td>{{ $topic->last_reply_date() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
