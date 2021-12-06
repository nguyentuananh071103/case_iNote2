<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('backend/css/style.min.css')}}">
</head>

<body>
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="/" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">Elegant</span>
                        <span class="logo-subtitle">Dashboard</span>
                    </div>

                </a>
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('notes.list')}}">
                            <span class="icon document" aria-hidden="true">
                            </span>Note
                        </a>
                    </li>
                    <li>
                        <a  href="{{route('categories.list')}}">
                            <span class="icon folder" aria-hidden="true"></span>Categories
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="categories.html">All categories</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('users.list')}}">
                            <span class="icon image" aria-hidden="true"></span>User
                        </a>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon paper" aria-hidden="true"></span>Pages
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="pages.html">All pages</a>
                            </li>
                            <li>
                                <a href="new-page.html">Add new page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
{{--        <div class="sidebar-footer">--}}
{{--            <a href="##" class="sidebar-user">--}}
{{--            <span class="sidebar-user-img">--}}
{{--                <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>--}}
{{--            </span>--}}
{{--                <div class="sidebar-user-info">--}}
{{--                    <span class="sidebar-user__title">Nafisa Sh.</span>--}}
{{--                    <span class="sidebar-user__subtitle">Support manager</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
    </aside>
    <div class="main-wrapper">
        <!-- ! Main nav -->l
        <nav class="main-nav--bg">
            <div class="container main-nav">
                <div class="main-nav-start">
                    <div class="search-wrapper">
                        <i data-feather="search" aria-hidden="true"></i>
                        <input type="text" placeholder="Enter keywords ..." required>
                    </div>
                </div>
                <div class="main-nav-end">
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                    </button>
                    <div class="lang-switcher-wrapper">
                        <ul class="lang-menu dropdown">
                            <li><a href="##">English</a></li>
                            <li><a href="##">French</a></li>
                            <li><a href="##">Uzbek</a></li>
                        </ul>
                    </div>
                    <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                        <span class="sr-only">Switch theme</span>
                        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                    </button>
                    <div class="notification-wrapper">
                        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                            <span class="sr-only">To messages</span>
                            <span class="icon notification active" aria-hidden="true"></span>
                        </button>
                        <ul class="users-item-dropdown notification-dropdown dropdown">
                            <li>
                                <a href="##">
                                    <div class="notification-dropdown-icon info">
                                        <i data-feather="check"></i>
                                    </div>
                                    <div class="notification-dropdown-text">
                                        <span class="notification-dropdown__title">System just updated</span>
                                        <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="##">
                                    <div class="notification-dropdown-icon danger">
                                        <i data-feather="info" aria-hidden="true"></i>
                                    </div>
                                    <div class="notification-dropdown-text">
                                        <span class="notification-dropdown__title">The cache is full!</span>
                                        <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="##">
                                    <div class="notification-dropdown-icon info">
                                        <i data-feather="check" aria-hidden="true"></i>
                                    </div>
                                    <div class="notification-dropdown-text">
                                        <span class="notification-dropdown__title">New Subscriber here!</span>
                                        <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="link-to-page" href="##">Go to Notifications page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-user-wrapper">
                        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                            <span class="sr-only">My profile</span>
                            <span class="nav-user-img">
            <picture><source srcset="{{asset('backend/img/avatar/avatar-illustrated-02.webp')}}" type="image/webp"><img src="{{asset('backend/img/avatar/avatar-illustrated-02.png')}}" alt="User name"></picture>
          </span>
                        </button>
                        <ul class="users-item-dropdown nav-user-dropdown dropdown">
                            <li><a href="##">
                                    <i data-feather="user" aria-hidden="true"></i>
                                    <span>{{\Illuminate\Support\Facades\Auth::user()->name??''}}</span>
                                </a></li>
                            <li><a class="danger" href="{{route("admin.logout")}}">
                                    <i data-feather="log-out" aria-hidden="true"></i>
                                    <span>Log out</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ! Main -->
        @yield('content')
        <!-- ! Footer -->
        <footer class="footer">
            <div class="container footer--flex">
                <div class="footer-start">
                    <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
                                                     rel="noopener noreferrer">elegant-dashboard.com</a></p>
                </div>
                <ul class="footer-end">
                    <li><a href="##">About</a></li>
                    <li><a href="##">Support</a></li>
                    <li><a href="##">Puchase</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
<!-- Chart library -->
<script src="{{asset('backend/plugins/chart.min.js')}}"></script>

<!-- Icons library -->
<script src="{{asset('backend/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('backend/js/script.js')}}"></script>
</body>
</html>
