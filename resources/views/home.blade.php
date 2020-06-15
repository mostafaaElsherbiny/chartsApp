@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                    @foreach ($posts as $post)
                    <div class="card col-md-6" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->body }}</p>
                          <a href="{{ route('post.show',$post->id) }}" class="btn btn-primary">show the post</a>
                        </div>
                      </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
