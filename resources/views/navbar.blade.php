<nav class="navbar navbar-expand-lg navbar-light bg-dark bg-opacity-75">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 50px; margin-left: 50px">
    <h5 class="p-2 text-white">Music App</h5>
    <ul class="navbar-nav">
        @role('writer')
        <li class="nav-item active">
          <a class="nav-link text-warning" href="{{ '/' }}"><span class="fas fa-tachometer"></span> Dashboard</a>
        </li>
        {{-- <img src="https://cdn-icons-png.flaticon.com/512/1828/1828673.png" width="20" height="20" class="rounded"> --}}
        @endrole
        @role('admin')
        <li class="nav-item active">
          <a class="nav-link text-warning"href="{{ '/admin' }}"><span class="fas fa-tachometer"></span> Dashboard</a>
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/1828/1828673.png" width="20" height="20" class="rounded"> --}}
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{ '/music' }}"><span class="fas fa-music"></span> Music</a>
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/5723/5723961.png" width="20" height="20" class="rounded"> --}}
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{ '/logs' }}"><span class="fas fa-book"></span> Logs</a>
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/1828/1828490.png" width="20" height="20" class="rounded"> --}}
        </li>
        <li class="nav-item">
        @endrole
          <a class="nav-link text-warning" href="{{ '/recentPost' }}"><span class="fas fa-history"></span> Recent Posts</a>
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/5338/5338926.png" width="20" height="20" class="rounded"> --}}
        </li>
        @role('admin')
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{ route('admin.users.index') }}"><span class="fas fa-users"></span> Users</a>
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/681/681392.png" width="20" height="20" class="rounded"> --}}
        </li>
        @endrole
      </ul>
      <div class="dropdown mx-auto">
                <a class="btn dropdown-toggle text-danger" id="buttt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Welcome! {{Auth::user()->name}}
                </a>
                {{-- <img src="https://cdn-icons-png.flaticon.com/512/2345/2345359.png" width="30" height="30" class="rounded"> --}}
                <div class="dropdown-menu bg-danger bg-opacity-25" aria-labelledby="dropdownMenuButton" id="select3">
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-black" href="/create"><span class="fas fa-plus-circle"></span> Create Post</a>
                        {{-- <img src="https://cdn-icons-png.flaticon.com/512/7589/7589277.png" width="20" height="20" class="rounded"> --}}
                    </li>
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-black" href="/myPost"><span class="fas fa-clipboard"></span> My Post</a>
                        {{-- <img src="https://cdn-icons-png.flaticon.com/512/2920/2920028.png" width="20" height="20" class="rounded"> --}}
                    </li>
                    <li class="nav-item">
                    <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black;"><span class="fas fa-sign-out"></span> Logout</a>
                    {{-- <img src="https://cdn-icons-png.flaticon.com/512/4033/4033019.png" width="20" height="20" class="rounded"> --}}
                    </li>
                </div>
            </div>
</nav>

<style>
  a{
    margin-left: 20px;
  }
</style>
