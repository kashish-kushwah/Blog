<!-- App header starts -->
<div class="app-header d-flex align-items-center">

    <!-- Toggle buttons start -->
    <div class="d-flex">
        <button class="btn btn-outline-primary me-2 toggle-sidebar" id="toggle-sidebar">
            <i class="bi bi-text-indent-left fs-5"></i>
        </button>
        <button class="btn btn-outline-primary me-2 pin-sidebar" id="pin-sidebar">
            <i class="bi bi-text-indent-left fs-5"></i>
        </button>
    </div>
    <!-- Toggle buttons end -->

    <!-- App brand sm start -->
    <div class="app-brand-sm d-md-none d-sm-block">
        <a href="index.html">
            <img src="{{asset('admin-assets/images/logo-sm.svg')}}" class="logo" alt="Bootstrap Gallery">
        </a>
    </div>
    <!-- App brand sm end -->

    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-none d-lg-flex ms-3">
        <li class="breadcrumb-item">
            <i class="bi bi-house lh-1"></i>
            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">Home</a>
        </li>
        <li class="breadcrumb-item text-secondary">Dashboard</li>
    </ol>
    <!-- Breadcrumb end -->

    <!-- App header actions start -->
    <div class="header-actions">
        
        <div class="dropdown border-start">
            <a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-grid fs-4 lh-1 text-secondary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-md">
                <!-- Row start -->
                <div class="d-flex gap-2 m-2 flex-wrap">
                    <a href="https://www.facebook.com/bootstrapGallery" target="_black"
                        class="g-col-4 p-2 border rounded-2">
                        <img src="{{asset('admin-assets/images/brand-facebook.svg')}}" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="https://dribbble.com/bootstrapgallery" target="_black"
                        class="g-col-4 p-2 border rounded-2">
                        <img src="{{asset('admin-assets/images/brand-dribbble.svg')}}" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="https://twitter.com/web_dashboards" target="_black" class="g-col-4 p-2 border rounded-2">
                        <img src="{{asset('admin-assets/images/brand-twitter.svg')}}" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="https://in.pinterest.com/bootstrapgallery" target="_black"
                        class="g-col-4 p-2 border rounded-2">
                        <img src="{{asset('admin-assets/images/brand-pinterest.svg')}}" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="https://www.behance.net/bootstrapgallery" target="_black"
                        class="g-col-4 p-2 border rounded-2">
                        <img src="{{asset('admin-assets/images/brand-behance.svg')}}" class="img-2x" alt="Admin Themes" />
                    </a>
                </div>
                <!-- Row end -->
            </div>
        </div>
    
       
        <div class="dropdown ms-2">
            <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
                href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('admin-assets/images/user.png')}}" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm">
                <div class="d-grid p-3 py-2">
                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- App header actions end -->

</div>
<!-- App header ends -->