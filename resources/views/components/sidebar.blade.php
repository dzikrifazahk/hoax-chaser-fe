<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Hoax Chaser</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">HC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('admin/dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('admin/community') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('admin.community') }}"><i class="fas fa-users"></i> <span>Community</span></a>
            </li>
            <li class="{{ Request::is('admin/news') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('admin.news') }}"><i class="fa-regular fa-newspaper"></i><span>News</span></a>
            </li>
            <li class="{{ Request::is('admin/debunking*') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('admin.debunking') }}"><i class="fa-regular fa-check-circle"></i><span>Debunking</span></a>
            </li>
            <li class="">
                <a class="nav-link"
                    href="{{ route('admin.news') }}"><i class="fa fa-graduation-cap"></i><span>Education Events</span></a>
            </li>
            <li class="">
                <a class="nav-link"
                    href="{{ route('admin.news') }}"><i class="fa fa-certificate"></i><span>Trusted Source</span></a>
            </li>
            <li class="">
                <a class="nav-link"
                    href="{{ route('admin.news') }}"><i class="fa fa-globe"></i><span>Url Request</span></a>
            </li>
            <li class="">
                <a class="nav-link"
                    href="{{ route('admin.news') }}"><i class="fa fa-user-plus"></i><span>Users</span></a>
            </li>
        </ul>


        </div>
    </aside>
</div>
