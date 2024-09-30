@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($post as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if(auth()->check())
                        <!-- If the user is authenticated, link the image to the post page -->
                        <a href="{{ route('post.show', $post->id) }}">
                            <img src="{{ asset('images/post/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                        </a>
                    @else
                        <!-- If the user is not authenticated, link the image to the login page -->
                        <a href="{{ route('login') }}">
                            <img src="{{ asset('images/post/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                        </a>
                    @endif

                    <div class="card-body text-center">
                        <h5 class="card-title">
                            @if(auth()->check())
                                <!-- If the user is authenticated, link the title to the post page -->
                                <a href="{{ route('post.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            @else
                                <!-- If the user is not authenticated, link the title to the login page -->
                                <a href="{{ route('login') }}">
                                    {{ $post->title }}
                                </a>
                            @endif
                        </h5>
                        <p>{{ substr($post->content, 0, 30).'...' }}</p>

                        @if(auth()->check())
                            <!-- If the user is authenticated, show the Read More link to the post -->
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-warning btn-sm">Read More</a>
                        @else
                            <!-- If the user is not authenticated, redirect to the login page -->
                            <a href="{{ route('login') }}" class="btn btn-warning btn-sm">Read More</a>
                        @endif

                        <!-- Show Edit/Delete buttons only if the user is the owner of the post -->
                        {{-- @if(auth()->user()->id == $post->user_id) --}}
                            <div class="mt-2">
                                <!-- Edit Button -->
                                <a href="{{ route('post.update', $post->id) }}" class="btn btn-success btn-sm">Edit</a>
                                
                                <!-- Delete Form -->
                                <form action="{{ route('post.delete', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
