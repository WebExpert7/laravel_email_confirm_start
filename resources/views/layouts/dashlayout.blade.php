<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="logo">
            <h4><a href="{{ url('/') }}">Light <strong>Blue</strong></a></h4>
        </div>

        {{--  <-- right side bar-->  --}}
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="name">LB Package <sup class="text-warning fw-bold">4.0</sup></span></a>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-pencil"></i> <span class="name">Forms</span></a>
                    <ul id="forms-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="form_account.html">Account</a></li>
                        <li class=""><a href="form_article.html">Article</a></li>
                        <li class=""><a href="form_elements.html">Elements</a></li>
                        <li class=""><a href="form_validation.html">Validation</a></li>
                        <li class=""><a href="form_wizard.html">Wizard</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
                    <ul id="stats-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="stat_statistics.html">Stats</a></li>
                        <li class=""><a href="stat_charts.html">Charts</a></li>
                        <li class=""><a href="stat_realtime.html">Realtime</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
                    <ul id="ui-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="ui_buttons.html">Buttons</a></li>
                        <li class=""><a href="ui_dialogs.html">Dialogs</a></li>
                        <li class=""><a href="ui_notifications.html">Notifications</a></li>
                        <li class=""><a href="ui_icons.html">Icons</a></li>
                        <li class=""><a href="ui_tabs.html">Tabs</a></li>
                        <li class=""><a href="ui_accordion.html">Accordion</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>
                    <ul id="components-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="component_calendar.html">Calendar</a></li>
                        <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
                        <li class=""><a href="component_gallery.html">Gallery</a></li>
                        <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
                        <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
                        <li class=""><a href="component_list_groups.html">List Groups</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
                    <ul id="tables-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
                        <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
                    <ul id="grid-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="grid_basic.html">Basic</a></li>
                        <li class=""><a href="grid_live.html">Live</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
                    <ul id="special-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                        <li class=""><a href="special_invoice.html">Invoice</a></li>
                        <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                        <li><a target="_blank" href="login.html">Login</a></li>
                        <li><a target="_blank" href="error.html">Error Page</a></li>
                        <li><a href="landing.html" data-no-pjax>Landing</a></li>
                        <li><a href="../light/index.html" data-no-pjax title="Light Blue Transparent Light version">Light <sup class="text-warning fw-bold">new</sup></a></li>
                        <li><a href="../white/index.html" data-no-pjax title="Light Blue Transparent White version">White <sup class="text-warning fw-bold">new</sup></a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
                    <ul id="menu-levels-collapse" class="panel-collapse collapse">
                        <li><a href="#">Item 1.1</a></li>
                        <li><a href="#">Item 1.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                            <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                                    <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.1</a></li>
                                        <li><a href="#">Item 3.2</a></li>
                                        <li><a href="#">Item 3.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Item 2.2</a></li>
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                                    <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.4</a></li>
                                        <li><a href="#">Item 3.5</a></li>
                                        <li><a href="#">Item 3.6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
            <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
            <ul class="sidebar-labels">
                <li>
                    <a href="#">
                        <!-- yep, .circle again -->
                        <i class="fa fa-circle text-warning"></i>
                        <span class="label-name">My Recent</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-gray"></i>
                        <span class="label-name">Starred</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-danger"></i>
                        <span class="label-name">Background</span>
                    </a>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Projects</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Sales Report</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                    </div>
                    <small>Calculating x-axis bias... 65%</small>
                </div>
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                    </div>
                    <small>Provide required notes</small>
                </div>
            </div>
        </nav>    
        {{--  <-- right side bar-->  --}}
        <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.png" alt="">
                                {{ Auth::user()->name }}
                            </li>
                            <li role="presentation">
                                <a href="" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <!-- <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form><i class="glyphicon glyphicon-off"></i></a></li>
                    
                </ul>
            </div>
        </header>
        </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- common libraries. required for every page-->
<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
<script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/widgster/widgster.js') }}"></script>
<script src="{{ asset('lib/underscore/underscore.js') }}"></script>

<!-- common application js -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Light Version</div>
        <div>
            <a href="../light/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page libs -->
        <script src="{{ asset('lib/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('lib/jquery.sparkline/index.js') }}"></script>

        <script src="{{ asset('lib/backbone/backbone.js') }}"></script>
        <script src="{{ asset('lib/backbone.localStorage/backbone.localStorage-min.js') }}"></script>

        <script src="{{ asset('lib/d3/d3.min.js') }}"></script>
        <script src="{{ asset('lib/nvd3/build/nv.d3.min.js') }}"></script>

        <!-- page application js -->
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="{{ asset('js/chat.js') }}"></script>

        <!-- page template -->
        <script type="text/template" id="message-template">
            <div class="sender pull-left">
                <div class="icon">
                    <img src="img/2.png" class="img-circle" alt="">
                </div>
                <div class="time">
                    just now
                </div>
            </div>
            <div class="chat-message-body">
                <span class="arrow"></span>
                <div class="sender"><a href="#">Tikhon Laninga</a></div>
                <div class="text">
                    <%- text %>
                </div>
            </div>
        </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
