@extends('admin.layouts.main')
@section('content')
  
<div class="container-fluid justify-content-center">
  <div class="row">

      <!-- Main content -->
      <main class="">
          <h1 class="my-4">Admin Dashboard</h1>

          <div class="row">
              <!-- Example Card 1 -->
              <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card bg-primary text-white">
                      <div class="card-body">
                          <h5 class="card-title">Total Users</h5>
                          <p class="card-text"></p>
                          <a href="{{ route('admin.users.index') }}" class="btn btn-light">View Details</a>
                      </div>
                  </div>
              </div>
              <!-- Example Card 2 -->
              <div class="col-md-6 col-lg-3 mb-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Comments</h5>
                        <p class="card-text"> </p>
                        <a href="#" class="btn btn-light">View Details</a>
                    </div>
                </div>
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
