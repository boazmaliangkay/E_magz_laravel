<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
         
          
        <li class=active><a class="nav-link" href="{{ route('home')}}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
        

        <li class="menu-header">Starter</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"  data-toggle="dropdown"><i class="fas fa-book"></i> <span>Post</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('post.index') }}">Post list</a></li>
          <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">Trash</a></li>
          </ul>
            </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"  data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Category</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('category.index') }}">Category List</a></li>
          </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tag</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('tag.index') }}">Tag List</a></li>
                </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>
                    </ul>
                      </li>
    


         </aside>
  </div>
