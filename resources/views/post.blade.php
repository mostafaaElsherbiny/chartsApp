@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">post</div>
                <h1>views {{ $postview }}</h1>
                {{ $users }}
                <div class="card-body">
                        <div class="row">

                    <div class="card col-md-12" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->body }}</p>
                            <a href="{{ route('posts.charts',$post->id) }}">chart</a>
                        </div>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
