@extends('admin.layouts.main')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="row">
        <!-- Main content -->
        <main class="">
            <h1 class="my-4 text-center">Admin Dashboard</h1>

            <div class="row text-center">
                <!-- Example Card 1: Total Users -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card bg-primary text-white shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Total Users</h5>
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h2 class="card-text mt-3"></h2>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-light mt-3">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Example Card 2: Comments -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card bg-info text-white shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Total Posts</h5>
                                <i class="fas fa-file-alt fa-2x"></i>
                            </div>
                            <h2 class="card-text mt-3"></h2>
                            <a href="#" class="btn btn-light mt-3">View Details</a>
                        </div>
                    </div>
                </div>

            <!-- Welcome message or additional content -->
          <div class="alert alert-info mt-4" role="alert">
            <h4 class="alert-heading">Welcome, Admin!</h4>
            <p>This is your admin panel. Here you can manage users, view analytics, and access other administrative tools.</p>
        </div>
        </main>
    </div>
</div>
@endsection
