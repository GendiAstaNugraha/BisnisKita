<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
              <img src="/img/avatar/{{ auth()->user()->avatar }}" alt="" width="50" height="50" class="rounded-circle me-2">
              {{ auth()->user()->nama }}</a>
          <ul class="dropdown-menu dropdown-menu-dark shadow">
              <li><a class="dropdown-item" href="/user/profil">Profil</a></li>
              <li>
                  <hr class="dropdown-divider">
              </li>
              <li>
                  <form action="/keluar" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item" href="#">keluar</button>
                  </form>
              </li>
          </ul>
          <br>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('user') ? 'active' : '' }}" aria-current="page" href="/user">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('user/akun') ? 'active' : '' }}" href="/user/akun">
            <span data-feather="file"></span>
            akun
          </a>
        </li>
      </ul>
    </div>
  </nav>
