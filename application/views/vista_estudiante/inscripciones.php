<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from ft.hashtheme.com/ev/evanta-preview3/evanta/index_particle.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 16:12:13 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/vista/assets/img/favicon.ico" /> -->
	<title>WEBINAR - UPEA</title>
	<link href="<?php echo base_url(); ?>assets/vista/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700|Muli:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/fonts/icofont.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/css/cd-headline.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/venobox/css/venobox.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/owlcarousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/owlcarousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vista/assets/css/style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/lib/alertify.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/themes/alertify.core.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/themes/alertify.default.css" />

</head>

<body>

	<!-- START PRELOADER -->
	<div class="preloader">
		<div class="loadscreen">
			<div class="loadscreen-in">
				<!-- <img class="img-fluid" src="<?php echo base_url(); ?>assets/vista/assets/img/preloader-logo.png" alt=""> -->
			</div>
		</div>
	</div>
	<!-- END PRELOADER -->

	<!-- START NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="">
				<!-- <img style="width:20% " class="img-fluid" src="<?php echo base_url(); ?>assets/vista/unnamed.png"  alt=""> -->
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				MENU
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item ticket-btn">
						<a class="nav-link" href="https://www.sistemas.upea.bo"><i class="icofont icofont-plane-ticket"></i> Ing. Sistemas</a>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item ticket-btn">
						<a class="nav-link" href="https://upea.bo"><i class="icofont icofont-plane-ticket"></i> UPEA</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVBAR -->

	<!-- START SLIDER PARTICLES -->
	<section id="home" class="particles home-particles section-back-image" data-background="<?php echo base_url(); ?>assets/vista/assets/img/bg/promo-bg-2.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 home-particles-text text-center">
					<div class="cd-intro">
						<h2 class="cd-headline clip is-full-width">
							<span class="cd-words-wrapper">
								<b class="is-visible">BIENVENIDO</b>
								<b>SEDES ACADEMICAS DESCONCENTRADAS</b>
								<b>CICLO DE WEBINAR</b>
							</span>
						</h2>
					</div>
					<!-- <h3>"derecho ACD"</h3> -->
					<p> Seminarios organizados por VICERRECTORADO para inscripciones y entrega de certificados</p>
					<div class="home-coming-counter text-center">
						<div class="countdown-container animated infinite pulse" id="clock"></div>
					</div>
					<div class="home-btn-wrapper text-center">
						<a href="#about" class="js-scroll-trigger btn-home-2">INSCRIPCION EN LINEA</a>

						<!-- <a href="#about" class="js-scroll-trigger btn-home-2">ZOOM</a> -->

						<a href="#certificados" class="js-scroll-trigger btn-home-2">CERTIFICADOS</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- START ABOUT -->
	<section id="about" class="section-padding">
		<div class="container">
			<div class="row">
				<?php foreach ($taba1 as $k => $va) { ?>

					<div class="col-lg-5 col-md-5 col-sm-12">
						<div class="about-image">
							<img class="img-fluid" src="<?= base_url($va->imagen); ?>" alt="" />
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-7 col-md-7 col-sm-12">
						<div class="section-title">
							<h3> <?= $va->nombre ?> </h3>
							<span></span>
							<div class="mx-auto col-lg-12">
								<div class="contact">

									<div class="row">
										<div class="form-group col-md-12">
											<h4><b><?= $va->expositor ?></b> </h4>
											<p><?= $va->descripcion ?></p>


										</div>

										<div class="col-lg-4 col-xs-12"><br>
											<?php if ($va->fecha_fin_insc >= date('Y-m-d')) { ?>
												<button class="btn purple btn-outline btn-circle m-b-10 btn-lg" data-toggle="modal" data-target="#nuevo_datos<?= $va->id_capacitacion ?>"><i class="fa fa-plus"></i> INSCRIBIR</button>
											<?php } ?>
										</div>



										<div class="modal" id="nuevo_datos<?= $va->id_capacitacion ?>" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content ">
													<div class="modal-header" style="background:#9B59B6;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
														<button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
														<h4 class="modal-title"><strong style="color:#fff;">INSCRIPCIONES</strong></h4>
													</div>
													<form method="post" id="guardar_nuevo_inscripcion_estudiante" enctype="multipart/form-data">
														<input type="hidden" name="id_capacitacion" id="id_capacitacion" value="<?php echo $va->id_capacitacion; ?>">

														<div class="modal-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
																<div class="form-group">
																	<label class="form-label">SU NUMERO DE CARNET IDENTIDAD</label>
																	<div class="input-group margin-bottom-15">
																		<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
																		<input type="text" onkeyup="buscar_carnet(this.value,<?= $va->id_capacitacion ?>)" class="form-control input-lg" placeholder="Ingresar carnet..." min="0" maxlength="20" name="ci" required>
																	</div>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-md-12" id="ver_contenido<?= $va->id_capacitacion ?>">

															</div>
														</div>
														<div class="modal-footer">
															<!-- <button type="submit" class="btn purple btn-outline btn-circle m-b-10 btn-lg" id="boton<?= $va->id_capacitacion ?>"><span class="fa fa-save"></span> GUARDAR -DATOS</button> -->
															<button type="button" class="btn purple btn-outline btn-circle m-b-10 btn-lg" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>
														</div>
													</form>
													<hr>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">

							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="single-feature">
									<div class="single-feature-icon">
										<i class="icofont icofont-microphone-alt"></i>
									</div>
									<div class="single-feature-text">
										<div class="social-buttons margin-top-20">
											<h3><?= $va->fecha_inicio ?> <?= explode(" ", fecha_literal($va->fecha_inicio, '5'))[0] ?> <?= $va->hora ?></h3>
											<p>UNIRSE A LA REUNIÓN ZOOM:
												<a target="_black" href="https://zoom.us/j/94484836415?pwd=NC8yc1lZbUhLRXdqNUNrOTFSSFFZUT09">
													<img style="width: 100%" class="img-responsive" src="<?php echo base_url(); ?>assets/alert/ZOOM.jpg"></a>
												<br>
												<a target="_black" href="https://zoom.us/j/94484836415?pwd=NC8yc1lZbUhLRXdqNUNrOTFSSFFZUT09">LINK INGRESAR AL TALLER</a> <br>
												ID de reunión: 944 8483 6415 <br>
												Código de acceso: 567532
											</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- end col -->
			</div>
			<!--- END ROW -->
		</div>
		<!--- END CONTAINER -->

	<?php } ?>



	<!--          <div class="schedule-single">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                        <img class="rounded  img-fluid" src="assets/img/speakers/person5.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="schedule-single-info">
                                            <h4>Welcome & Registration</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                            <span class="post-admin"><a href="#"><i class="icofont icofont-business-man-alt-3"></i>Kyle Mark</a></span>
                                            <span class="post-date"><i class="icofont icofont-clock-time"></i>24 Dec 2017</span>
                                            <span class="post-comment"><i class="icofont icofont-location-pin"></i>Theater Room 5</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                        <a href="#" class="schedule-btn">View Details</a>
                                    </div>
                                </div>
                            </div> -->







	</section>
	<!-- END ABOUT -->

	<!-- START FAQ -->
	<section id="certificados" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h3>Entrega de Certificados </h3>
						<span></span>
						<p></p>
					</div>
				</div>
				<!-- end col -->

				<div class="row faq-tab">
					<div class="col-lg-4 col-md-12 col-sm-12 col-12">
						<ul id="tabsJustifiedfaq" class="nav nav-tabs">

							<li class="nav-item"><a href="#" data-target="#faq2" data-toggle="tab" class="nav-link">Sobre los certificados ?<i class='icofont icofont-rounded-right'></i></a>
							</li>
							<li class="nav-item"><a href="#" data-target="#faq3" data-toggle="tab" class="nav-link active">Recoger mi certificado<i class='icofont icofont-rounded-right'></i></a>
							</li>

						</ul>
					</div>
					<!-- end col -->
					<div class="col-lg-8 col-md-12 col-sm-12 col-12">
						<div id="tabsJustifiedContentfaq" class="tab-content">

							<div id="faq2" class="tab-pane fade">
								<h4>Informacion</h4>
								<p>Los certificados llevan medidas de seguridad, dentro de los cuales estan los codigos QR que contienen datos del participante y direccion de verificacion del certificado, como tambien tiene el codigo con el cual se puede validar dicho certificado. </p>
								<ul class="list-group">
									<li class="list-group-item">Codigo QR</li>
									<li class="list-group-item">Codigo Unico de verificacion en una segunda pagina</li>
									<li class="list-group-item">Firma Digital</li>
								</ul>
							</div>
							<div id="faq3" class="tab-pane fade active show">

								<p><b>NOTA : </b>PARA IMPRIMIR SU CERTIFICADO DEBE INGRESAR SU CARNET DE IDENTIDAD</p>
								<div class="alert alert-info">
									BUSCAR CON CARNET DE IDENTIDAD
									<form method="post" id="guardar_nuevo_inscripcion_estudiante" enctype="multipart/form-data">
										<div class="inner-addon right-addon margin-bottom-15">
											<i class="fa fa-user"></i>
											<input type="text" onkeyup="buscar_carnetcer(this.value)" class="form-control input-lg" placeholder="Ingresar carnet..." min="0" maxlength="20" name="ci" />
										</div>


									</form>

								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-md-12" id="ver_contenido"></div>
								</div>


							</div>
						</div>
					</div>
					<!-- end row -->
				</div>
				<!--- END ROW -->
			</div>
			<!--- END CONTAINER -->
	</section>
	<!-- END FAQ -->

	<script>
		function buscar_carnetcer(ci) {
			$.post('<?php echo base_url(Hasher::make(266)); ?>', {
				ci
			}, function(data) {
				$("#ver_contenido").html(data)
			});
		}
	</script>


	<!-- <section>
			<div class="container">
				<div class="card">
					<div class="card-header">
						<h3 align="center">
							Únete a un grupo de <span class="font-weight-bold text-info">WhatsApp</span> donde se compartirán todos los <span class="font-weight-bold text-info">seminarios y otras actividades académicas</span>.
						</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
								<div class="boucher-promo">
									<img style="width: 60%" src="<?php echo base_url(); ?>assets/vista/images.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
								<div class="boucher-promo">
									<a href="https://chat.whatsapp.com/Jpl6Ru441BWFNnbIOnBU6H" class="btn btn-group btn-success" style="border-radius: 10px" target="_blank">Grupo Motivación de Vida 💓 I </a>
								</div>
								<br>
								<div class="boucher-promo">
									<a href="https://chat.whatsapp.com/GYjeLE2PIn6KrvLEctN5sB" class="btn btn-group btn-success" style="border-radius: 10px" target="_blank">Grupo Motivación de Vida 💓 II</a>
								</div>
								<br>
								<div class="boucher-promo">
									<a href="https://chat.whatsapp.com/EAc2It9TgWNE7jZMUJK8fC" class="btn btn-group btn-success" style="border-radius: 10px" target="_blank">Grupo Motivación de Vida 💓 III</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<br>
	<hr>
	<!--  -->
	<section id="boucher" class="section-padding overlay section-back-image" data-background="<?php echo base_url(); ?>assets/vista/assets/img/bg/promo-bg-2.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
					<div class="boucher-promo">
						<h3>Universidad Pública de el Alto </h3>
						<p>DIRECCIÓN:
							Av. Sucre A s/n
							Zona Villa Esperanza
							Correo electrónico: info@upea.bo
							Sede central</p>

					</div>
				</div>
			</div>
		</div>
	</section>






	<!-- Latest jQuery -->
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/bootstrap/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/cd-headline.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/jquery.particleground.min.js"></script>
	<script type="text/javascript">
		$('.particles').particleground({
			dotColor: '#ccc',
			lineColor: '#5cbdaa'
		});
	</script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/jquery.countdown.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/venobox/js/venobox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/wow.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/scrolltopcontrol.js"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/form-contact.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
	<script src="<?php echo base_url(); ?>assets/vista/assets/js/scripts.js"></script>
	<script type="text/javascript">
		/* function buscar_carnet(ci){
				$.post('<?php echo base_url(Hasher::make(26)); ?>', {ci}, function(data) {
					$("#ver_contenido").html(data)
				});
			} */
	</script>
</body>



<!-- Mirrored from ft.hashtheme.com/ev/evanta-preview3/evanta/index_particle.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 16:15:46 GMT -->

</html>











<script type="text/javascript">
	function buscar_carnet(ci, id) {
		$.post('<?php echo base_url(Hasher::make(26)); ?>', {
			ci,
			id
		}, function(data) {
			$("#ver_contenido" + id).html(data)
		});
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