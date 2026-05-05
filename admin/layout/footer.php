

    <footer class="footer footer-static footer-light navbar-border">
      All rights reserved  <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">Copyright © Bloomy PreSchool</a>
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
