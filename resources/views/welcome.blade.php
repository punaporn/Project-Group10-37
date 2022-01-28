<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rama 5 Riverside Noodle Shop Webstie</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
        * Template Name: Squadfree - v4.3.0
        * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.php"><span>Rama 5 Riverside Noodle Shop Webstie</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">หน้าหลัก</a></li>
                    <li><a class="nav-link scrollto" href="#services">รายการอาหาร</a></li>
                    <li><a class="nav-link scrollto" href="#team">ผู้จัดทำ</a></li>
                    <li><a class="nav-link scrollto" href="#contact">ที่อยู่ร้าน</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">ลงชื่อเข้าใช้</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="content">
                            <h3>ประวัติความเป็นมาของก๋วยเตี๋ยว</h3>
                            <p>
                                ก๋วยเตี๋ยว เป็นหนึ่งในอาหารประเภทบะหมี่ (noodle)
                                ของจีนที่ทำจากแป้งข้าวเจ้าโดยมากจะลวกให้สุกในน้ำเดือด สะเด็ดน้ำ
                                แล้วนำมาใส่เครื่องปรุงชนิดต่างๆ นิยมรับประทานทั้งแบบน้ำและแบบแห้ง
                                นิยมใช้ตะเกียบเป็นเครื่องมือช่วยรับประทาน</p>
                            <p>ในสมัย จอมพล ป. พิบูลสงคราม เป็นนายกรัฐมนตรี
                                ได้มีนโยบายรัฐนิยมที่สนับสนุนให้ประชาชนบริโภคก๋วยเตี๋ยว ซึ่งจอมพล ป.
                                เห็นว่าหากประชาชนหันมาร่วมกันบริโภคก๋วยเตี๋ยว จะเป็นการช่วยเหลือเศรษฐกิจของชาติในตอนนั้น
                                เพื่อให้เงินหมุนเวียนในประเทศ</p>
                            <img src="{{ asset('assets/img/รูป.png') }}">
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
            </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>รายการอาหาร</h2>
                </div>

                <div class="row">
                    <div class="col-lg d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up">
                            <img src="{{ asset('assets/img/ก๋วยเตี๋ยวหมูตุ๋น.jpg') }}" class="img-fluid mb" alt="">
                            <h4 class="title"><a href="">ก๋วยเตี๋ยวหมูตุ๋น</a></h4>
                            <p class="description">ธรรมดา พิเศษ</p>
                            <p class="description">35บาท 45บาท</p>
                        </div>
                    </div>

                    <div class="col-lg d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('assets/img/ก๋วยเตี๋ยวต้มยำ.jpg') }}" class="img-fluid mb" alt="">
                            <h4 class="title"><a href="">ก๋วยเตี๋ยวต้มยำ</a></h4>
                            <p class="description">ธรรมดา พิเศษ</p>
                            <p class="description">35บาท 45บาท</p>
                        </div>
                    </div>

                    <div class="col-lg d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/ก๋วยเตี๋ยวน้ำตก.png') }}" class="img-fluid mb" alt="">
                            <h4 class="title"><a href="">ก๋วยเตี๋ยวน้ำตก</a></h4>
                            <p class="description">ธรรมดา พิเศษ</p>
                            <p class="description">35บาท 45บาท</p>
                        </div>
                    </div>

                    <div class="col-lg d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('assets/img/ก๋วยเตี๋ยวเย็นตาโฟ.jpg') }}" class="img-fluid mb"
                                alt="">
                            <h4 class="title"><a href="">ก๋วยเตี๋ยวเย็นตาโฟ</a></h4>
                            <p class="description">ธรรมดา พิเศษ</p>
                            <p class="description">35บาท 45บาท</p>
                        </div>
                    </div>

                    <div class="col-lg d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/เกาเหลา.png') }}" class="img-fluid mb" alt="">
                            <h4 class="title"><a href="">เกาเหลา</a></h4>
                            <p class="description">ธรรมดา พิเศษ</p>
                            <p class="description">40บาท 50บาท</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counts Section ======= -->

        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->

        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->

        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->

        </div><!-- End testimonial item -->

        </div><!-- End testimonial item -->


        </div><!-- End testimonial item -->


        </div><!-- End testimonial item -->

        </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
        </div>

        </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>ผู้จัดทำ</h2>
                </div>

                <div class="row">

                    <div class="col-lg">
                        <div class="member" data-aos="fade-up">
                            <div class="pic mb "><img src="{{ asset('assets/img/team/team.1.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>นางสาว พรรณพร โตนวล</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                            <div class="pic mb"><img src="{{ asset('assets/img/team/team.2.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>นาย กฤตภัค สกุลวัชรโยธิน</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic mb"><img src="{{ asset('assets/img/team/team.3.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>นาย ภูริพัฒน์ ยาวิไชย</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="member" data-aos="fade-up">
                            <div class="pic mb"><img src="{{ asset('assets/img/team/team.4.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>นาย ศรัณย์ ศรีทอง</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>ที่อยู่ร้าน</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.130013526231!2d100.4940877!3d13.8312306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b064718a541%3A0x3adb3f587910d4a6!2z4LiB4LmL4Lin4Lii4LmA4LiV4Li14LmL4Lii4Lin4Lij4Li04Lih4LiZ4LmJ4Liz4Lie4Lij4Liw4Lij4Liy4LihNQ!5e0!3m2!1sth!2sth!4v1629383004704!5m2!1sth!2sth"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/img/page.png') }}" width="300" height="500">;
                                </div>

                            </div>

                    </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <p>
                                <strong>Phone:</strong> 0865541717 <br>
                                <strong>facebook:</strong> ก๋ยวเตี๋ยวริมน้ำพระราม 5<br>
                            </p>

                        </div>
                    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
