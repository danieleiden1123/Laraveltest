<header class="main-header">
    <!-- Logo -->
    <a href="javascript:void(0);" class="logo">
        <span class="logo-mini">{{env('APP_NAME_SHORT')}}</span>
        <span class="logo-lg">{{env('APP_NAME')}}</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle"
                                 alt="User Image"/>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="javascript:void(0);" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="javascript:void(0);" onclick="logout();" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>