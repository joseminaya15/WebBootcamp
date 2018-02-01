<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Business One">
        <meta name="keywords"               content="SAP,producto wizard">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="January 25, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
        <title>Encuestas Merino</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-table/dist/bootstrap-table.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>engagement.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>survey.css?v=<?php echo time();?>">
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
                <div id="idEncuesta" class="mdl-card mdl-card-encuesta">
                    <table id="table" data-search="true" data-show-refresh="true" data-pagination="true">
                        <thead>
                            <tr>
                                <th data-field="name">Name</th>
                                <th data-field="stargazers_count">Stars</th>
                                <th data-field="forks_count">Forks</th>
                                <th data-field="description">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="tr-id-1" class="tr-class-1">
                                <td id="td-id-1" class="td-class-1">
                                    <a href="https://github.com/wenzhixin/bootstrap-table">bootstrap-table</a>
                                </td>
                                <td>526</td>
                                <td>122</td>
                                <td>An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) 
                                </td>
                            </tr>
                            <tr id="tr-id-2" class="tr-class-2">
                                <td id="td-id-2" class="td-class-2">
                                    <a href="https://github.com/wenzhixin/multiple-select">multiple-select</a>
                                </td>
                                <td>288</td>
                                <td>150</td>
                                <td>A jQuery plugin to select multiple elements with checkboxes :)
                                </td>
                            </tr>
                            <tr id="tr-id-3" class="tr-class-3">
                                <td id="td-id-3" class="td-class-3">
                                    <a href="https://github.com/wenzhixin/bootstrap-show-password">bootstrap-show-password</a>
                                </td>
                                <td>32</td>
                                <td>11</td>
                                <td>Show/hide password plugin for twitter bootstrap.
                                </td>
                            </tr>
                            <tr id="tr-id-4" class="tr-class-4">
                                <td id="td-id-4" class="td-class-4">
                                    <a href="https://github.com/wenzhixin/blog">blog</a>
                                </td>
                                <td>13</td>
                                <td>4</td>
                                <td>my blog</td>
                            </tr>
                            <tr id="tr-id-5" class="tr-class-5">
                                <td id="td-id-5" class="td-class-5">
                                    <a href="https://github.com/wenzhixin/scutech-redmine">scutech-redmine</a>
                                <td>6</td>
                                <td>3</td>
                                <td>Redmine notification tools for chrome extension.</td>
                            </tr>
                        </tbody>
                    </table>
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
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            $('#table').bootstrapTable({

            });
        </script>
    </body>
</html>