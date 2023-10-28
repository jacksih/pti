

        <!-- ===== BOX ICONS ===== -->



        {{-- <header class="header" >


            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="">
            </div>
        </header> --}}
        <div id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>


        <div class="l-navbar" id="nav-bar">

            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">Bedimcode</span>
                    </a>

                    <div class="nav__list">
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('adminDashboard') }}" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon' ></i>
                                <span class="nav__name">Dashboard</span>
                            </a>
                            @else
                            <a href="{{ route('userDashboard') }}" class="nav__link active">
                                <i class='bx bx-grid-alt nav__icon' ></i>
                                    <span class="nav__name">Dashboard</span>
                                </a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                        <a href="{{ route('createAcount') }}" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        @endif

                        <a href="/manageAcount" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">kelola akun</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Data</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Analytics</span>
                        </a>
                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>


