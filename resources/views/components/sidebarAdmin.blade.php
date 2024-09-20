<!-- resources/views/sidebar.blade.php -->
<nav id="sidebar">
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        @php
            $menuItems = [
                ['name' => 'Home', 'url' => 'index.html', 'icon' => 'icon-home'],
                ['name' => 'Ambulances', 'url' => 'ambulances/pageContentAmbulance', 'icon' => 'icon-grid'],
                ['name' => 'Booking', 'url' => 'bookings/index', 'icon' => 'fa fa-bar-chart'],
                ['name' => 'Doctor', 'url' => 'components.doctorView', 'icon' => 'icon-padnote'],
                ['name' => 'Login page', 'url' => 'login.html', 'icon' => 'icon-logout'],
            ];
        @endphp
        @foreach($menuItems as $menuItem)
            <li{{ $menuItem['name'] == 'Home' ? ' class="active"' : '' }}>
                <a href="{{ url($menuItem['url']) }}">
                    <i class="{{ $menuItem['icon'] }}"></i>{{ $menuItem['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
