<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/Navbar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include ('./includes/navbar.php'); ?>
        <!-- Masthead-->
        <header class="masthead bg-black text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <br>
                <img class="masthead-avatar mb-5" src="img/logo fondoo negro.jpg" alt="..." />
                <br><br><br><br><br><br><br>
            </div>
        </header>
        <!-- About Section -->
        <?php include ('./includes/about.php'); ?>
        <!-- LT Section-->
        <section class="page-section bg-info portfolio" id="Ltrabajo">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lineas de trabajo</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <!--Lineas de trabajo Items-->
                <div class="row justify-content-center">
                    <!-- LT Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h3 class="col text-center">Ingeniería & Construcción</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#IngeConstru">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/hombre_casco.png" alt=""/>
                        </div>
                    </div>
                    <!-- LT Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h3 class="col text-center">Acabados & Mantenimiento</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#acamant">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/mantenimiento_2.png" alt=""/>
                        </div>
                    </div>
                    <!-- LT Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <h3 class="col text-center">Pisos Industriales</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#piind">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/quitar_fondo-removebg-preview.png" alt=""/>
                        </div>
                    </div>
                    <!-- LT Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Eléctricidad & Telecomunicaciones</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#electte">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/electricista.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include ('./includes/modales_LT.php'); ?>
        <!-- proyectos Section-->
        <section class="page-section bg-warning portfolio" id="proyects">
            <div class="container">
                <!-- Proyecto Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proyectos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Proyecto Grid Items-->
                <!-- Proyecto Item 1-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Almacén de Residuos</h3>
                        <h5 class="col text-center">Unidad Minera Veta Dorada</h5>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/telecomunicaciones.png" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 2-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Construcción Cancha de Minerales 7,000m2</h3>
                        <h5 class="col text-center">Unidad Minera Veta Dorada</h5>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/telecomunicaciones.png" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 3-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Montaje, Armado y Mantenimiento de Tableros Eléctricos.</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/telecomunicaciones.png" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 4-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Fabricación y Montaje de Estructuras Metálicas</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/telecomunicaciones.png" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 5-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Construcción e Instalación de PTAR Unidad Minera Veta Dorada</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/electricista.png" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 6-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Saneamiento para Campamentos Unidad Minera Veta Dorada </h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/telecomunicaciones.png" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                </section>
                <?php include ('./includes/modales_proyectos.php'); ?>
                <!-- Contact Section-->
                <section class="page-section" id="contact">
                    <div class="container">
                        <!-- Contact Section Heading-->
                        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Envianos un correo</h2>
                        <!-- Icon Divider-->
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="bi bi-envelope"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- Contact Section Form-->
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-7">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name"> Ingresa un nombre </label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Completar un nombre.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Footer-->
                <?php include ('./includes/footer.php'); ?>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                </body>
                </html>
