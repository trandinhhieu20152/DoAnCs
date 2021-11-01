@extends('layout')
@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    <img src="public/frontend/assets/img/about.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                        velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                        mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>TẠI SAO LÀ CHÚNG TÔI</h2>
            <p>Tại Sao Chọn Coffe Chúng Tôi</p>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <span>01</span>
                    <h4>Quy Trình</h4>
                    <p> Thu hoạch và tuyển chọn hạt cafe chặt chẽ.Những hạt cà phê xanh được chọn làm nguyên liệu để
                        rang cafe đến từ những vùng đất đỏ Bazan tốt nhất trên cao nguyên Việt Nam. Để cho ra những
                        ly cà phê có hương vị lôi cuốn, hấp dẫn….</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="200">
                    <span>02</span>
                    <h4>Công nghệ</h4>
                    <p>Công nghệ ủ cafe giúp tạo hương vị cafe khác biệt. Công nghệ ủ giúp kích thích hạt cafe tiết
                        ra tinh dầu tự nhiên. Từ đó, làm tăng hàm lượng cafeine và hương thơm từ bên trong hạt
                        cafe.Giúp café không mất hương vị sau khi rang
                    </p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <span>03</span>
                    <h4>Nhân Viên</h4>
                    <p>Rang cà phê không phải là nghề mà ai cũng làm được. Yêu cầu đầu tiên là khả năng phân biệt,
                        nếm vị chính xác. Cùng với đó là khả năng vận hành máy rang cafe chuẩn để hạt cafe đạt chất
                        lượng tốt nhất.</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Why Us Section -->

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Menu</h2>
            <p>Menu Của Evi</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">Tất cả</li>
                    <li data-filter=".filter-starters">Trà Sữa</li>
                    <li data-filter=".filter-salads">Coffe</li>
                    <li data-filter=".filter-specialty">Trà</li>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6 menu-item filter-starters">
                <img src="public/frontend/assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Lobster Bisque</a><span>$5.95</span>
                </div>
                <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
                <img src="public/frontend/assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Bread Barrel</a><span>$6.95</span>
                </div>
                <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
                <img src="public/frontend/assets/img/menu/cake.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Crab Cake</a><span>$7.95</span>
                </div>
                <div class="menu-ingredients">
                    A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
                <img src="public/frontend/assets/img/menu/caesar.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Caesar Selections</a><span>$8.95</span>
                </div>
                <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
                <img src="public/frontend/assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Tuscan Grilled</a><span>$9.95</span>
                </div>
                <div class="menu-ingredients">
                    Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
                <img src="public/frontend/assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Mozzarella Stick</a><span>$4.95</span>
                </div>
                <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
                <img src="public/frontend/assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Greek Salad</a><span>$9.95</span>
                </div>
                <div class="menu-ingredients">
                    Fresh spinach, crisp romaine, tomatoes, and Greek olives
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
                <img src="public/frontend/assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Spinach Salad</a><span>$9.95</span>
                </div>
                <div class="menu-ingredients">
                    Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
                <img src="public/frontend/assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Lobster Roll</a><span>$12.95</span>
                </div>
                <div class="menu-ingredients">
                    Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                </div>
            </div>

        </div>

    </div>
</section><!-- End Menu Section -->

<!-- ======= Events Section ======= -->
<section id="events" class="events">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Sự Kiện</h2>
            <p>Nhận Tổ Chức Sự Kiện Tại Quán</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="public/frontend/assets/img/event-birthday.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Tiệc sinh nhật</h3>
                            <div class="price">
                                <p><span>$189</span></p>
                            </div>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                    in voluptate velit.</li>
                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="public/frontend/assets/img/event-private.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Private Parties</h3>
                            <div class="price">
                                <p><span>$290</span></p>
                            </div>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                    in voluptate velit.</li>
                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="public/frontend/assets/img/event-custom.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Custom Parties</h3>
                            <div class="price">
                                <p><span>$99</span></p>
                            </div>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                    in voluptate velit.</li>
                                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Events Section -->

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Chỗ ngồi</h2>
            <p>Đặt Bàn</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Họ Và Tên"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                        data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Số Điện Thoại"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" name="date" class="form-control" id="date" placeholder="Ngày"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="time" id="time" placeholder="Giờ" data-rule="minlen:4"
                        data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="Số lượng người"
                        data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mô Tả"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                    confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Đặt Bàn</button></div>
        </form>

    </div>
</section><!-- End Book A Table Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Trải Nghiệm</h2>
            <p>Khách Hàng Để Lại Ý Kiến</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                            rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                            risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="public/frontend/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                            alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                            cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                            legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="public/frontend/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                            alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                            veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                            minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="public/frontend/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                            alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                            fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                            dolore labore illum veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="public/frontend/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                            alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                            veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                            culpa fore nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="public/frontend/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                            alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Bộ Sưu Tập</h2>
            <p>Những Tấm Ảnh Checkin Tại Quán</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-1.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-2.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-3.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-4.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-5.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-6.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-7.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="public/frontend/assets/img/gallery/gallery-8.jpg" class="gallery-lightbox"
                        data-gall="gallery-item">
                        <img src="public/frontend/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Gallery Section -->

<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>BARISTA</h2>
            <p>Thông Tin</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="public/frontend/assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Walter White</h4>
                            <span>Master Chef</span>
                        </div>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <img src="public/frontend/assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Sarah Jhonson</h4>
                            <span>Patissier</span>
                        </div>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                    <img src="public/frontend/assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>William Anderson</h4>
                            <span>Cook</span>
                        </div>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Chefs Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Liên Hệ</h2>
            <p>Liên hệ chúng tôi</p>
        </div>
    </div>

    <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 550px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4594.543710503172!2d108.25109316962958!3d15.974948039695036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1635734747702!5m2!1svi!2s"
            frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Vị Trí:</h4>
                        <p>470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam</p>
                    </div>

                    <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>Giờ mở cửa:</h4>
                        <p>
                            Thứ 2-Thứ 7:<br>
                            11:00 AM - 23:00 PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>tvhieu.20it1@vku.udn.vn</p>
                        <p>ntthanh.20it1@vku.udn.vn</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>SDT:</h4>
                        <p>+84 392 261 811</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Họ Và Tên"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu Đề"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="8" placeholder="Nội Dung"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Gửi Phản Hồi</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection