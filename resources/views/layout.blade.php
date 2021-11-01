<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Chào mừng đến với Evi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/frontend/assets/img/favicon.png" rel="icon">
    <link href="public/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="public/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/frontend/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+84 392 261 1811</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <li>En</li>
                    <li><a href="#">De</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.html">Evi</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="public/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Trang Chủ</a></li>
                    <li><a class="nav-link scrollto" href="#about">Giới Thiệu</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="#events">Sự Kiện</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Bộ Sưu Tập</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Barista</a></li>
                    <li class="dropdown"><a href="#"><span>Tài Khoản</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Người dùng</a></li>
                            <li class="dropdown"><a href="#"><span>Tài Khoản</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{URL::to('/admin')}}">Đăng nhập</a></li>
                                    <li><a href="#">Đăng xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Liên Hệ</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Đặt Bàn</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Chào mừng tới <span>EVI</span></h1>
                    <h2>Cà phê là cách mới để nói chào buổi sáng</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto"> Menu</a>
                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Đặt Bàn</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <!-- #main -->
    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>EVI</h3>
                            <p>
                                470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam<br><br>
                                <strong>SDT:</strong>+84 392 261 1811<br>
                                <strong>Email:</strong>tvhieu.20it1@vku.udn.vn
                                ntthanh.20it1@vku.udn.vn<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Liên Kết</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Dịch vụ của chúng tôi</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Thông Tin</h4>
                        <p>Hãy gửi qua email cho chúng tôi</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/frontend/assets/vendor/aos/aos.js"></script>
    <script src="public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="public/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="public/frontend/assets/vendor/php-email-form/validate.js"></script>
    <script src="public/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="public/frontend/assets/js/main.js"></script>

</body>

</html>