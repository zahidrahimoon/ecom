<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo Section -->
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase">
                        <strong class="text-primary">Rapid</strong><strong>Rescue</strong>
                    </div>
                    <div class="brand-text brand-sm">
                        <strong class="text-primary">D</strong><strong>A</strong>
                    </div>
                </a>
            </div>

            <!-- Logout Button -->
            <div class="right-menu list-inline no-margin-bottom">
                <div class="list-inline-item logout">
                    <!-- Logout functionality -->
                    <a href="{{ route('admin.login') }}" class="nav-link">
                        Logout <i class="icon-logout"></i>
                    </a>

                </div>
            </div>

        </div>
    </nav>
</header>
