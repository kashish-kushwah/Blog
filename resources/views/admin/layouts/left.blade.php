<!-- Sidebar wrapper start -->
<nav id="sidebar" class="sidebar-wrapper">

    <!-- App brand starts -->
    <div class="app-brand px-3 py-2 d-flex align-items-center">
      <a href="{{ route('admin.dashboard') }}">
        <h2>Blog</h2>
      </a>
    </div>
    <!-- App brand ends -->
  
    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
      <ul class="sidebar-menu">
        <li class="active current-page">
          <a href="{{ route('admin.dashboard') }}">
            <i class="bi bi-pie-chart"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.users.index') }}">
            <i class="bi bi-bar-chart-line"></i>
            <span class="menu-text">User Manager</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- Sidebar menu ends -->
  
  </nav>
  <!-- Sidebar wrapper end -->
  