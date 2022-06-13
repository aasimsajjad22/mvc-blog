@extends('layout.base')
@section('title', $post['title'])

@section('content')

    @if($post)
        <div class="card mb-3" >
            <div class="col-md-10">
                <img src="http://placehold.jp/800x400.png" class="img-fluid rounded-start" style="float:right;" alt="...">
            </div>
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <a href="/post/{{$post['id']}}" ><h5 class="card-title">{{ $post['title'] }}</h5></a>
                            <p class="card-text">{{ $post['body'] }}</p>
                            <p class="card-text"><small class="text-muted">{{ $post['created_at'] }}</small></p>
                        </div>
                        <a href="/" ><button class="btn btn-primary" style="margin: 20px; width: 100px;">Back </button></a>

                    </div>
                </div>

        </div>
    @else
        <h2>No recent blog posts</h2>
    @endif

@endsection