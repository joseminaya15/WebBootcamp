<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="HPE Latin America Hybrid IT Bootcamp">
        <meta name="keywords"               content="HPE Latin America Hybrid IT Bootcamp">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="January 25, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
        <title>HPE Latin America Hybrid IT Bootcamp</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-table/dist/bootstrap-table.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>survey.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/autofill/2.2.2/css/autoFill.dataTables.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.dataTables.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.dataTables.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    </head>
    <body>
        <div class="fondo-imagen"></div>
        <section class="section">
            <div class="mdl-container">
                <div class="logo-home">
                    <img src="<?php echo RUTA_IMG?>logo/logo_blanco.png">
                </div>
                <h2 class="title">HPE Latin America Hybrid IT Bootcamp</h2>
                <p class="subtitle">Your feedback is very important to us, please fill out this survey so we can improve future events.</p>
                <div class="mdl-card mdl-card-table">
                    <div class="table-responsive">
                        <table id="example" class="display nowrap table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr class="tr-header-reporte">
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Session More Relevant</th>
                                    <th class="text-center">Topic focus more</th>
                                    <th class="text-center">Interested to be in the Agenda</th>
                                    <th class="text-center">Suggestions for a future event</th>
                                    <th class="text-center">Useful based on your area</th>
                                    <th class="text-center">Rate this event overall</th>
                                    <th class="text-center">Comments for hotel</th>
                                    <th class="text-center">Comments for Transport</th>
                                    <th class="text-center">Comments for Restaurant</th>
                                    <th class="text-center">Comments for Food</th>
                                    <th class="text-center">Comments for Register</th>
                                    <th class="text-center">Comments for Schedule</th>
                                </tr>
                            </thead>
                          <tbody>
                              <?php echo $html ?>  
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-table/dist/bootstrap-table.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-table/dist/locale/bootstrap-table-es-ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $('#example').DataTable( {
                  responsive: true,
                  dom: 'Bfrtip',
                  buttons: [
                    'excel', 'print'
                  ],
                  "searching": false
              });
              $('.buttons-excel').empty();
              $('.buttons-print').empty();
              $('.buttons-excel').append('<i class="fa fa-file-excel-o"></i>');
              $('.buttons-print').append('<i class="fa fa-print"></i>');
          });
        </script>
    </body>
</html>