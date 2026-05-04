<?php 
session_start();
include_once('../db.php');


  if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!='1'){
  
   ?>
        <script>
    window.location="index.php";
    </script>
        <?php
}

?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Enquiries</title>
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
            <li class="nav-item"><a href="<?=$adminurl?>/dashboard.php" class="navbar-brand nav-link"><img alt="branding logo" src="<?=$adminurl?>/src/logo.png" height="50px;" width="200px;" data-expand="<?=$adminurl?>/src/logo.png" data-collapse="<?=$adminurl?>/src/logo.png" class="brand-logo"></a></li>
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
        <input type="text" placeholder="Search" class="menu-search form-control round">
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

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
       
        <div class="content-body"><!-- Basic Tables start -->
        <!-- Bordered striped start -->
        <div class="row" style="margin-right: -31px; margin-left: -39px;">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enquiries</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                       
                    </div>
                    <div class="card-body collapse in">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Srno</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Comments</th>
                                        <th>Submitted at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                           <?php  $fetch = mysqli_query($conn,"SELECT * FROM makoonspune_enquiries order by submitted_at DESC ");$i=0;?>
                           <?php while($row = mysqli_fetch_assoc($fetch)){$i++;?> 
                                    <tr>
                                        <th scope="row"><?= $i;?></th>
                                        <td><?php if(isset($row['name'])): echo $row['name']; endif;?></td>
                                        <td><?php if(isset($row['email'])): echo $row['email']; endif;?></td>
                                        <td><?php if(isset($row['mobile_number'])): echo $row['mobile_number']; endif;?></td>
                                        <td><?php 
                                             if($row['comments']!='' && $row['comments']!=NULL){
                                                  echo $row['comments'] ;
                                              }else{  
                                                  echo '-';
                                              } 
                                            ?> 
                                            </td>
                                        <td><?php if(isset($row['submitted_at'])): echo date('d-m-Y h:i:s',strtotime($row['submitted_at'])); endif;?></td>
                                        <td><a href="<?=$adminurl;?>/delete_enquiry.php/?srno=<?=$row['srno'];?>" onclick="return confirm('Are you sure?')"><i class="icon-trash3"></i></span></a></td>
                                    </tr>
                            <?php }?>        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bordered striped end -->


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      All rights reserved  <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">Copyright © Cudding Bee</a>
    </footer>

    <!-- BEGIN VENDOR JS-->
    
    <script src="<?=$adminurl?>/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?=$adminurl?>/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?=$adminurl?>/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?=$adminurl?>/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?=$adminurl?>/app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=$adminurl?>/app-assets/datatable/js/jquery.dataTables.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script>

      $('.table').dataTable( {
        "searching": true,
        "pageLength": 16,
        "dom": 'Blfrtip',
        buttons: [
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                titleAttr: 'PDF',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [0,1,2,3,4,5]
                }

            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print"></i>',
                titleAttr: 'Print',
                exportOptions: {
                    columns: [0,1,2,3,4,5]
                }
            }

        ],
      } );
    </script>
  </body>
</html>
