@extends("layouts.app")
@section("content")
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">All Blogs</h2>
                    <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            @forelse ($items as $post)
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    @if(!empty($post->image))
                    <img class="card-img-top" src="{{ asset('images/post/'.$post->image) }}" alt="Blog Image" />
                    @else
                    <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="Default Image" />
                    @endif
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="{{ route('post.show', $post->id) }}">
                            <h5 class="card-title mb-3">{{ $post->title }}</h5>
                        </a>
                        <p class="card-text mb-0">A brief summary or excerpt of the post content can go here.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="small">
                                    <div class="fw-bold">{{ $post->author->name ?? 'Unknown Author' }}</div>
                                    <div class="text-muted">{{ date('F j, Y', strtotime($post->created_at)) }} &middot; </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center">You should create your first blog post.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
