    @component('header')
    
    @endcomponent


    <!-- Navbar Start -->
    @component('navbar')
    
    @endcomponent


    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/cheese/Blue Cheese3.jfif" alt="" style="height:280px;width:300px;">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ route('register') }}"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Cheese</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/cream/wc1.jfif" alt="" style="height:280px;width:300px;">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ route('register') }}"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Cream</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item" >
                        <div class="position-relative">
                            <img class="img-fluid" src="img/butter/Ghee1.jfif" alt="" style="height:280px;width:500px;">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ route('register') }}"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Butter</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/yogurt/y1.webp" alt="" style="height:280px;">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ route('register') }}"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Yogurt</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Features Start -->
   <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Freshness, quality, local, trusted, variety</h1>
                    <p class="mb-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione laborum consectetur vitae a aperiam quas sint 
                        dolorem ipsa assumenda magnam deserunt quibusdam autem, aut doloribus ipsum eum quaerat nobis?
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Justo magna erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita erat ipsum et lorem et sit</p>
                    <a class="btn rounded-pill py-3 px-5 mt-3" href="" style="background-color:#B0E0E6;">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center py-5 px-4" style="background-color:#B0E0E6;">
                                    <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">10</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Years Experience</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up"></h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Hello</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/animal.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up"></h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Welcome</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center py-5 px-4"  style="background-color:#B0E0E6;">
                                    <img class="img-fluid mb-4" src="img/client.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">51940</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    @component('footer')
    @endcomponent
   