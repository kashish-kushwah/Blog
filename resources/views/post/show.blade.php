@extends('layouts.app')

@section('content')
<main class="flex-shrink-0">
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <!-- Sidebar with author details -->
                <div class="col-lg-3">
                    <div class="d-flex align-items-center mt-lg-5 mb-4">
                        <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                        <div class="ms-3">
                            {{-- <div class="fw-bold">{{ $post->user->name }}</div> <!-- Replace with the post author's name --> --}}
                            <div class="text-muted">{{ $post->category ?? 'General' }}</div> <!-- Replace with the post category -->
                        </div>
                    </div>
                </div>

                <!-- Blog Post Content -->
                <div class="col-lg-9">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ date('F d, Y', strtotime($post->created_at)) }}</div>
                            <!-- Post categories (if applicable)-->
                            @if($post->category)
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category }}</a>
                            @endif
                        </header>

                        <!-- Preview image figure-->
                         <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('images/post/' . $post->image) }}" alt="Post Image" /></figure>

                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{!! $post->content !!}</p>
                        </section>
                    </article>

                    <!-- Comments section-->
                    <section>
                        <h2 class="fw-bolder mb-4">Comments</h2>

                        <!-- Comment form (only for authenticated users)-->
                        @if(auth()->check())
                        <div class="card bg-light mb-4">
                            <div class="card-body">
                                <form action="{{ route('comments.store', $post->id) }}" method="post">
                                    @csrf
                                    <textarea class="form-control mb-3" name="content" rows="3" placeholder="Join the discussion and leave a comment!" required></textarea>
                                    <button class="btn btn-sm btn-primary" type="submit">Comment</button>
                                </form>
                            </div>
                        </div>
                        @else
                        <p>You need to <a href="{{ route('login') }}">login</a> to comment.</p>
                        @endif

                        <!-- Display existing comments -->
                        {{-- @foreach($post->comments as $comment)
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="User Image" />
                            </div>
                            <div class="ms-3">
                                <div class="fw-bold">{{ ucfirst($comment->user->name) }}</div>
                                <p>{{ $comment->content }}</p>
                                <div class="text-muted" style="text-align: right;">
                                    {{ date('d F Y H:i a', strtotime($comment->created_at)) }}
                                </div>
                            </div>
                        </div>
                        @endforeach --}}
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
