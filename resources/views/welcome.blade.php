<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Navigation content here -->
        </nav>

        <main class="py-4">
            <!-- Blog Cards -->
            <div class="container">
                <div class="row">
                    @foreach ($items as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                    @auth
                                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Read More</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary">Read More</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination Links -->
                {{ $items->links() }}  <!-- Add pagination links here -->
            </div>
        </main>

        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <!-- Footer content here -->
        </footer>
    </main>
</body>
</html>
