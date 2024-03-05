<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGN INGENIEROS | Líderes en conversiones vehículares a GNV y GLP</title>
    <meta name="ROBOTS" content="INDEX,FOLLOW">
    <meta name="description"
        content="AGN INGENIEROS es una empresa peruana especialista en conversión de vehículos a GNV y GLP, con más de 17 años en el mercado.">
    <meta name="keywords"
        content="conversion gnv, conversion glp, financiamiento gnv, gas natural, bono fise, tomaseto, conversion de vehiculos, carro a gas">
    <meta property="og:url" content="https://www.agn.com.pe/inyeccion-directa" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AGN INGENIEROS" />
    <meta property="og:description"
        content="AGN INGENIEROS es una empresa peruana especialista en conversión de vehículos a GNV y GLP, con más de 17 años en el mercado." />
    <!-- <meta property="og:image" content="https://www.agn.com.pe/" /> -->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:creator" content="@AGN">
    <meta name="twitter:title" content="AGN - Líderes en conversiones vehículares a GNV y GLP">
    <meta name="twitter:description"
        content="AGN INGENIEROS es una empresa peruana especialista en conversión de vehículos a GNV y GLP, con más de 17 años en el mercado.">
    <!-- Página web desarrollada por Jhon Maldonado -->
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css" media="all">
    <link rel="stylesheet" href="css/owl.theme.default.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P54KRGH');</script>
    <!-- End Google Tag Manager -->
</head>
<?php
    $endpoint = 'https://youtube.googleapis.com/youtube/v3/playlistItems?part=contentDetails&part=id&part=snippet&maxResults=5&playlistId=PLJmdp_sPFq9IXF4T6MsVyshzXtVl2J2dc&key=AIzaSyDgZ_2MAJVsAJ6RRLJ3_qqYBgh5jI0G9yY';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    $data_yt = json_decode($data, true);
?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P54KRGH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- INIT: MENÚ -->
    <nav class="navbar-bgn navbar navbar-expand-lg px-md-3 px-lg-5 border-bottom z-2">
        <div class="container align-items-center">
            <a class="navbar-brand" href="https://www.agn.com.pe/glp">
                <img src="img/logo_agn.png" alt="">
            </a>
            <div class="">
                <a href="tel:(01) 219 0800" class="btn-llamame a-none">
                    <span class="btn-icon">
                        <i class="bi bi-telephone-fill text-orange"></i>&nbsp; (01) 219-0800
                    </span>
                </a>
            </div>
        </div>
    </nav>
    <!-- END: MENÚ -->

    <!-- INIT: HEADER -->

    <header>
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="img/banner-agn.webp" class="w-100" alt="AGN INGENIEROS - CONVERSIÓN DE VEHÍCULOS A GNV Y GLP">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="form-container">
                        <h2 class="form-title text-center">¡COTIZA AQUÍ!</h2>
                        <form id="form-contact">
                            <div class="form-group">
                                <input type="text" name="form-nombre" id="form-nombre" class="form-control validar"
                                    placeholder="Nombre y Apellido *">
                            </div>
                            <div class="form-group">
                                <input type="email" name="form-email" id="form-email" class="form-control"
                                    placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <input type="number" name="form-celular" id="form-celular"
                                    class="form-control validar validar-celular" placeholder="Celular *">
                            </div>
                            <div class="form-group">
                                <textarea name="form-mensaje" id="form-mensaje" class="form-control validar"
                                    placeholder="Tu mensaje *"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check validar validar-radio">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="color: gray;">
                                        Aceptar los <a href="#" class="text-blue" data-bs-toggle="modal"
                                            data-bs-target="#modal_condiciones">Términos y condiciones</a>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <small class="text-blue">
                                    Complete el formulario y nuestros asesores se pondrán en contacto con usted en
                                    breve.
                                </small>
                            </div>
                            <input type="button" value="ENVIAR SOLICITUD" class="btn-form"
                                onclick="enviar_formulario(event)">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- END: HEADER -->

    <!-- INIT: EXPERIENCIA -->

    <section class="py-5">
        <div class="container">
            <div>
                <div class="exp-title">
                    <div class="exp-title-container">
                        <h2 class="exp-title-primary mb-0 fst-italic">52 000</h2>
                        <h3 class="exp-title-secondary fst-italic">clientes satisfechos</h2>
                    </div>
                </div>
                <h3 class="exp-subtitle text-center fst-italic">¡Queremos que seas el próximo!</h3>
            </div>

            <br>
            <br>
            <div class="owl-carousel owl-theme owl-youtube">
                <?php
                foreach ($data_yt["items"] as $key => $value) {
                    $video = $value["contentDetails"]["videoId"];
                    $is_public = isset($value["contentDetails"]["videoPublishedAt"]) ? true : false;
                    $titulo = $value["snippet"]["title"];
                    // $status = $value["status"]["privacyStatus"];
                    if ($is_public) {
                ?>
                <div class="youtube-testimonio">
                    <div class="youtube-video">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $video; ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="py-3 yt-content mx-4">
                        <h5 class="yt-title fw-bold text-center">
                            <?php echo $titulo; ?>
                        </h5>
                    </div>
                </div>
                <?php }
                } ?>
            </div>

        </div>
    </section>

    <!-- END: EXPERIENCIA -->


    <!-- INIT: CON NOSOTROS TENDRÁS -->
    <section class="py-4">
        <div class="container">
            <div class="beneficios">
                <h2 class="beneficios-title text-center mb-4 text-blue">Con nosotros tendrás:</h2>

                <div class="beneficios-container">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="benefit-item benefit-item-right">
                                <div class="benefit-icon">
                                    <span class="benefit-icon-item">
                                        <i class="bi bi-shield-check"></i>
                                    </span>
                                </div>
                                <div class="benefit-text">
                                    <h6 class="text-blue fw-semibold">Seguridad y Confianza</h6>
                                    <small>
                                        17 años de experiencia con más de 52 mil conversiones.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-item benefit-item-right">
                                <div class="benefit-icon">
                                    <span class="benefit-icon-item">
                                        <i class="bi bi-award"></i>
                                    </span>
                                </div>
                                <div class="benefit-text">
                                    <h6 class="text-blue fw-semibold">Garantía</h6>
                                    <small>
                                        5 años de garantía con equipos italianos originales.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-item benefit-item-right">
                                <div class="benefit-icon text-start">
                                    <span class="benefit-icon-item">
                                        <i class="bi bi-cpu"></i>
                                    </span>
                                </div>
                                <div class="benefit-text text-start">
                                    <h6 class="text-blue fw-semibold">Tecnología</h6>
                                    <small>
                                        Equipos italianos de vanguardia, lo que te generará mayor durabilidad y ahorro.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-item benefit-item-right">
                                <div class="benefit-icon text-start">
                                    <span class="benefit-icon-item">
                                        <i class="bi bi-geo-alt"></i>
                                    </span>
                                </div>
                                <div class="benefit-text text-start">
                                    <h6 class="text-blue fw-semibold">Cerca de ti</h6>
                                    <small>
                                        7 sedes en Lima para brindarte el mejor servicio. <br>
                                        <a href="https://www.agn.com.pe/locales" class="text-green-dark">
                                            Conoce más aquí <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END: CON NOSOTROS TENDRÁS -->

    <!-- INIT: EXPERIENCIA -->

    <section id="formulario-contacto" class="formulario-contacto py-5">
        <div class="container">
            <div class="row rounded">
                <div class="col-12">
                    <div class="card-form-parent">
                        <div class="card-form d-flex align-items-center justify-content-center">
                            <div>
                                <h2 class="fw-bold text-center text-light titulo-locales">
                                    Visítanos en cualquiera de nuestros 7 talleres
                                </h2>
                                <div class="mt-4 text-center">
                                    <a href="tel:(01) 219 0800" class="a-none">
                                        <h3 class="text-center btn-llamame-footer d-inline-block px-4 fw-semibold"
                                            style="padding-top: .7rem; padding-bottom: .7rem; font-weight: 500!important;">
                                            <i class="bi bi-telephone-fill text-g fs-3 text-orange"></i>
                                            (01) 219-0800
                                        </h3>
                                    </a>
                                </div>
                                <div class="form-items mt-4 text-light d-flex justify-content-center">
                                    <ul class="list-form-contact">
                                    <li>
                                        <a href="https://goo.gl/maps/wPCpEbcNP3rrgUfJ8" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>Surquillo:</b> Av. Angamos Este 1600 (Frente a Plaza Hogar)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/tg8TWVEmuk7HLJ8HA" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>Villa El Salvador:</b> Av. Pachacutec Mz. B Lt. 6 Parque Industrial (A una cuadra de la Academia ADUNI)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/sgNicbk9XNE1hh9p6" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>Los Olivos:</b> Av. Angélica Gamarra Mz. N Lt. 23-24 Urb. Santa Rosa de Lima
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/4zJbzHg8nAurB3LE9" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>San Juan de Lurigancho:</b> Av. El Sol 353
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/tuFE6gNGXpSHUUpu6" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>Comas:</b> Av. Universitaria 7235 Mz. G Lt. 6A Urb. Retablo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/3iQ8oYSttmL2AYk56" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>San Martín de Porres:</b> Av. Carlos Izaguirre Mz. F Lt. 2-3-45, Urb. Arizona
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/dDhkPAK5CpBnwwJA7" target="_blank" class="a-none">
                                            <i class="bi bi-geo-alt fs-4"></i> <b>Ate:</b> Av. Metropolitana 773, Urb. Ceres 2da etapa
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END: EXPERIENCIA -->

    <div class="icono-whatsapp">
        <a class="a-none" target="_blank" href="https://api.whatsapp.com/send?phone=51955150547&text=Hola%2C%20vengo%20de%20la%20web!">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
    <footer class="pb-3 pt-5">
        <div class="container px-5 px-md-0">
            <div class="row align-items-start justify-content-between py-3 p-0 px-md-5 px-lg-0 gap-5 gap-lg-0">
                <div class="col-md-10 col-lg-3">
                    <div class="h-100 d-flex flex-column align-items-center" style="max-width: max-content;">
                        <a href="inicio" class="a-none">
                            <img src="img/logo_agn_negativo.png" class="img-fluid px-5" style="opacity: .85;">
                        </a>
                        <div class="text-md-center icons-footer my-3">
                            <a href="https://www.facebook.com/agningenieros/" target="_blank" class="a-none"><i class="bi bi-facebook"></i></a> &nbsp;
                            <a href="https://www.instagram.com/agningenieros.gnv.glp/?hl=es" class="a-none" target="_blank"><i class="bi bi-instagram"></i></a></i> &nbsp;
                            <a href="https://api.whatsapp.com/send?phone=51955150547&text=Hola%2C%20vengo%20de%20la%20web!" class="a-none" target="_blank"><i class="bi bi-whatsapp"></i></a> &nbsp;
                            <a href="https://www.youtube.com/@AGNIngenierosOficial/" class="a-none" target="_blank"><i class="bi bi-youtube"></i></a> &nbsp;
                            <a href="https://www.tiktok.com/@agningenieros" class="a-none" target="_blank"><i class="bi bi-tiktok"></i></a>
                        </div>
                        <div class="item-footer">
                            <a href="tel:(01) 219 0800" class="btn-llamame-footer">
                                <span class="btn-icon">
                                    <i class="bi bi-telephone-fill"></i>&nbsp; (01) 219-0800
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-lg-5  ps-md-5 pe-md-4">
                            <div class="footer-items">
                                <h6>Contenido</h6>
                                <div class="item-footer">
                                    <a href="https://www.agn.com.pe/quienes-somos" class="a-none"><i class="bi bi-buildings"></i> &nbsp; Nosotros</a>
                                </div>
                                <div class="item-footer">
                                    <a href="https://www.agn.com.pe/pago-al-credito" class="a-none"><i class="bi bi-coin"></i> &nbsp; Métodos de Pago</a>
                                </div>
                                <div class="item-footer">
                                    <a href="https://www.agn.com.pe/calcula-tu-ahorro" class="a-none"><i class="bi bi-piggy-bank"></i> &nbsp; Calculadora del ahorro</a>
                                </div>
                                <div class="item-footer">
                                    <a href="https://www.agn.com.pe/noticias-agn" class="a-none"><i class="bi bi-newspaper"></i> &nbsp; Noticias AGN</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 pe-md-5">
                            <div class="footer-items">
                                    <h6 style="border-color: transparent!important;" class="d-none d-md-block">&nbsp;</h6>
                                    <div class="item-footer">
                                        <a href="https://www.agn.com.pe/preguntas-frecuentes" class="a-none"><i class="bi bi-question-circle"></i> &nbsp; Preguntas frecuentes</a>
                                    </div>
                                    <div class="item-footer">
                                        <a href="https://www.agn.com.pe/conversion-gnv" class="a-none"><i class="bi bi-fuel-pump"></i> &nbsp; Conversión GNV</a>
                                    </div>
                                    <div class="item-footer">
                                        <a href="https://www.agn.com.pe/conversion-glp" class="a-none"><i class="bi bi-fuel-pump"></i> &nbsp; Conversión GLP</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <span class="text-center d-block font-weight-bold text-light">
            AGN Ingenieros &copy; <?php echo date('Y'); ?>
            | Todos los derechos reservados.
        </span>
    </footer>
    <div class="modal fade" id="modal_condiciones" tabindex="-1" aria-labelledby="modal_condicionesLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_condicionesLabel">Términos y Condiciones</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-4">
                        <div class="mb-5">
                            <h5 class="fw-bold text-center text-blue titulo-noticias" style="border-bottom: 2px solid #95c262; padding-bottom: 10px;">Todo lo que necesitas saber:</h5>
                        </div>
                        <p>
                            El CLIENTE proporciona los siguientes datos de manera libre. <br><br>
                            El CLIENTE autoriza expresamente a utilizar la información indicada para difundir
                            información comercial o publicidad que sea relevante a los interesas del CLIENTE, referida
                            específicamente a productos o servicios proporcionados por la EMPRESA, por sus empresas
                            vinculadas o por terceros que mantengan una relación contractual directa con la EMPRESA. Del
                            mismo modo, los datos personales indicados en el presente documento podrán ser usados por la
                            EMPRESA para fines de monitoreo o consulta sobre el estado de satisfacción de los productos
                            o servicios ofrecidos. La información proporcionada no será comercializada ni negociada por
                            canal, medio o a persona alguna para fines distintos a los de esta autorización. <br><br>
                            La EMPRESA garantiza los niveles de protección adecuados de la información del CLIENTE.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>
    <div id="isem-loader" class="isem-loader w-100 h-100 bg-secondary d-none">
        <div>
            Cargando...
        </div>
        <div>
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- Archivos de JS -->
    <script src="js/jquery.3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- <script src="js/aos.js"></script> -->
    <script src="js/helpers.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Página web desarrollada por Jhon Maldonado -->
</body>

</html>