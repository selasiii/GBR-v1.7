    @auth
    <header class="p-3 border-bottom sticky-top bg-body-tertiary z-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <code>add logo/hamburger</code>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Menu Item</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Menu Item</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Menu Item</a></li>
                </ul>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">Menu Item</a></li>
                        <li><a class="dropdown-item" href="#">Menu Item</a></li>
                        <li><a class="dropdown-item" href="#">Menu Item</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <!-- Authentication -->
                            @php
                            // Get the current route name
                            $routeName = \Illuminate\Support\Facades\Route::currentRouteName();

                            // Extract the guard name from the route name
                            $guard = explode('.', $routeName)[0] ?? 'web';
                            @endphp
                            <form action="{{ route($guard . '.logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @endauth
