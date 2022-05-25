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
        <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/Navbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/RedesSociales.css" rel="stylesheet" type="text/css"/>
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
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/proyectos/al_res_2.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 2-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Construcción Cancha de Minerales 7,000m2</h3>
                        <h5 class="col text-center">Unidad Minera Veta Dorada</h5>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/proyectos/can_mi.jpg" alt=""/>
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
                            <img class="img-fluid" src="img/proyectos/Elec_2.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 4-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Fabricación y Montaje de Estructuras Metálicas</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/proyectos/est_met_1.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 5-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Construcción e Instalación de PTAR Unidad Minera Veta Dorada</h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/proyectos/ptar_1.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Proyecto Item 6-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h3 class="col text-center">Saneamiento para Campamentos Unidad Minera Veta Dorada </h3>
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#proyModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="img/proyectos/sane_1.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
        <?php include ('./includes/modales_proyectos.php'); ?>

        <!-- Clientes Section-->
        <section class="page-section bg-white text-black mb-0" id="clientes">
            <div class="container">
                <!-- Clietnes Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Clientes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-2"><center><img class="img-fluid" src="img/clientes/Claro-Logo-2003.png" alt=""/></center></div>
                    <div class="col-md-3 mb-2"><center><img class="img-fluid" src="img/clientes/mtc.jpg" alt=""/></center></div>
                    <div class="col-md-3 mb-2"><center><img class="img-fluid" src="img/clientes/avinka.jpg" alt=""/></center></div>
                    <div class="col-md-3 mb-2"><center><img class="img-fluid" src="img/clientes/JOHESALOGO.jpg" alt=""/></center></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 p-4 mb-2"><center><img class="img-fluid" src="img/clientes/veta_d.png" alt=""/></center></div><br>
                    <div class="col-md-3 p-4 mb-2"><center><img class="img-fluid" src="img/clientes/logoancky.png" alt=""/></center></div><br>
                    <div class="col-md-3 p-4 mb-2"><center><img class="img-fluid" src="img/clientes/imagina (1).jpg" height="150" width="210"/></center></div>
                    <div class="col-md-3 p-4 mb-2"><center><img class="img-fluid" src="img/clientes/ac_farma.png" alt=""/></center></div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3 p-4 mb-2"><center><img src="img/clientes/Entel_logo_pe.png" height="65" width="250"/></center></div>
                    <div class="col-md-3 p-4 mb-2"><center><img src="img/clientes/Universidad_Privada_San_Juan_Bautista.png" height="150" width="170"/></center></div>
                    <div class="col-md-3 p-4 mb-2"><center><img src="img/clientes/New_Tech_M_Logo_High-res_viewimage.jpg" height="170" width="250"/></center></div>
                    <div class="col-md-3 p-4 mb-2"><center><img class="img-fluid" src="img/clientes/san_fernando.png" alt=""/></center></div>
                </div>
            </div>
        </section>


        <!-- Contact Section-->
        <section class="footer text-white" id="contact" >
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Contactanos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="bg-light divider-custom-line"></div>
                </div>
                <br><br>
                <!-- Contact Section Form-->
                <div class="row justify-content-center" style="color: #808080">
                    <div class="col mb-5 mb-lg-0 justify-content-lg-center">
                        <center><a class="btn btn-outline-light btn-xl mx-1" href="https://www.facebook.com/YGMconstruccionyacabadosSAC/" target="_blank" rel="noopener noreferrer"><i class="fab fa-fw fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-xl mx-1" href="https://instagram.com/ygm_construccionyacabados?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram" target="_blank" rel="noopener noreferrer"></i></a>
                            <a class="btn btn-outline-light btn-xl mx-1" href="https://wa.me/+51982713197?text=¡Estoy+interesado!" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a></center>
                    </div>
                </div>
                <br><br>
                <div class="row justify-content-center">
                    <center>
                        <div class="col justify-content-lg-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.2453416971443!2d-76.99200368518626!3d-12.163692991389519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x753d527f33cec408!2zMTLCsDA5JzQ5LjMiUyA3NsKwNTknMjMuMyJX!5e0!3m2!1ses-419!2spe!4v1653501139046!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </center>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <?php include ('./includes/footer.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
