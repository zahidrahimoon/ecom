<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            @php
            $stats = [
            [
            'title' => 'All Doctors',
            'icon' => 'fas fa-user-md', // Replace with the correct Font Awesome icon class
            'value' => \App\Models\Doctor::all()->count(),
            ],
            [
            'title' => 'All Ambulances',
            'icon' => 'fas fa-ambulance', // Replace with the correct Font Awesome icon class
            'value' => \App\Models\Ambulance::all()->count(),
            ],
            [
            'title' => 'Total Bookings',
            'icon' => 'fas fa-book', // Replace with the correct Font Awesome icon class
            'value' => \App\Models\Booking::all()->count(),
            ],
            [
            'title' => 'Active Users',
            'icon' => 'fas fa-user', // Replace with the correct Font Awesome icon class
            'value' => \App\Models\User::all()->count(),
            ],
            ];
            @endphp
            @foreach($stats as $stat)
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="{{ $stat['icon'] }}"></i></div><strong>{{ $stat['title'] }}</strong>
                        </div>
                        <div class="number dashtext-{{ $loop->iteration }}">{{ $stat['value'] }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: {{ rand(30, 70) }}%" aria-valuenow="{{ rand(30, 70) }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-{{ $loop->iteration }}"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    <footer class="footer">
        <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="no-margin-bottom">2024 &copy; Rapid Rescue created by <a target="_blank" href="https://github.com/zahidrahimoon">Zahid Rahimoon</a>.</p>
            </div>
        </div>
    </footer>
</div>
