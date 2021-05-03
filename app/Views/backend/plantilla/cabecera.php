    <!DOCTYPE html>
    <html dir="ltr" lang="es">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/public/css/backend/assets/images/logo-icon.png">
      <title>SisMedical</title>
      <!-- Custom CSS  -->
      <link href="<?php echo base_url();?>/public/css/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
      <link href="<?php echo base_url();?>/public/css/backend/dist/css/style.min.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
      <link rel="stylesheet" href="estilos.css">


    </head>
    <body>
      <!-- Preloader - style you can find in spinners.css -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <!-- Main wrapper - style you can find in pages.scss -->
      <div id="main-wrapper">
       <!-- Topbar header - style you can find in pages.scss -->
       <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
              <i class="ti-menu ti-close"></i>
            </a>
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
              <!-- Logo icon -->
              <b class="logo-icon p-l-10">
               <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
               <!-- Dark Logo icon -->
               <img src="<?php echo base_url(); ?>/public/css/backend/assets/images/logo-icon.png" alt="homepage" class="light-logo" />

             </b>
             <!--End Logo icon -->
             <!-- Logo text -->
             <span class="logo-text">
               <!-- dark Logo text -->
               <img src="<?php echo base_url(); ?>/public/css/backend/assets/images/logo-text.png" alt="homepage" class="light-logo" />

             </span>
             <!-- Logo icon -->
             <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="<?php echo base_url(); ?>/public/css/backend/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- End Logo -->
            <!-- Toggle which is visible on mobile only -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
          </div>            
          <!-- End Logo -->

          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- toggle and nav items -->
            <ul class="navbar-nav float-left mr-auto">
              <li class="sidebar-item">
                <a class="nav-link sidebartoggler waves-effect waves-dark sidebar-link active" href="javascript:void(0)" data-sidebartype="mini-sidebar" aria-expanded="false">
                 <i class="fas fa-angle-double-left"></i>
                 <span class="hide-menu"></span>
               </a>
             </li>
           </ul>
           <!-- Right side toggle and nav items -->
           <ul class="navbar-nav float-right">
            <!-- Comment -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <!-- End Comment -->
            <!-- Messages -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                <ul class="list-style-none">
                  <li>
                    <div class="">
                     <!-- Message -->
                     <a href="javascript:void(0)" class="link border-top">
                      <div class="d-flex no-block align-items-center p-10">
                        <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                        <div class="m-l-10">
                          <h5 class="m-b-0">Event today</h5> 
                          <span class="mail-desc">Just a reminder that event</span> 
                        </div>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="link border-top">
                      <div class="d-flex no-block align-items-center p-10">
                        <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                        <div class="m-l-10">
                          <h5 class="m-b-0">Settings</h5> 
                          <span class="mail-desc">You can customize this template</span> 
                        </div>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="link border-top">
                      <div class="d-flex no-block align-items-center p-10">
                        <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                        <div class="m-l-10">
                          <h5 class="m-b-0">Pavan kumar</h5> 
                          <span class="mail-desc">Just see the my admin!</span> 
                        </div>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="link border-top">
                      <div class="d-flex no-block align-items-center p-10">
                        <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                        <div class="m-l-10">
                          <h5 class="m-b-0">Luanch Admin</h5> 
                          <span class="mail-desc">Just see the my new admin!</span> 
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </li>


          <!-- End Messages -->
          <!-- User profile and search -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>/public/css/backend/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
            <div class="dropdown-menu dropdown-menu-right user-dd animated">
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
              <div class="dropdown-divider"></div>
              <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
            </div>
          </li>
          <!-- User profile and search -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Topbar header -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
     <!-- Sidebar navigation-->
     <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-5">                         


       <li class="sidebar-item <?php echo ($menu=='principal') ? 'selected' : '' ; ?>">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url() ?>" aria-expanded="false">
         <i class="mdi mdi-view-dashboard"></i>
         <span class="hide-menu">Dashboard</span>
       </a>
     </li>

     <li class="sidebar-item">
      <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false">
       <i class="mdi mdi-chart-bar"></i>
       <span class="hide-menu">Estadisticas</span>
     </a>
   </li>

   <li class="sidebar-item">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
     <i class="mdi mdi-camera-front-variant"></i>
     <span class="hide-menu">Profesional</span>
   </a>
   <ul aria-expanded="false" class="collapse  first-level">
     <li class="sidebar-item">
      <a href="<?php echo base_url() ?>/admin/nuevoProfesional" class="sidebar-link">
       <i class="fas fa-user-plus"></i>
       <span class="hide-menu">Nuevo</span>
     </a>
   </li>
   <li class="sidebar-item">
    <a href="<?php echo base_url() ?>/admin/listProfesionales" class="sidebar-link">
     <i class="fas fa-users"></i>
     <span class="hide-menu">Profesionales</span>
   </a>
 </li>
</ul>
</li>

<li class="sidebar-item">
  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
   <i class="fas fa-address-book"></i>
   <span class="hide-menu">Paciente </span>
 </a>
 <ul aria-expanded="true" class="collapse first-level">
   <li class="sidebar-item">
    <a href="<?php echo base_url() ?>/admin/nuevoPaciente" class="sidebar-link">
     <i class="mdi mdi-account-plus"></i>
     <span class="hide-menu">Nuevo</span>
   </a>
 </li>
 <li class="sidebar-item">
  <a href="<?php echo base_url() ?>/admin/listPacientes" class="sidebar-link">
   <i class="mdi mdi-account-multiple"></i>
   <span class="hide-menu">Pacientes</span>
 </a>
</li>
</ul>
</li>

<li class="sidebar-item <?php echo ($menu=='empresa') ? 'selected' : '' ; ?>">
  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-briefcase-upload"></i>
   <span class="hide-menu">Empresa</span>
 </a>
 <ul aria-expanded="false" class="collapse first-level">
   <li class="sidebar-item">
    <a href="<?php echo base_url() ?>/admin/nuevaEmpresa" class="sidebar-link <?php echo ($subMenu=='nueva') ? 'active' : '' ; ?>"><i class="mdi mdi-bookmark-plus"></i>
     <span class="hide-menu">Nueva Empresa</span>
   </a>
 </li>
 <li class="sidebar-item">
  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-clipboard-text"></i>
   <span class="hide-menu">Empresas</span>
 </a>
</li>
</ul>
</li>

<li class="sidebar-item">
  <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i>
   <span class="hide-menu">Buttons</span>
 </a>
</li>
    <!--
                        <li class="sidebar-item selected">
                            <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i>
                               <span class="hide-menu">Empresa</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level in">
                               <li class="sidebar-item active">
                                  <a href="http://192.168.0.107/sismedical/admin/nuevaEmpresa" class="sidebar-link active"><i class="mdi mdi-emoticon"></i>
                                     <span class="hide-menu">Nueva Empresa</span>
                                  </a>
                               </li>
                               <li class="sidebar-item">
                                  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i>
                                     <span class="hide-menu"> Font Awesome Icons </span>
                                  </a>
                               </li>
                            </ul>
                         </li>
                       -->

                       <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url() ?>/inicio/nuevoPaciente" aria-expanded="false"><i class="mdi mdi-pencil"></i>
                         <span class="hide-menu">Elements</span>
                       </a>
                     </li>
                     <li class="sidebar-item">
                      <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i>
                       <span class="hide-menu">Addons </span>
                     </a>
                     <ul aria-expanded="false" class="collapse  first-level">
                       <li class="sidebar-item">
                        <a href="index2.html" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i>
                         <span class="hide-menu"> Dashboard-2 </span>
                       </a>
                     </li>
                     <li class="sidebar-item">
                      <a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i>
                       <span class="hide-menu"> Gallery </span>
                     </a>
                   </li>
                   <li class="sidebar-item">
                    <a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i>
                     <span class="hide-menu"> Calendar </span>
                   </a>
                 </li>
                 <li class="sidebar-item">
                  <a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i>
                   <span class="hide-menu"> Invoice </span>
                 </a>
               </li>
               <li class="sidebar-item">
                <a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i>
                 <span class="hide-menu"> Chat Option </span>
               </a>
             </li>
           </ul>
         </li>
         <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i>
           <span class="hide-menu">Autenticación</span>
         </a>
         <ul aria-expanded="false" class="collapse  first-level">
           <li class="sidebar-item">
            <a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i>
             <span class="hide-menu"> Login </span>
           </a>
         </li>
         <li class="sidebar-item">
          <a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i>
           <span class="hide-menu"> Register </span>
         </a>
       </li>
     </ul>
   </li>
   <li class="sidebar-item">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i>
     <span class="hide-menu">Errors </span>
   </a>
   <ul aria-expanded="false" class="collapse  first-level">
     <li class="sidebar-item">
      <a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i>
       <span class="hide-menu"> Error 403 </span>
     </a>
   </li>
   <li class="sidebar-item">
    <a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i>
     <span class="hide-menu"> Error 404 </span>
   </a>
 </li>
 <li class="sidebar-item">
  <a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i>
   <span class="hide-menu"> Error 405 </span>
 </a>
</li>
<li class="sidebar-item">
  <a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i>
   <span class="hide-menu"> Error 500 </span>
 </a>
</li>
</ul>
</li>

</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb and right sidebar toggle -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title"><?php echo $titulo; ?></h4>
        <div class="ml-auto text-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
            <!-- End Bread crumb and right sidebar toggle -->