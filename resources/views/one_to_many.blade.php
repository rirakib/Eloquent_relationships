@extends('main')
@section('title','one to many')
@section('content')

<h1 class="text-center mt-3 mb-3">One to Many</h1>

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card shadow p-2">
                    <h2>{{$post->title}}</h2>
                    @foreach ($post->comments as $comment)
                        <p>{{$comment->comment}}</p>
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection