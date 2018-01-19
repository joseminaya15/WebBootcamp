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
	<title>HPE Latin America Hybrid IT Bootcamp</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
</head>
<body>
    <section id="principal">
        <div class="fondo-imagen"></div>
        <div class="container text-left relative">
            <div class="logo-home">
                <img src="<?php echo RUTA_IMG?>logo/logo_blanco.png">
            </div>
            <div class="contenido-evento">
                <h2>HPE Latin America Hybrid IT Bootcamp</h2>
                <p>January 30th to February 1st, 2018</p>
            </div>
            <div class="contenido-buttons">
                <a href="#sponsor" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Sponsors</a>
                <a href="#agenda" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Agenda</a>
            </div>
            <a href="#sponsor" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-down">
                <i class="mdi mdi-keyboard_arrow_down"></i>
            </a>
        </div>
    </section>
    <section id="sponsor">
        <div class="container text-center">
            <h2 class="title">SPONSOR</h2>
            <div col-xs-12>
                <div class="img-sponsor">
                    <img src="<?php echo RUTA_IMG?>sponsor/logo_1.png">
                </div>
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_2.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_3.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_4.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_5.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_6.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_7.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_8.png">
            </div>
            <div class="img-sponsor">
                <img src="<?php echo RUTA_IMG?>sponsor/logo_9.png">
            </div>
            <div col-xs-12>
                <div class="img-sponsor">
                    <img src="<?php echo RUTA_IMG?>sponsor/logo_10.png">
                </div>
            </div>
        </div>
    </section>
    <section id="agenda">
        <div class="container text-center">
            <h2 class="title">AGENDA</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Collapsible Group Item #2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <p>Intel and the Intel logo are trademarks of the Corporation in the United States and / or other countries.</p>
            <p>&copy;Copyright 2018 Hewlett Packard Enterprice Development LP</p>
        </div>
    </footer>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
</body>
</html>