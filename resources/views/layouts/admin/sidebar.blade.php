<div class="sidebar-wrapper">
    <ul class="nav">
        @if(auth()->user()->type === 'admin')
            <li class="@yield('dashboard_nav')">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="@yield('create_school_nav')">
                <a class="nav-link" href="{{ route('school_account.create') }}">
                    <i class="material-icons">person</i>
                    <p>Create school</p>
                </a>
            </li>
            <li class="@yield('school_accounts_nav')">
                <a class="nav-link" href="{{ route('school_account.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>School Accounts</p>
                </a>
            </li>
            <li class="@yield('features_nav')">
                <a class="nav-link" href="{{route('feature.index')}}">
                    <i class="material-icons">notifications</i>
                    <p>Features</p>
                </a>
            </li>
            <li class="@yield('packages_nav')">
                <a class="nav-link" href="{{route('package.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>packages</p>
                </a>
            </li>
            <li class="@yield('licenses_nav')">
                <a class="nav-link" href="{{route('license.create')}}">
                    <i class="material-icons">language</i>
                    <p>licenses</p>
                </a>
            </li>
        @else
            <li class="@yield('dashboard_nav')">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="@yield('student_nav')">
                <a class="nav-link" href="{{route('student.index')}}">
                    <i class="material-icons">language</i>
                    <p>Students</p>
                </a>
            </li>
        @endif
    </ul>
</div>