<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sara Deportes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Dicrección</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Contáctanos</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-football text-primary me-2"></i>SARA DEPORTES</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Acerca de</a>
                    <a href="service.html" class="nav-item nav-link">Servicios</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                        <div class="dropdown-menu m-0">
                            <a href="project.html" class="dropdown-item">Our Project</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contactos</a>
                    <a href="" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Get A Quote <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">
                @yield('dos')
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">

                

                <h1 class="display-5 text-uppercase mb-4">We are <span class="text-primary">the Leader</span> in Construction Industry</h1>
                <h4 class="text-uppercase mb-3 text-body">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum tempor sit diam amet diam et eos labore</h4>
                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor</p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Perfect Planning</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Professional Workers</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>First Working Process</p>
                    </div>
                </div>
                <p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>
                <img src="img/signature.jpg" alt="">
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        
            <h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Construction Services</h1>
        </div>

        <div class="row g-5">

        @yield('content')


        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
                </div>
                <p class="mb-5">Nonumy ipsum amet tempor takimata vero ea elitr. Diam diam ut et eos duo duo sed. Lorem elitr sadipscing eos et ut et stet justo, sit dolore et voluptua labore. Ipsum erat et ea ipsum magna sadipscing lorem. Sit lorem sea sanctus eos. Sanctus sit tempor dolores ipsum stet justo sit erat ea, sed diam sanctus takimata sit. Et at voluptua amet erat justo amet ea ipsum eos, eirmod accusam sea sed ipsum kasd ut.</p>
                <a class="btn btn-primary py-3 px-5" href="">Get A Quote</a>
            </div>
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Some Of Our <span class="text-primary">Popular</span> Dream Projects</h1>
        </div>
        <div class="row gx-5">
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                    <ul class="list-inline mb-0" id="portfolio-flters">
                        <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                            <img src="img/portfolio-1.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">All</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                            <img src="img/portfolio-2.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Construction</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                            <img src="img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Renovation</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-5 portfolio-container">
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">We Are <span class="text-primary">Professional & Expert</span> Workers</h1>
        </div>
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Adam Phillips</h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-2.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Dylan Adams</h4>
                            <span>Civil Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Jhon Doe</h4>
                            <span>Interior Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-4.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Josh Dunn</h4>
                            <span>Painter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">What Our <span class="text-primary">Happy Cleints</span> Say!!!</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                <img class="img-fluid w-100 h-100" src="img/testimonial.jpg">
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="testimonial bg-light">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                    clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                    lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                    ipsum.</p>
                            </div>
                        </div>
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                    clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                    lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                    ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Latest <span class="text-primary">Articles</span> From Our Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="35" height="35" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Rebum diam clita lorem erat magna est erat</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="35" height="35" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Rebum diam clita lorem erat magna est erat</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="35" height="35" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Rebum diam clita lorem erat magna est erat</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>WEBUILD</h1>
                </a>
                <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 20px 30px;" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-dark" href="https://htmlcodex.com">HTML Codex</a></p>
                <p class="mb-0">Distributed by <a class="text-dark" href="https://themewagon.com">ThemeWagon</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>