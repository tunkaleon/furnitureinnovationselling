<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">SuperAdmin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ url('admin_index') }}" ><i class="fa fa-fw fa-user-circle"></i>Home <span class="badge badge-success">6</span></a>
                    </li>
 

                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Users</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('adduser') }}">Add new user</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('alluser') }}">All users</a>
                                </li>
                               
                            </ul> 
                        </div>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('furniturecat') }}"><i class="fas fa-fw fa-file"></i> Category </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('adduser') }}"><i class="fas fa-fw fa-file"></i> Report </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>