        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{ url('/home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>R</b>TM</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b style="font-size: 89%;">Real Time Monitoring</b></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
                </a>
                <br>
                <form method="POST" action="{{route('browse::detail')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="url" placeholder="Example-http://indiabudget.nic.in" class="form-control" style="height:25px;margin-top:-7px">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning btn-flat" style="height:25px;margin-top:-7px">GO</button>
                          </span>
                    </div></div>
                    {{csrf_field()}}
                </form>
                <!-- Navbar Right Menu -->
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                {{--<li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('adminlte_lang::message.notifications') }}</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> {{ trans('adminlte_lang::message.newmembers') }}
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">{{ trans('adminlte_lang::message.viewall') }}</a></li>
                    </ul>
                </li--}}
                <!-- Tasks Menu -->
                {{--<li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('adminlte_lang::message.tasks') }}</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            {{ trans('adminlte_lang::message.tasks') }}
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% {{ trans('adminlte_lang::message.complete') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">{{ trans('adminlte_lang::message.alltasks') }}</a>
                        </li>
                    </ul>
                </li--}}
                @if (Auth::guest())
                {{--
                                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                --}}
                @else
                        <!-- User Account Menu
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="{{ Gravatar::get($user->email) }}" class="user-image" alt="User Image"/>
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                        <p>
                            {{ Auth::user()->name }}
                            <small>{{ trans('adminlte_lang::message.login') }} Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="col-xs-4 text-center">
                            <a href="#">{{ trans('adminlte_lang::message.followers') }}</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
                        </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ url('/settings') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ trans('adminlte_lang::message.signout') }}
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input type="submit" value="logout" style="display: none;">
                            </form>

                        </div>
                    </li>
                </ul>
                </li>
                @endif
                        <!-- Control Sidebar Toggle Button
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
                </ul>
                </div>
            </nav>
        </header>