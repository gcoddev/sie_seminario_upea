<div class="side-bar-full">
    <div class="side-box-left ">
        <div class="side-menu border-left border-right p-relative h-100 d-flex justify-content-center">
            <div class="page-active">
                <h2 class="text-uppercase">SEMINARIOS (UPEA)</h2>
            </div>
        </div>
    </div>
    <div class="side-box-right text-stroke border-right text-uppercase">
        <div class="text-inner over-hidden">
            <div class="text-stroke-box">
                <div class="text-stroke-inner">seminarios upea </div>
            </div>
        </div>
    </div>
</div>
<div id="dsn-scrollbar">
    <div class=" inner-content">
        <div class="wrapper ">
            <!-- ========== Slider Parallax ========== -->
            <div class="p-relative h-100">
                <div class="main-slider full-width has-horizontal dsn-header-animation  v-dark-head">

                    <div class="swiper-container slide-inner bg-container dsn-hero-parallax-img  h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide over-hidden">
                                <div class="image-bg w-100 h-100 " data-overlay="5" data-swiper-parallax="50%">
                                    <img class="cover-bg-img" data-dsn-position="10% 10%" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/u.jpg" alt="">
                                </div>
                                <div class="slide-content p-absolute">
                                    <div class="content p-relative">
                                        <div class="metas d-inline-block mb-25">
                                            <span>Seminarios</span>
                                            <span>UPEA</span>
                                        </div>
                                        <div class="d-block"></div>
                                        <a href="#" class="effect-ajax has-box-mod move-circle" data-dsn="parallax" data-dsn-color="#393531" data-dsn-ajax="slider">
                                            <h1 class="title">
                                                UPEA <br>AL SERVICIO DEL PUEBLO
                                            </h1>
                                        </a>
                                        <p class="description border-before mt-25 max-w570">
                                            Sistema de seminarios.. accesible para la comunidad en general.
                                        </p>

                                        <a href="#seminarios" class="link-custom v-light-head background-main image-zoom move-circle mt-30 effect-ajax" data-dsn-ajax="slider" data-dsn="parallax">
                                            seminarios
                                        </a>

                                        <a href="#descargar" class="link-custom v-light-head background-main image-zoom move-circle mt-30 effect-ajax" data-dsn-ajax="slider" data-dsn="parallax">
                                            Descargar Certificados
                                        </a>
                                        <!--    <a href="#contact-modal" class="link-custom v-light-head background-main image-zoom move-circle mt-30 effect-ajax" data-dsn-ajax="slider" data-dsn="parallax">
                                              INSCRIPCIONES
                                          </a> -->


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="dsn-slider-content p-absolute h-100 w-100 ">
                        <div class="dsn-container  d-flex align-items-center">
                            <div class="slider-current-index">01</div>
                        </div>
                    </div>
                    <div class="control-nav p-absolute w-100  d-flex dsn-container align-items-center  justify-content-between ">
                        <div class="dsn-pagination p-relative w-50">
                            <div class="slider-current-index">01</div>
                            <div class="swiper-pagination-control"></div>
                            <div class="slider-total-index"></div>
                        </div>

                        <div class="d-flex">
                            <div class="prev-container">
                                <div class="container-inner">
                                    <div class="triangle"></div>
                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round" stroke-miterlimit="10">
                                            <circle cx="12" cy="12" r="10.5"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="next-container">
                                <div class="container-inner">
                                    <div class="triangle"></div>
                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round" stroke-miterlimit="10">
                                            <circle cx="12" cy="12" r="10.5"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- ========== End Slider Parallax ========== -->
            <section id="seminarios" class="our-work work-list dsn-filter dsn-container dsn-filter p-relative section-margin" data-dsn-title="Our Work">

                <div class="section-title">
                    <span class="tag-heading p-10 mb-15 background-section heading-color">Semimarios</span>
                    <h2 class="heading-h2">SEMINARIOS <br> DISPONIBLES</h2>
                </div>

                <?php if ($taba1) : ?>
                    <div class="projects-list background-main gallery dsn-isotope " data-dsn-item=".work-item">

                        <?php foreach ($taba1 as $k => $va) : ?>

                            <div class="work-item border-bottom photography">

                                <div class="d-grid grid-lg-2 align-items-center">
                                    <div class="title-meta">
                                        <div class="metas">
                                            <span>Fecha limite de inscripcion <?= $va->fecha_fin_insc ?></span>
                                        </div>

                                        <div class="text-inner p-relative">
                                            <a class="text effect-ajax" href="<?= base_url(Hasher::make(58, $va->id_capacitacion)) ?>" data-dsn-ajax="work">
                                                <h4  class="parpadea heading-h2 sec-title has-box-mod move-circle" data-dsn="parallax">
                                                    INSCRIPCIONES <br> CLICK AQUI...
                                                </h4>
                                            </a>
                                        </div>
                                      
                      

                                        <div class="description border-before mt-30">
                                            <h4><?= $va->nombre ?></h4>
                                        </div>


                                    </div>

                                    <div class="box-img p-relative">
                                        <a href="<?= base_url(Hasher::make(58, $va->id_capacitacion)) ?>" data-dsn-ajax="work" class="effect-ajax img-next-box before-z-index" data-overlay="4">
                                            <img style="width:400px; height:500px;" class=" " src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url($va->imagen) ?>" alt="">
                                        </a>
                                    </div>
                                    <div class=" d-flex flex-column justify-content-center h-100">

                                        <div class="footer-content">
                                            <a href="<?= $va->enlace_zom ?>" target="_blank" class="effect-ajax has-box-mod move-circle" data-dsn="parallax" data-dsn-color="#0000FF">
                                                <img style="width:200px; height:100px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/zoom.png" alt="">
                                                <h3 class="">
                                                    ZOOM, CLICK AQUI PARA INGRESAR POR ZOOM  AL SEMINARIO
                                                </h3>

                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach ?>

                    </div>
                <?php else : ?>
                    <!-- ==========  Next Project ========== -->
                    <div class="next-project h-v-100 section-top p-relative v-dark v-dark-head">
                        <div class="p-absolute w-100 h-100 bg-container over-hidden before-z-index" data-overlay="5">
                            <img class="cover-bg-img" alt="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/17.jpg">
                        </div>

                        <div class="dsn-container d-flex flex-column justify-content-center h-100">
                            <div class="footer-content">
                                <a href="project-2.html" class="effect-ajax has-box-mod move-circle" data-dsn="parallax" data-dsn-color="#284762" data-dsn-ajax="next">
                                    <h2 class="title">
                                        NO EXISTE <br> SEMINARIOS DISPONIBLES
                                    </h2>
                                </a>
                                <div class="metas mt-25">
                                    <span>Muchas gracias </span>
                                    <span>POr visitar nuestro sitio</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== End  Next Project ========== -->
                <?php endif ?>
            </section>
            <!-- ========== About Section ========== -->



            <!-- ========== Work Section ========== -->
            <section id="descargar" class="our-work dsn-container dsn-filter p-relative section-margin" data-dsn-title="Lasts Work">
                <div class="section-title">
                    <span class="tag-heading p-10 mb-15 background-section heading-color">Descargar Certificados...</span>
                    <h2 class="heading-h2" id="sin_formulario">NOTA:: <br> Insertar Numero de CI para descargar certificados.</h2>
                </div>
                <div class="entry-box d-flex align-items-center">
                    <label class="mr-20">
                        <h2><i class="fas fa-user heading-color"></i> C.I.</h2>
                    </label>
                    <input onkeyup="buscar_carnetcer(this.value)" id="ci" type="number" name="ci" placeholder="Ingrese su número de carnet aqui, solo numeros" required="required" data-error="el numero de carnet es obligatorio." class="" min="0" maxlength="10" style="color:green; background-color:#02648a91; font-size:28px;">
                </div>

                <div class="filtering d-flex justify-content-between mb-50">
                    <h3 class="title-block border-before">Lista de seminanarios inscritos</h3>
                    <div class="filtering-wrap w-auto">
                        <div class="filtering">
                            <div class="selector"></div>
                            <button type="button" data-filter="*" class="active">Seminarios Inscritos</button>

                        </div>
                    </div>
                </div>

            </section>
            <div id="certificados12">
                <!--    <section  class="our-work dsn-container dsn-filter p-relative section-margin" data-dsn-title="Lasts Work">

                <div class="projects-list gallery work-gallery d-grid grid-md-2 grid-lg-3 dsn-isotope grid" data-dsn-item=".work-item">

                    <div class="work-item p-relative overflow-hidden Photography">
                        <a class="w-100 p-relative effect-ajax" href="project-6.html" data-dsn-ajax="work">
                            <div class="img-next-box p-relative before-z-index" data-overlay="1">
                                <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>grida/assets/img/project/project6/1.jpg" alt="">
                            </div>

                            <div class="box-content w-100 border-before mt-20">
                                <h4 class="title-block sec-title">
                                    The <br> Confrontations
                                </h4>
                                <div class="metas">
                                    <span>Photography</span>
                                </div>

                                <div class="view-project">View Project</div>
                            </div>
                        </a>
                    </div>
                </div>
            </section> -->
            </div>
            <section class="about p-relative dsn-container section-margin" data-dsn-title="Informacion">
                <div class="section-title">
                    <span class="tag-heading p-10 mb-15 background-section heading-color">TOTAL SEMINARIOS</span>

                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-relative text">
                            <p class="mt-10">Los certificados llevan medidas de seguridad, dentro de los cuales estan los codigos QR que contienen datos del participante y direccion de verificacion del certificado, como tambien tiene el codigo con el cual se puede validar dicho certificado.</p>
                            <ul class="mt-30 lest-icon">
                                <li>Codigo QR</li>
                                <li>Codigo Unico de verificacion en una segunda pagina</li>
                                <li>Firma Digital</li>

                            </ul>
                            <h2 class="title-block ">upea<br> AL SERVICIO
                                DEL ESTAMENTO ESTUDIANTIL.</h2>



                            <!--   <a href="#" class="link-custom v-light image-zoom mt-30" data-dsn="parallax">
                                  About Us
                              </a> -->
                        </div>
                    </div>

                    <div class="col-lg-5  ">
                        <div class="box-experience  d-flex justify-content-center flex-column h-100">
                            <div class="numb-ex fw-bold cover-bg" data-dsn-bg="<?= base_url() ?>grida/assets/img/about.gif">
                                <?php $dia = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaC("visitas", '1', "1", "and fecha_visita >= CURDATE() ") ?> <?= $dia ?>
                            </div>
                            <h3 class="mt-30">
                                <span class="letter-stroke">visitas</span>
                                <br>
                                <span class="v-light heading-color p-5">
                                    por dia
                                </span>

                                <div class="numb-ex fw-bold cover-bg" data-dsn-bg="<?= base_url() ?>grida/assets/img/about.gif">
                                    <?php $total = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaC("visitas", '1', "1") ?> <?= $total ?>
                                </div>
                                <span class="v-light heading-color p-5">
                                    total
                                </span>
                            </h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End Next Page ========== -->
            <!-- ========== End Work Section ========== -->


            <!-- ========== End Video Section ========== -->

            <!-- ========== testimonials 2 ========== -->
            <section class="testimonials testimonials-two dsn-container p-relative mb-section dsn-swiper" data-dsn-title="our clients">
                <div class="section-title">
                    <span class="tag-heading p-10 mb-15 background-section heading-color">
                        S.I.E.
                    </span>
<!--                    <h2 class="heading-h2">DEV. <br> 2020</h2>-->
                </div>

                <div class="testimonial-inner ">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial-item">
                                <i class="fas fa-quote-left"></i>
                                <div class="testimonial-content">
                                    <p class="max-w750 p-large">"Si se puede imaginar, se puede programar."</p>
                                </div>

                                <div class="testimonial-author d-flex align-items-center">
                                    <div class="author">
                                        <img src="<?= base_url() ?>img/sie.png" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h4>Ing.</h4>
                                        <h5>Regis </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide testimonial-item">
                                <i class="fas fa-quote-left"></i>
                                <div class="testimonial-content">
                                    <p class="max-w750 p-large">"Desarrollado por el personal del Sistemas de Información y Estadística SIE"</p>
                                </div>

                                <div class="testimonial-author d-flex align-items-center">
                                    <div class="author">
                                        <img src="<?= base_url() ?>img/sie.png" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h4>Ing.</h4>
                                        <h5>Filberto Mamani </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide testimonial-item">
                                <i class="fas fa-quote-left"></i>
                                <div class="testimonial-content">
                                    <p class="max-w750 p-large">"Desarrollado por el personal del Sistemas de Información y Estadística SIE"</p>
                                </div>

                                <div class="testimonial-author d-flex align-items-center">
                                    <div class="author">
                                        <img src="<?= base_url() ?>img/sie.png" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h4>Ing.</h4>
                                        <h5>Santos Limachi</h5>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="control-nav p-absolute w-100  d-flex dsn-container align-items-center  justify-content-between ">
                        <div class="prev-container image-zoom move-circle background-theme" data-dsn="parallax">
                            <svg viewBox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2">
                                </path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45">
                                </polyline>
                            </svg>
                        </div>
                        <div class="next-container image-zoom move-circle background-theme" data-dsn="parallax">
                            <svg viewBox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2">
                                </path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45">
                                </polyline>
                            </svg>
                        </div>
                    </div>


                </div>
            </section>

            <!-- ========== Footer ========== -->
            <footer class="footer border-top background-section">
                <div class="dsn-container">
                    <div class="d-grid grid-sm-2">
                        <div class="footer-item">
                            <a href="#" class="logo-footer m-auto">
                                <img src="<?= base_url() ?>img/fily.png" alt="" class="logo-dark cover-bg-img">
                                <img src="<?= base_url() ?>img/fily.png" alt="" class="logo-light cover-bg-img">
                            </a>
                        </div>

                        <div class="footer-item text-right">
                            <h5 class="sm-title-block mb-10">Nuestras redes sociales</h5>
                            <ul class="box-social">
                                <li data-dsn="parallax">
                                    <a href="https://www.facebook.com/sieupea">FB</a>
                                </li>
                               <!-- <li data-dsn="parallax">
                                    <a href="#">TW</a>
                                </li>
                                <li data-dsn="parallax">
                                    <a href="#">LN</a>
                                </li>
                                <li data-dsn="parallax">
                                    <a href="#">LN</a>
                                </li>-->
                            </ul>
                        </div>

                    </div>

                    <div class="footer-bottom d-grid grid-md-2 border-top pt-30 mt-30">


                        <div class="footer-item">
                            <div class="copyright">
                                <div class="copright-text over-hidden">© 2021 SISTEMA DE SEMINARIOS Designed by <a class="link-hover" data-hover-text="FILY_BOY" href="#" target="_blank">SIE-UPEA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ========== End Footer ========== -->
        </div>
    </div>

</div>
<div class="contact-btn">
    <div class="contact-btn-txt">Login</div>
</div>
<div class="contact-modal background-section">
    <div class="dsn-container contact-inner section-margin">
        <div class="section-title">
            <span class="tag-heading background-section color-heading">Solo para usuarios registrados</span>
            <h2 class="heading-h2">REGISTRE SU USUARIO</h2>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="form-box d-flex flex-column">

                    <form id="contact-form" class="form w-100" method="post" action="#" data-toggle="validator">
                        <div class="messages"></div>
                        <div class="input__wrap controls">
                            <div class="form-group">
                                <div class="entry-box">
                                    <label>USUARIO</label>
                                    <input id="usuario" type="text" name="name" placeholder="Usuario" required="required" data-error="usuario requerido.">
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <div class="entry-box">
                                    <label>PASSWORD</label>
                                    <input id="contrasena" type="text" name="contrasena" placeholder="contraseña" required="required" data-error="contraceña requerido">
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>



                            <div class="text-right">
                                <div class="image-zoom w-auto d-inline-block move-circle" data-dsn="parallax">
                                    <input type="submit" value="INGRESAR" class="v-light">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="contact-content d-flex flex-column p-relative background-main box-padding h-100">
                    <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">
                        INFORMACIONES</h4>

                    <div class="content-bottom">
                        <div class="item">
                            <h5 class="sm-title-block mb-15">fily_boy</h5>
                            <p>sie<br> UPEA<br> 2021</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== End Contact Form Model ========== -->


<!-- ========== Contact Stories ========== -->
<div class="stories-btn">
    <div class="stories-btn-txt">Seminarios</div>
</div>
<div class="dsn-stories dsn-stories-model">
    <div class="close-story"></div>
    <?php foreach ($taba1 as $k => $va) : ?>
        <div class="dsn-stories-gallery">
            <div class="p-relative h-100">
                <a href="<?= base_url($va->imagen); ?>"></a>
                <a href="<?= base_url($va->imagen); ?>"></a>
                <a href="<?= base_url($va->imagen); ?>"></a>
                <a href="<?= base_url($va->imagen); ?>"></a>
            </div>

            <h4 class="title-block">
                <?= $va->nombre ?>
            </h4>
        </div>
    <?php endforeach ?>
</div>



<script type="text/javascript">
    function buscar_carnetcer(ci) {
        if (ci.length >= 4) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(Hasher::make(62)); ?>",
                data: {
                    ci: ci
                },

                success: function(response) {
                    /*  console.log(response);
                  return  false; 
 */
                    $("#certificados12").html(response)
                }
            });
        }


    }

    function guarmelossss(id, idc) {

        /*            if (id_estudiante > 0) {
                        $('#loading').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        document.getElementById('boton'+id).disabled = true; */
        $.ajax({
            url: '<?php echo base_url(Hasher::make(27)); ?>',
            type: 'POST',
            data: {
                id,
                idc
            },
            success: function(response) {
                //alert(response);
                swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
                setTimeout(function() {
                    window.location = '';
                }, 1000);
            }
        });
        /*  } else {
             swal("NOTA!", "LOS DATOS YA EXISTEN", "error");
         } */
    }
</script>

<!--regis parapdeo -->
<style>
    .parpadea {
                                        
    animation-name: parpadeo;
    animation-duration: 2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;

    -webkit-animation-name:parpadeo;
    -webkit-animation-duration: 2s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    }

    @-moz-keyframes parpadeo{  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
    100% { opacity: 1.0; }
    }

     @-webkit-keyframes parpadeo {  
     0% { opacity: 1.0; }
    50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }

      @keyframes parpadeo {  
     0% { opacity: 1.0; }
    50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }</style>