<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('backend/img/logohv2.png')}}" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <!--Custom style.css-->
    <link rel="stylesheet" href="{{asset('backend/assets/css/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('backend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/fontawesome.css')}}">
    <!--Animate CSS-->
    <link rel="stylesheet" href="{{asset('backend/assets/css/animate.min.css')}}">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="{{asset('backend/assets/css/chartist.min.css')}}">
    <!--Map-->
    <link rel="stylesheet" href="{{asset('backend/assets/css/jquery-jvectormap-2.0.2.css')}}">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="{{asset('backend/assets/js/calendar/bootstrap_calendar.css')}}">
    <!--Nice select -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/nice-select.css')}}">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

    <title>Dash board amdin</title>
</head>

<body>
    <!--Page loader-->
    <!-- <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div> -->
    <!--Page loader-->

    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">

            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
                <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> Evi<span
                                class="small"></span></a></h3>
                </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">

                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button"
                                class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">5</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                            <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-danger">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown"
                                aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle"
                                            src="{{asset('backend/img/logohv2.png')}}" width="50px"
                                            height="50px">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                            </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Tìm kiếm.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('backend/img/logohv2.png')}}" alt="Adam" class="rounded-circle"
                                    width="40px" height="40px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i>
                                    <?php 
                                        $name = Session::get('name');
                                        if($name){
                                            echo $name;
                    
                                        }
                                    ?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::to('/logout')}}"><i
                                        class="fa fa-power-off pr-2"></i> Đăng
                                    xuất</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="{{asset('backend/img/logohv2.png')}}" alt="" class="rounded-circle" />
                        <p><strong>Văn Hiếu</strong></p>
                        <span class="text-primary small"><strong>Manager</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="{{URL::to('/dashboard')}}" onclick="toggle_menu('dashboard');" class=""><i
                                        class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Tổng quan </span>
                                </a>
                            </li>

                            <li class="parent">
                                <a href="{{URL::to('/user-account')}}" class=""><i class="fa fa-user mr-3"></i>
                                    <span class="none">Người dùng </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="{{URL::to('/admin-table')}}" class=""><i class="fa fa-table mr-3"></i>
                                    <span class="none"> Đơn đặt bàn </span>
                                </a>
                            </li>


                            <li class="parent">
                                <a href="#" onclick="toggle_menu('editors'); return false" class=""><i
                                        class="fa fa-pencil-square-o mr-3"></i>
                                    <span class="none">Quản lý <i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="editors">
                                    <li class="child"><a href="{{URL::to('/all-category-products')}}" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i>Quản lý danh mục sản phẩm</a></li>
                                    <li class="child"><a href="{{route('Product.index')}}" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Quản lí sản phẩm</a></li>
                                    <li class="child"><a href="ckeditor-document.html" class="ml-4"><i
                                                class="fa fa-angle-right mr-2"></i> Quản lí bài viết</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="{{url('/admin-contact')}}" class=""><i class="fa fa-comment-o mr-3"> </i>
                                    <span class="none">Phản hồi từ khách hàng </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            @yield('admin_content')
        </div>

        <!--Main Content-->

    </div>


    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!--Popper JS-->
    <script src="{{asset('backend/assets/js/popper.min.js')}}"></script>
    <!--Bootstrap-->
    <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
    <!--Sweet alert JS-->
    <script src="{{asset('backend/assets/js/sweetalert.js')}}"></script>
    <!--Progressbar JS-->
    <script src="{{asset('backend/assets/js/progressbar.min.js')}}"></script>
    <!--Flot.JS-->
    <script src="{{asset('backend/assets/js/charts/jquery.flot.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts/jquery.flot.categories.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts/jquery.flot.stack.min.js')}}"></script>
    <!--Chart JS-->
    <script src="{{asset('backend/assets/js/charts/chart.min.js')}}"></script>
    <!--Chartist JS-->
    <script src="{{asset('backend/assets/js/charts/chartist.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts/chartist-data.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts/demo.js')}}"></script>
    <!--Maps-->
    <script src="{{asset('backend/assets/js/maps/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/assets/js/maps/jvector-maps.js')}}"></script>
    <!--Bootstrap Calendar JS-->
    <script src="{{asset('backend/assets/js/calendar/bootstrap_calendar.js')}}"></script>
    <script src="{{asset('backend/assets/js/calendar/demo.js')}}"></script>
    <!--Nice select-->
    <script src="{{asset('backend/assets/js/jquery.nice-select.min.js')}}"></script>

    <!--Custom Js Script-->
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    >>>>>>> a56d8c5a0f1ce10b939412777bcef20908eaf9e0
    <!--Custom Js Script-->
    <script>
    //Nice select
    $('.bulk-actions').niceSelect();
    </script>
</body>

</html>