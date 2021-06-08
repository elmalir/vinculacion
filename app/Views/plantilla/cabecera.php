
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Vinculación</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<!-- sweetalert2 -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/plantilla/css/sweetalert2/dist/sweetalert2.min.css">
		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url() ?>/plantilla/css/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() ?>/plantilla/css/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url() ?>/plantilla/css/assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url() ?>/plantilla/css/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body id="idbody" class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?= base_url() ?>" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Vinculación - Aistencias
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>Bienvenido,</small>
									<?php  echo session('usuario') ?> Guananga
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?= site_url('/log/logout') ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="">
						<a href="<?= base_url()?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>

					<li <?php echo ($menu=='asistencias') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Asistencias </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu nav-<?php echo ($menu=='asistencias') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='asistencias') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newAsistencia') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/asistencias/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nuevo
								</a>
								<b class="arrow"></b>
							</li>
							<li <?php echo ($subMenu=='lstAsistencias') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/asistencias">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li <?php echo ($menu=='gruposusuarios') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Grupo de Usuarios </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu nav-<?php echo ($menu=='gruposusuarios') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='gruposusuarios') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newGrupo') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/gruposusuarios/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nuevo
								</a>
								<b class="arrow"></b>
							</li>
							<li <?php echo ($subMenu=='lstGruposUsuarios') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/gruposusuarios">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li <?php echo ($menu=='usuarios') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fas fa-user"></i>
							<span class="menu-text"> Usuarios </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu nav-<?php echo ($menu=='usuarios') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='usuarios') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newUsuario') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/usuarios/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nuevo
								</a>
								<b class="arrow"></b>
							</li>
							<li <?php echo ($subMenu=='lstUsuarios') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/usuarios">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li <?php echo ($menu=='areasgenerales') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-folder"></i>
							<span class="menu-text"> Áreas Generales </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu nav-<?php echo ($menu=='areasgenerales') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='areasgenerales') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newAreaGeneral') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/areasgenerales/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nueva
								</a>
								<b class="arrow"></b>
							</li>
							<li <?php echo ($subMenu=='lstAreasGenerales') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/areasgenerales">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li <?php echo ($menu=='areasespecificas') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-folder-open"></i>
							<span class="menu-text"> Áreas Específicas </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu nav-<?php echo ($menu=='areasespecificas') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='areasespecificas') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newAreaEspecifica') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/areasespecificas/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nueva
								</a>
								<b class="arrow"></b>
							</li>
							<li <?php echo ($subMenu=='lstAreasEspecificas') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/areasespecificas">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li <?php echo ($menu=='gremios') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> Gremios </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu nav-<?php echo ($menu=='gremios') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='gremios') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newGremio') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/gremios/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nueva
								</a>
								<b class="arrow"></b>
							</li>
							<li <?php echo ($subMenu=='lstGremios') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/gremios">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li <?php echo ($menu=='proyectos') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> Proyectos </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu nav-<?php echo ($menu=='proyectos') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='proyectos') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newProyecto') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/proyectos/nuevo">
									<i class="menu-icon fa fa-caret-right"></i>
									Nuevo
								</a>

								<b class="arrow"></b>
							</li>

							<li <?php echo ($subMenu=='lstProyectos') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/proyectos">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li <?php echo ($menu=='personas') ? 'class="active open"' : '' ; ?> >
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Personas </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu nav-<?php echo ($menu=='personas') ? 'show' : 'hide' ; ?>" 
							<?php echo ($menu=='personas') ? 'style="display: block;"' : 'style="display: none;"' ; ?>
							>
							<li <?php echo ($subMenu=='newPersona') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/personas/nueva">
									<i class="menu-icon fa fa-caret-right"></i>
									Nueva
								</a>

								<b class="arrow"></b>
							</li>

							<li <?php echo ($subMenu=='lstPersonas') ? 'class="active open"' : '' ; ?> >
								<a href="<?= base_url()?>/personas">
									<i class="menu-icon fa fa-caret-right"></i>
									Listado
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active"><?= $menu ?></li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
				
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->