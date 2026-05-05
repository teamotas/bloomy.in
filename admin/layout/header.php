
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$adminurl?>/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$adminurl?>/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$adminurl?>/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$adminurl?>/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$adminurl?>/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?=$adminurl?>/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$adminurl?>/assets/css/style.css">
    <script src="<?=$adminurl?>/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?=$adminurl?>/app-assets/datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    


    <style>
    .dataTables_wrapper .dt-buttons {
            float:none;  
            text-align:right;
            padding-bottom:10px;
     }
     </style> 
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
 <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item">
                <a href="<?=$adminurl?>/dashboard.php" class="navbar-brand nav-link">
                    
                    <img alt="branding logo" src="<?=$adminurl?>/src/bloom-f.png" height="60px;" width="200px;" data-expand="<?=$adminurl?>/src/bloom-f.png" data-collapse="<?=$adminurl?>/src/bloom-f.png" class="brand-logo">
                </a>
            </li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <!-- <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li> -->
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>

            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                <span class="avatar avatar-online">
                  <img src="<?=$adminurl?>/src/<?php if(isset($_SESSION['profile_picture'])):echo $_SESSION['profile_picture']; endif;?>" alt="avatar"><i></i>
                </span>
                <span class="user-name">
                  <?php if(isset($_SESSION['username'])):echo $_SESSION['username']; endif;?>                  
                </span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="<?=$adminurl?>/change_password.php" class="dropdown-item"><i class="icon-head"></i>Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a href="<?=$adminurl?>/logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <div class="main-menu-header">
        <!-- <input type="text" placeholder="Search" class="menu-search form-control round"> -->
      </div>
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
         
          <li class=" nav-item"><a href="<?=$adminurl?>/dashboard.php"><i class="icon-home3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Dashboard</span></a>
          </li>

         
          <li class=" nav-item"><a href="<?=$adminurl?>/enquiries.php"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Enquiries</span></a>
          </li>

          <!-- <li class=" nav-item"><a href="table-basic.html"><i class="icon-table2"></i><span data-i18n="nav.bootstrap_tables.table_basic" class="menu-title">Basic Tables</span></a>
          </li> -->
        
        </ul>
      </div>
    </div>
    <!-- / main menu-->
