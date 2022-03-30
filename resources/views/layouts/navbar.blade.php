<ul class="nav justify-content-center nav-pills">
    <li class="nav-item">
        <a class="nav-link {{ $title === 'CRM' ? 'active' : '' }}" aria-current="page" href="/">CRM</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $title === 'Masuk' ? 'active' : '' }}" href="/masuk">Masuk</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $title === 'Daftar' ? 'active' : '' }}" href="/daftar">Daftar</a>
    </li>
    <li class="navbar-item ">
        <a class="nav-link {{ $title === 'Admin' ? 'active' : '' }}" href="/admin">Admin <i class="fa-solid fa-person"></i></a>
    </li>
</ul>

