@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
                                    <td>{{ $topic->title }}</td>
                                    <td>{{ $topic->created_at }}</td>
                                    <td>stubbed</td>
                                    <td>stubbed</td>
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
