@extends('layout.base')
@section('title', 'Home')

@section('content')
    <div class="mb-5 mt-5"><h2 class="text-center">Recent Blog Posts</h2></div>
    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Blog title</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>
                    <p class="card-text"><small class="text-muted"> 3 mins ago</small></p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.jp/150x150.png" class="img-fluid rounded-start" style="float:right;" alt="...">
            </div>
        </div>
        <hr>
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Blog title</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>
                    <p class="card-text"><small class="text-muted"> 3 mins ago</small></p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.jp/150x150.png" class="img-fluid rounded-start" style="float:right;" alt="...">
            </div>
        </div>

    </div>

@endsection