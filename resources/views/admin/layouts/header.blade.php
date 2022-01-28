<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
    </div>

    <!--logo start-->
    <a href="{{route('admin.dashboard')}}" class="logo"><span class="lite">RAMA 5 RIVERSIDE NOODLE SHOP
            WEBSTIE</span></a>
    <!--logo end-->


    </div>

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- task notificatoin start -->

            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->

            <!-- inbox notificatoin end -->
            <!-- alert notification start-->

            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="profile-ava">
                        <img alt="" src="img/avatar1_small.jpg">
                    </span>
                    <span class="username">Admin</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li>

                        <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{-- <i class="nav-icon fas fa-sign-out-alt gray"></i> --}}
                            <p class="text-white">
                                ออกจากระบบ
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
