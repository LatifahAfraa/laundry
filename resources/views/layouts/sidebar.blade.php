<nav id="sidebarMenu" class="d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
                    <span class="fa fa-home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="fa fa-shirt"></span>
                    Kain masuk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="fa-solid fa-truck-fast"></span>
                    Kain Keluar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="fa-solid fa-users"></span>
                    Customers
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="fa-solid fa-list"></span>
                    Total Pendapatan Bulanan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout.get') }}">
                    <span class="fa-solid fa-sign-out"></span>
                    Logout
                </a>
            </li>

        </ul>
    </div>
</nav>
