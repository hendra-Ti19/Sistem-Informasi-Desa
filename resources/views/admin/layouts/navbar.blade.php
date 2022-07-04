<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                {{-- <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon" />
                    </div>
                </form>
                <!-- / Search form --> --}}
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">

                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            @if (auth()->user()->masyarakat_id == 0)
                                <img class="avatar rounded-circle" alt="Image placeholder"
                                    src="{{ asset('storage/foto-masyarakat/user.png') }}" />
                            @else
                                <img class="avatar rounded-circle" alt="Image placeholder"
                                    src="{{ asset('storage/'.auth()->user()->masyarakat->foto) }}" />
                            @endif
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('admin/profile') }}">
                            <i class="lni lni-user me-3"></i>
                            User : {{ auth()->user()->username }}
                        </a>
                        <a class="dropdown-item d-flex align-items-center">
                            <i class="lni lni-shield me-3"></i>
                            Role : {{ auth()->user()->is_admin == true ? 'Admin' : 'User' }}
                        </a>

                        <div role="separator" class="dropdown-divider my-1"></div>
                        <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <ion-icon name="log-out-outline"></ion-icon>
                                &nbsp; Logout
                            </button>
                        </form>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
