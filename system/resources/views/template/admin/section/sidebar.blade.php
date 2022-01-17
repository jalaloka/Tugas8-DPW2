

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">
          @if (Auth::check())
              {{ request()->user()->username }}
              @else
              silakan login
          @endif
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
      
            <li class="nav-item">
              <a href="{{ url('admin/dashboard') }}" class="nav-link">
                <p>Dashboard </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/article') }}" class="nav-link">
                <p>Article</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/user') }}" class="nav-link ">
                <p>User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/coment') }}" class="nav-link ">
                <p>coment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('home') }}" class="nav-link ">
                <p>Go to Front</p>
              </a>
            </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>