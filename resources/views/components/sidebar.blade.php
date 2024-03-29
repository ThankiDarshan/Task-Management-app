<div class="sidebar">
      

    <div class="user-panel mt-3 px-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><h4>Task-Management</h4></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


        <li class="nav-item">
          <a href="{{ route('admindashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li> 
        
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Designation
              </p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Clients
              </p>
            </a>
        </li>
        
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-file"></i>
            <p>
              Tasks
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-edit right"></i>
                <p>Task</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-eye right"></i>
                  <p>Status</p>
                </a>
              </li>
          </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-edit right"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-eye right"></i>
                  <p>Status</p>
                </a>
              </li>
            </ul>
          </li>        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Candidates
              </p>
            </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>