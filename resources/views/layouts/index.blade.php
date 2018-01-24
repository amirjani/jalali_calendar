<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>Dashboard | Remark Admin Template</title>
    <link rel="apple-touch-icon" href="/base/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/base/assets/images/favicon.ico">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/base/assets/css/site.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/global/vendor/chartist/chartist.css">
    <link rel="stylesheet" href="/global/vendor/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="/base/assets/examples/css/dashboard/v1.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="/global/fonts/weather-icons/weather-icons.css">
    <link rel="stylesheet" href="/global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="/global/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="/bootstrap-timepicker/css/timepicker.less">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!--[if lt IE 9]>
    <script src="/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="/global/vendor/media-match/media.match.min.js"></script>
    <script src="/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>

    @yield('header')
    @yield('header-manual')
</head>
<body class="animsition dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="/base/assets/images/logo.png" title="Remark">
            <span class="navbar-brand-text hidden-xs-down"> Weekly Schedule</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>
    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-fw dropdown-mega">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                       role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
                    <div class="dropdown-menu" role="menu">
                        <div class="mega-content">
                            <div class="row">
                                <div class="col-xs-12 col-md-4">
                                    <h5>UI Kit</h5>
                                    <ul class="blocks-2">
                                        <li class="mega-menu m-0">
                                            <ul class="list-icons">
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="advanced/animation.html">Animation</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/buttons.html">Buttons</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/colors.html">Colors</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/dropdowns.html">Dropdowns</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/icons.html">Icons</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="advanced/lightbox.html">Lightbox</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu m-0">
                                            <ul class="list-icons">
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/modals.html">Modals</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/panel-structure.html">Panels</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="structure/overlay.html">Overlay</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/tooltip-popover.html ">Tooltips</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="advanced/scrollable.html">Scrollable</a>
                                                </li>
                                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                    <a href="uikit/typography.html">Typography</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <h5>Media
                                        <span class="tag tag-pill tag-success">4</span>
                                    </h5>
                                    <ul class="blocks-3">
                                        <li>
                                            <a class="thumbnail m-0" href="javascript:void(0)">
                                                <img class="w-full" src="/global/photos/placeholder.png" alt="..." />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="thumbnail m-0" href="javascript:void(0)">
                                                <img class="w-full" src="/global/photos/placeholder.png" alt="..." />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="thumbnail m-0" href="javascript:void(0)">
                                                <img class="w-full" src="/global/photos/placeholder.png" alt="..." />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="thumbnail m-0" href="javascript:void(0)">
                                                <img class="w-full" src="/global/photos/placeholder.png" alt="..." />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="thumbnail m-0" href="javascript:void(0)">
                                                <img class="w-full" src="/global/photos/placeholder.png" alt="..." />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="thumbnail m-0" href="javascript:void(0)">
                                                <img class="w-full" src="/global/photos/placeholder.png" alt="..." />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <h5 class="m-b-0">Accordion</h5>
                                    <!-- Accordion -->
                                    <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                                         role="tablist">
                                        <div class="panel">
                                            <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                                                <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                                                   aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                                    Collapsible Group Item #1
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                                                 role="tabpanel">
                                                <div class="panel-body">
                                                    De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                                                    congressus ostendit alienae, voluptati ornateque accusamus
                                                    clamat reperietur convicia albucius.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                                                <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                                                   data-parent="#siteMegaAccordion" aria-expanded="false"
                                                   aria-controls="siteMegaCollapseTwo">
                                                    Collapsible Group Item #2
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                                                 role="tabpanel">
                                                <div class="panel-body">
                                                    Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                                                    loco ignavi, credo videretur multoque choro fatemur
                                                    mortis animus adoptionem, bello statuat expediunt naturales.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                                                <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                                                   data-parent="#siteMegaAccordion" aria-expanded="false"
                                                   aria-controls="siteMegaCollapseThree">
                                                    Collapsible Group Item #3
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                                                 role="tabpanel">
                                                <div class="panel-body">
                                                    Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                                                    suscipere. Desiderat magnum, contenta poena desiderant
                                                    concederetur menandri damna disputandum corporum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                       aria-expanded="false" role="button">
                        <span class="flag-icon flag-icon-us"></span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-gb"></span> English</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-fr"></span> French</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-de"></span> German</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="/global/portraits/5.jpg" alt="...">
                <i></i>
              </span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                       aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="tag tag-pill tag-danger up">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <div class="dropdown-menu-header">
                            <h5>NOTIFICATIONS</h5>
                            <span class="tag tag-round tag-danger">New 5</span>
                        </div>
                        <div class="list-group">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                                                <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">A new order has been placed</h6>
                                                <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                                                <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Completed the task</h6>
                                                <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                                                <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Settings updated</h6>
                                                <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                                                <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Event started</h6>
                                                <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                                                <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Message received</h6>
                                                <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon md-settings" aria-hidden="true"></i>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                All notifications
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                       aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                        <span class="tag tag-pill tag-info up">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <div class="dropdown-menu-header" role="presentation">
                            <h5>MESSAGES</h5>
                            <span class="tag tag-round tag-info">New 3</span>
                        </div>
                        <div class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="/global/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Mary Adams</h6>
                                                <div class="media-meta">
                                                    <time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>
                                                </div>
                                                <div class="media-detail">Anyways, i would like just do it</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="/global/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Caleb Richards</h6>
                                                <div class="media-meta">
                                                    <time datetime="2017-06-17T12:30:30+08:00">12 hours ago</time>
                                                </div>
                                                <div class="media-detail">I checheck the document. But there seems</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="/global/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">June Lane</h6>
                                                <div class="media-meta">
                                                    <time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>
                                                </div>
                                                <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left p-r-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="/global/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Edward Fletcher</h6>
                                                <div class="media-meta">
                                                    <time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>
                                                </div>
                                                <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                See all messages
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="toggleChat">
                    <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
                       data-url="site-sidebar.tpl">
                        <i class="icon wb-chat" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub">
                        <a href="{{URL::to('/')}}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                        <ul class="site-menu">
                            <li class="site-menu-item active">
                                <a class="animsition-link" href="{{URL::to('/')}}">
                                    <span class="site-menu-title">Set Date Program</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="href="{{URL::to('/daily')}}">
                                    <span class="site-menu-title">Set Weekly Program</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{URL::to('/calander')}}">
                                    <span class="site-menu-title">View Programs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="site-gridmenu">
    <div>
        <div>
            <ul>
                <li>
                    <a href="apps/mailbox/mailbox.html">
                        <i class="icon wb-envelope"></i>
                        <span>Mailbox</span>
                    </a>
                </li>
                <li>
                    <a href="apps/calendar/calendar.html">
                        <i class="icon wb-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="apps/contacts/contacts.html">
                        <i class="icon wb-user"></i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="apps/media/overview.html">
                        <i class="icon wb-camera"></i>
                        <span>Media</span>
                    </a>
                </li>
                <li>
                    <a href="apps/documents/categories.html">
                        <i class="icon wb-order"></i>
                        <span>Documents</span>
                    </a>
                </li>
                <li>
                    <a href="apps/projects/projects.html">
                        <i class="icon wb-image"></i>
                        <span>Project</span>
                    </a>
                </li>
                <li>
                    <a href="apps/forum/forum.html">
                        <i class="icon wb-chat-group"></i>
                        <span>Forum</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="icon wb-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page -->
<div class="page">
    <div class="page-content container-fluid">
        @yield('content')
    </div>
</div>
<!-- End Page -->
<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© 2017 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Weekly Schedule</a></div>
    <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
</footer>
<!-- Core  -->
<script src="/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="/global/vendor/jquery/jquery.js"></script>
<script src="/global/vendor/tether/tether.js"></script>
<script src="/global/vendor/bootstrap/bootstrap.js"></script>
<script src="/global/vendor/animsition/animsition.js"></script>
<script src="/global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="/global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<!-- Plugins -->
<script src="/global/vendor/switchery/switchery.min.js"></script>
<script src="/global/vendor/intro-js/intro.js"></script>
<script src="/global/vendor/screenfull/screenfull.js"></script>
<script src="/global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="/global/vendor/skycons/skycons.js"></script>
<script src="/global/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
<!-- Scripts -->
<script src="/global/js/State.js"></script>
<script src="/global/js/Component.js"></script>
<script src="/global/js/Plugin.js"></script>
<script src="/global/js/Base.js"></script>
<script src="/global/js/Config.js"></script>
<script src="/base/assets/js/Section/Menubar.js"></script>
<script src="/base/assets/js/Section/GridMenu.js"></script>
<script src="/base/assets/js/Section/Sidebar.js"></script>
<script src="/base/assets/js/Section/PageAside.js"></script>
<script src="/base/assets/js/Plugin/menu.js"></script>
<script>
    Config.set('assets', '../assets');
</script>
<!-- Page -->
<script src="/base/assets/js/Site.js"></script>
<script src="/global/js/Plugin/asscrollable.js"></script>
<script src="/global/js/Plugin/slidepanel.js"></script>
<script src="/global/js/Plugin/switchery.js"></script>
<script src="/global/js/Plugin/matchheight.js"></script>
<script src="/base/assets/examples/js/dashboard/v1.js"></script>
<script src="/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

@yield('footer')
@yield('footer-manual')
</body>
</html>