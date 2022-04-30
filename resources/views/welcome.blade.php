<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Feria de Conocimientos</title>
    <!--meta content="width=device-width, initial-scale=1.0" name="viewport"-->
    <meta content="" name="keywords">
    <meta content="" name="description">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Pangolin', serif;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>Feria<span class="fs-3"> de Conocimientos</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        @if (Route::has('login'))
                        @auth
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        @else
                        <a href="#mu-participar-overview" class="nav-item nav-link">Como participar</a>
                        <a href="#mu-pueden-participar-overview" class="nav-item nav-link">Quiénes pueden participar</a>
                        <a href="#mu-premios-overview" class="nav-item nav-link">Premios</a>
                        @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->





        <!-- Hero -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 hero-header mb-5 bg-portada">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Cuidando mis sueños</h1>
                            <p class="text-white pb-3 animated zoomIn">El proyecto “Yo me cuido”, presenta el concurso “Cuidando mis sueños”, que tiene por finalidad compartir información que contribuya al desarrollo integral de las/los adolescentes, teniendo en cuenta el enfoque de derechos, género, diversidad, interculturalidad e inclusión.</p>
                            <a href="{{ route('login') }}" class="btn btn-outline-info btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft btn-lg">Participar</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="{{ asset('img/portada.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5" id='mu-participar-overview'>



            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">¿Cómo participar?</h2>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-12">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Fortalece tus conocimientos, leyendo la información adjunta</h6>
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Responde las preguntas que reforzarán los conocimientos adquiridos</h6>
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Registra correctamente tus datos</h6>
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Espera a la fecha del sorteo y cruza tus deditos para ser la/el elegida/o.</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <!--   <a class="btn btn-primary rounded-pill px-4 me-3" href="">Ir a Documentos</a>-->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/part.png') }}">
                    </div>
                </div>
            </div>




        </div>
        <!-- About End -->

        <!-- About Start -->

        <div class="container-xxl py-5" id='mu-participar-overview'>


            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">¿Quienes pueden partcipar?</h2>
                        </div>
                        <p class="mb-3">Asociación Pataz, en el marco de su proyecto “Yo me Cuido”, presenta el Concurso “Cuidando mis sueños” dirigido a adolescentes (12 años a 17 años 11 meses 29 días) que estudian en los anexos de Chagual, Vista Florida, Suyubamba, Pataz, Zarumilla, Vijus, Nimpana y Chuquitambo. El sorteo se llevará a cabo el 20 de julio del 2022 y sólo será válido para las/los adolescentes que estudian en las zonas donde intervine el Proyecto y que hayan seguido la Ruta para participar.</p>
                        <div class="row g-3">
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <!--   <a class="btn btn-primary rounded-pill px-4 me-3" href="">Ir a Documentos</a>-->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/comop.png') }}">
                    </div>
                </div>
            </div>


        </div>

        <!-- About End -->
        <!-- Service Start -->


        <div class="container-xxl py-5" id="mu-informacion-overview">
            <div class="container px-lg-5">


                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mt-2">Fortalece tus conocimientos, leyendo la información adjunta</h2>
                </div>
                <div class="row g-4">
                    <div class="accordion" id="accordionExample">
                    @foreach ($temas as $tema)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{$tema->valoradicional}}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>{{$tema->nombres}}</strong>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Premios Start -->
        <div class="container-xxl py-5" id="mu-premios-overview">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mt-2">Premios</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <!--ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                        </ul-->
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-1.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Asociación Pataz</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Laptop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-3.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="{{ asset('img/portfolio-3.jpg') }}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Asociación Pataz</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Tablet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-4.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="{{ asset('img/portfolio-4.jpg') }}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Asociación Pataz</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Celular</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Premios End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-portada text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">FERIA DE CONOCIMIENTOS</a>, Cuidando mis sueños.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href=""></a>
                                <a href=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}" defer></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}" defer></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}" defer></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}" defer></script>
    <script src=""></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>