<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url(); ?>img/favicon.ico">

	<title>seminarios  upea</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/skin_color.css">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

	<div class="wrapper">
		<div id="loader"></div>

		<header class="main-header">
			<div class="d-flex align-items-center logo-box justify-content-start">
				<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
				</a>
				<!-- Logo -->
				<a href="#" class="logo">
					<!-- logo-->
					<div class="logo-lg">
						<span class="light-logo"><img src="<?= base_url(); ?>asset/images/logo-dark-text.png" alt="logo"></span>
						<span class="dark-logo"><img src="<?= base_url(); ?>asset/images/logo-light-text.png" alt="logo"></span>
					</div>
				</a>
			</div>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item d-md-none">
							<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
								<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
							</a>
						</li>
						<li class="btn-group nav-item d-none d-xl-inline-block">
							<a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
								<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group nav-item d-none d-xl-inline-block">
							<a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
								<i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group nav-item d-none d-xl-inline-block">
							<a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
								<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav">
						<li class="btn-group nav-item d-lg-inline-flex d-none">
							<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
								<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group d-lg-inline-flex d-none">
							<div class="app-menu">
								<div class="search-bx mx-5">
									<form>
										<div class="input-group">
											<input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
											<div class="input-group-append">
												<button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</li>
						<!-- Notifications -->
						<li class="dropdown notifications-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
								<i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
							</a>
							<ul class="dropdown-menu animated bounceIn">

								<li class="header">
									<div class="p-20">
										<div class="flexbox">
											<div>
												<h4 class="mb-0 mt-0">Notifications</h4>
											</div>
											<div>
												<a href="#" class="text-danger">Clear All</a>
											</div>
										</div>
									</div>
								</li>

								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu sm-scrol">
										<li>
											<a href="#">
												<i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-primary"></i> Nunc fringilla lorem
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
											</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all</a>
								</li>
							</ul>
						</li>

						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
								<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
							</a>
							<ul class="dropdown-menu animated flipInX">
								<li class="user-body">

									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url(Hasher::make(3)) ?>"><i class="ti-lock text-muted mr-2"></i> Salir</a>
								</li>
							</ul>
						</li>

						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
								<i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<!-- sidebar-->
			<section class="sidebar position-relative">
				<div class="multinav">
					<div class="multinav-scroll" style="height: 100%;">
						<!-- sidebar menu-->
						<ul class="sidebar-menu" data-widget="tree">
							<li class="header">MENU DEL ADMINISTRADOR</li>
							<li class="treeview">
								<a href="#">
									<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
									<span>SEMINARIOS</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?php echo base_url(Hasher::make(24)) ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CREAR SEMINARIOS</a></li>

								</ul>


								
							</li>
							<li class="treeview">
								<a href="#">
									<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
									<span>INICIO</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?php echo base_url(Hasher::make(20)) ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>INICIO</a></li>


								</ul>
							</li>

							<?php if ($this->ion_auth->in_group(array('admin'))) : ?>
								<li class="header">ADM. USUARIOS</li>
								<li class="treeview">
									<a href="#">
										<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
										<span>usuarios</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo base_url(Hasher::make(64)) ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crear usuario</a></li>
										<!-- 									<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
									<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
									<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
									<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
									<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li> -->
									</ul>
								</li>
							<?php endif ?>



							<li class="header">SALIR</li>
							<li class="treeview">
								<a href="#">
									<i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
									<span>salir</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?php echo base_url(Hasher::make(3)) ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>SALIR</a></li>

								</ul>
							</li>

						</ul>

					</div>
				</div>
			</section>

		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				
				<?= $output; ?>
				
			</div>
		</div>





		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right d-none d-sm-inline-block">
				<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">SIE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">UPEA</a>
					</li>
				</ul>
			</div>
			&copy; 2021 <a href="https://www.facebook.com/fily.mamani/" target="_blank">fily_boy</a>. sie.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar">

			<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div> <!-- Create the tabs -->
			<ul class="nav nav-tabs control-sidebar-tabs">
				<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
				<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane active" id="control-sidebar-home-tab">
					<div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>
						<p>Users</p>
						<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
					</div>
					<div class="lookup lookup-sm lookup-right d-none d-lg-block">
						<input type="text" name="s" placeholder="Search" class="w-p100">
					</div>
					<div class="media-list media-list-hover mt-20">
						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-success" href="#">
								<img src="../images/avatar/1.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Tyler</strong></a>
								</p>
								<p>Praesent tristique diam...</p>
								<span>Just now</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-danger" href="#">
								<img src="../images/avatar/2.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Luke</strong></a>
								</p>
								<p>Cras tempor diam ...</p>
								<span>33 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-warning" href="#">
								<img src="../images/avatar/3.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-primary" href="#">
								<img src="../images/avatar/4.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-success" href="#">
								<img src="../images/avatar/1.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Tyler</strong></a>
								</p>
								<p>Praesent tristique diam...</p>
								<span>Just now</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-danger" href="#">
								<img src="../images/avatar/2.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Luke</strong></a>
								</p>
								<p>Cras tempor diam ...</p>
								<span>33 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-warning" href="#">
								<img src="../images/avatar/3.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-primary" href="#">
								<img src="../images/avatar/4.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

					</div>

				</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>
						<p>Todo List</p>
						<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
					</div>
					<ul class="todo-list mt-20">
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_1" class="filled-in">
							<label for="basic_checkbox_1" class="mb-0 h-15"></label>
							<!-- todo text -->
							<span class="text-line">Nulla vitae purus</span>
							<!-- Emphasis label -->
							<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_2" class="filled-in">
							<label for="basic_checkbox_2" class="mb-0 h-15"></label>
							<span class="text-line">Phasellus interdum</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_3" class="filled-in">
							<label for="basic_checkbox_3" class="mb-0 h-15"></label>
							<span class="text-line">Quisque sodales</span>
							<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_4" class="filled-in">
							<label for="basic_checkbox_4" class="mb-0 h-15"></label>
							<span class="text-line">Proin nec mi porta</span>
							<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_5" class="filled-in">
							<label for="basic_checkbox_5" class="mb-0 h-15"></label>
							<span class="text-line">Maecenas scelerisque</span>
							<small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_6" class="filled-in">
							<label for="basic_checkbox_6" class="mb-0 h-15"></label>
							<span class="text-line">Vivamus nec orci</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_7" class="filled-in">
							<label for="basic_checkbox_7" class="mb-0 h-15"></label>
							<!-- todo text -->
							<span class="text-line">Nulla vitae purus</span>
							<!-- Emphasis label -->
							<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_8" class="filled-in">
							<label for="basic_checkbox_8" class="mb-0 h-15"></label>
							<span class="text-line">Phasellus interdum</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_9" class="filled-in">
							<label for="basic_checkbox_9" class="mb-0 h-15"></label>
							<span class="text-line">Quisque sodales</span>
							<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_10" class="filled-in">
							<label for="basic_checkbox_10" class="mb-0 h-15"></label>
							<span class="text-line">Proin nec mi porta</span>
							<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<!-- ./side demo panel -->
	<div class="sticky-toolbar">
		<a href="https://www.facebook.com/fily.mamani/" data-toggle="tooltip" data-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
		<a href="#" data-toggle="tooltip" data-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
		<a id="chat-popup" href="#" data-toggle="tooltip" data-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->

	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
			<div id="chat-overlay"></div>
			<span class="icon-Group-chat font-size-30"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
			<div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
				<div class="btn-group">
					<button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-toggle="dropdown">
						<span class="icon-Add-user font-size-22"><span class="path1"></span><span class="path2"></span></span>
					</button>
					<div class="dropdown-menu min-w-200">
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Color mr-15"></span>
							New Group</a>
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Clipboard mr-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
							Contacts</a>
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Group mr-15"><span class="path1"></span><span class="path2"></span></span>
							Groups</a>
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Active-call mr-15"><span class="path1"></span><span class="path2"></span></span>
							Calls</a>
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Settings1 mr-15"><span class="path1"></span><span class="path2"></span></span>
							Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Question-circle mr-15"><span class="path1"></span><span class="path2"></span></span>
							Help</a>
						<a class="dropdown-item font-size-16" href="#">
							<span class="icon-Notifications mr-15"><span class="path1"></span><span class="path2"></span></span>
							Privacy</a>
					</div>
				</div>
				<div class="text-center flex-grow-1">
					<div class="text-dark font-size-18">Mayra Sibley</div>
					<div>
						<span class="badge badge-sm badge-dot badge-primary"></span>
						<span class="text-muted font-size-12">Active</span>
					</div>
				</div>
				<div class="chat-box-toggle">
					<button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
						<span class="icon-Close font-size-22"><span class="path1"></span><span class="path2"></span></span>
					</button>
				</div>
			</div>
			<div class="chat-box-body">
				<div class="chat-box-overlay">
				</div>
				<div class="chat-logs">
					<div class="chat-msg user">
						<div class="d-flex align-items-center">
							<span class="msg-avatar">
								<img src="<?= base_url(); ?>asset/images/avatar/2.jpg" class="avatar avatar-lg">
							</span>
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
								<p class="text-muted font-size-12 mb-0">2 Hours</p>
							</div>
						</div>
						<div class="cm-msg-text">
							Hi there, I'm Jesse and you?
						</div>
					</div>
					<div class="chat-msg self">
						<div class="d-flex align-items-center justify-content-end">
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary font-weight-bold">You</a>
								<p class="text-muted font-size-12 mb-0">3 minutes</p>
							</div>
							<span class="msg-avatar">
								<img src="<?= base_url(); ?>asset/images/avatar/3.jpg" class="avatar avatar-lg">
							</span>
						</div>
						<div class="cm-msg-text">
							My name is Anne Clarc.
						</div>
					</div>
					<div class="chat-msg user">
						<div class="d-flex align-items-center">
							<span class="msg-avatar">
								<img src="<?= base_url(); ?>asset/images/avatar/2.jpg" class="avatar avatar-lg">
							</span>
							<div class="mx-10">
								<a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
								<p class="text-muted font-size-12 mb-0">40 seconds</p>
							</div>
						</div>
						<div class="cm-msg-text">
							Nice to meet you Anne.<br>How can i help you?
						</div>
					</div>
				</div>
				<!--chat-log -->
			</div>
			<div class="chat-input">
				<form>
					<input type="text" id="chat-input" placeholder="Send a message..." />
					<button type="submit" class="chat-submit" id="chat-submit">
						<span class="icon-Send font-size-22"></span>
					</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="<?= base_url(); ?>asset/js/vendors.min.js"></script>
 	<script src="<?= base_url(); ?>asset/js/pages/chat-popup.js"></script> 
	<script src="<?= base_url(); ?>asset/icons/feather-icons/feather.min.js"></script>

<!-- 	<script src="<?= base_url(); ?>asset/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> -->
	<!-- <script src="<?= base_url(); ?>asset/vendor_components/moment/min/moment.min.js"></script> -->
	<!-- <script src="<?= base_url(); ?>asset/vendor_components/fullcalendar/fullcalendar.js"></script> -->

	<!-- EduAdmin App -->
	<script src="<?= base_url(); ?>asset/js/template.js"></script>
	<!-- 	<script src="<?= base_url(); ?>asset/js/jquery.js"></script> -->
	<script src="<?= base_url(); ?>asset/js/pages/dashboard.js"></script>
	<!-- <script src="<?= base_url(); ?>asset/js/pages/calendar.js"></script> -->
	<script src="<?= base_url(); ?>asset/js/pages/swal2.js"></script>
	<script src="<?= base_url(); ?>asset/js/pages/ecommerce_details.js"></script>

	
    <script src="<?= base_url(); ?>asset/icons/feather-icons/feather.min.js"></script>
		<script src="<?= base_url(); ?>asset/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- EduAdmin App -->
	<script src="<?= base_url(); ?>asset/js/template.js"></script> 

	<!-- <script src="<?= base_url(); ?>asset/js/pages/data-table.js"></script> -->
</body>



</html>