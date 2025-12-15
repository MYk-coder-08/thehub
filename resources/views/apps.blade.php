{{-- herder --}}
@include('includes.header')
<!-- Carousel Start -->

@php
    $apps = [
        1 => [
            'name' => 'Easy Policy',
            'description' => 'In house insurance management solution',
            'icon' => 'fa-th',
        ],
        2 => [
            'name' => 'Wapx',
            'description' => 'Buy insurance',
            'icon' => 'fa-globe',
        ],
        3 => [
            'name' => 'process maker',
            'description' => 'Memo managenent solution',
            'icon' => 'fa-home',
        ],
        4 => [
            'name' => 'Digital claims Portal',
            'description' => 'Easy way to make claims',
            'icon' => 'fa-book-open',
        ],
        5 => [
            'name' => 'Easy Cheque',
            'description' => 'Easy way to make claims',
            'icon' => 'fa-book',
        ],
        7 => [
            'name' => 'Bid',
            'description' => 'Buy Insurance',
            'icon' => 'fa-globe',
        ],
        7 => [
            'name' => 'Mid',
            'description' => 'Buy Insurance',
            'icon' => 'fa-globe',
        ],
        8 => [
            'name' => 'Ecoronation',
            'description' => 'Buy Insurance',
            'icon' => 'fa-globe',
        ],
        9 => [
            'name' => 'Maid',
            'description' => 'Buy Insurance',
            'icon' => 'fa-ship',
        ],
        10 => [
            'name' => 'Paakow',
            'description' => 'Buy Insurance xxxx',
            'icon' => 'fa-ship',
        ],
    ];
@endphp

<div class="container-fluid p-0 mb-5">
    <div style="display: flex;justify-content: center;margin: 3em;">
        <h1>Welcome to Coronation Application Hub</h1>
    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3" style="background: red">
                        <div class="service-item text-center pt-3">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>dfdkfodefpodf nfvodpif</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div>Primary Url: https://coronation.com</div>
                <div>Secondary Url: https://coronation.com</div>
                <div>Resource Person: Paakow lee</div>
                <div>Phone Number: Paakow lee</div>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach($apps as $menu): ?>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x <?php echo $menu['icon']; ?> text-primary mb-4"></i>
                        <h5 class="mb-3"><?php echo $menu['name']; ?></h5>
                        <p><?php echo $menu['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>


        </div>
    </div>
</div>
<!-- Service End -->






<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">FAQs & Help</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                    Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


@include('includes.footer')
