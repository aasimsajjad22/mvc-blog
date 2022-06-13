@extends('layout.base')
@section('title', 'Home')

@section('content')
    <div class="mb-5 mt-5"><h2 class="text-center">Recent Blog Posts</h2></div>

    @if(count($posts))
    <div class="card mb-3" >
        @foreach($posts as $post)
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <p class="card-text">{{ $post['body'] }}</p>
                        <p class="card-text"><small class="text-muted">{{ $post['created_at'] }}</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="http://placehold.jp/150x150.png" class="img-fluid rounded-start" style="float:right;" alt="...">
                </div>
            </div>
            <hr>
        @endforeach
    </div>
    @else
        <h2>No recent blog posts</h2>
    @endif

@endsection