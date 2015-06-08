    <!DOCTYPE html>

    <html>
        <head>
            <title>Busca Tu Concierto</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- general styles --> 
            <link rel="stylesheet" href="<?= APP_W . 'pub/theme/k/css/main.css'; ?>">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="js/main.js" type="text/javascript"></script> 
            <script src="//code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>
            <link rel="stylesheet"   href="<?= APP_W . 'pub/theme/k/css/font-awesome.min.css'; ?>">
            <script>
                $(document).ready(function () {
                    var url = "sys/autocompleter.php";
                    var localizaciones = new Array();
                    var cont = 0;
                    $.getJSON(url, function (msg) {
                        $.each(msg, function (i, lista) {
                            var name = JSON.stringify(lista.nombre);
                            var name = name.replace('"', '');
                            var name = name.replace('"', '');
                            localizaciones[cont] = name;
                            cont++;
                        });
                        $("#tags").autocomplete({
                            source: localizaciones
                        });
                    });
                    $('#showlogin').click(function () {
                        $('#loginpanel').slideToggle('slow', function () {
                        });
                    });
                    $(function () {
                        $("#datepicker").datepicker();
                    });
                });
            </script>
        </head>
        <body>

            <div id="global" style="height:auto;"></div>
            <?php
            $destino = 'home/login';
            $destino2 = 'reg';
            $texto_boton = "Entrar";
            ?>
            <div id="sesion">
                <?php
                if (isset($_SESSION['user'])) {
                    $destino = 'home/salir';
                    $texto_boton = 'Salir';
                }
                ?>
                <?php if ($destino == 'home/login') { ?>
                    <div id="login">
                        <a href="#" id="showlogin">
                            Inicia Sesión 
                        </a>
                        o
                        <?php $destino2 = 'reg'; ?>
                        <a href="<?= APP_W . $destino2; ?>">Registrate</a> 
                        <?php
                    } else {
                        echo '<a href="'.APP_W.'login/home">Bienvenido,';
                        echo $_SESSION['user'];
                        
                        ?> 
                        <form class="logout" name="formlog" method="post" action="<?= APP_W . $destino; ?>">
                       <!-- <input type="submit" class="bEntra" value="<?= $texto_boton ?>" id="logsend"> -->
                       <!-- <button type="submit" name="someName" value="someValue"><i class="fa fa-times-circle"></i> <img class="icon exit" src="<?= APP_W . 'pub/theme/k/img/icons/exit.png'; ?>" alt=" "></button>
                        --> <!-- <input type="image" class="icon exit"  alt=" "> --> 
                            <a href="<?= APP_W . $destino; ?>"><i class="fa fa-times-circle"></i></a>

        <!-- <a href="whatever" type="submit" class="bEntra" value="<?= $texto_boton ?>" id="logsend"><img /></a> --></form>
                        <?php
                        if (($_SESSION['rol'])==1) {
                        echo ' <br>Puntos ';
                        echo  $_SESSION['puntos'] /*'700'*/;}else{
                            echo '<a href="'.APP_W.'login/home"><br>Administración </a>';
                        }
                        ?>
                    <?php }
                    ?>
                    <div id="loginpanel" style="display:none;">
                        <?php
                        $destino = 'home/login';
                        $destino2 = 'reg';
                        $texto_boton = "Entrar";
                        if (isset($_SESSION['user'])) {
                            $destino = 'home/salir';
                            $texto_boton = 'Salir';
                        }
                        ?>
                        <form class="reg" name="formlog" method="post" action="<?= APP_W . $destino; ?>">
<?php if ($destino == 'home/login') { ?>
                                Usuario <input type="text" id="username" name="usuario" value="" placeholder="nombre de usuario" required></label>
                                Contraseña<input type="password" name="password" id="password"required></label>
                                <?php
                            } else {
                                echo 'Bienvenido ';
                                echo $_SESSION['user'];
                                ?> </p>
                            <?php }
                            ?>
                            <input type="submit" class="bEntra" value="<?= $texto_boton ?>" id="logsend">    
                        </form>
                    </div>
                </div>	
            </div>
            <video autoplay="autoplay" loop="loop" muted src="<?= APP_W . 'pub/theme/k/' . $video; ?>" id="video"></video>
            <h1 class="titulos">BuscaTuConcierto</h1>
            <h2 id="frasealea" class="titulos">"Frase Randoom" - La madre del topo</h2><!--Aqui llamaremos a una funcion PHP que nos devolvera una posicion aleatoria de un array donde guardaremos citas de cantantes-->
            <form action="<?= APP_W; ?>busca/busca" method="post" id="formulario">
                <label>Concierto/Evento</label>
                <br>
                <br>
                <input id="nombre" name="nombre" type="text" value=""/>
                <br>
                <br>
                <label>Localidad</label>
                <br>
                <br>
                <input id="tags" name="localidad" type="text" value=""/>
                <br>
                <br>
                <label>Fecha</label>
                <br>
                <br>
                <input id="datepicker" name="fecha" type="text" placeholder="" value=""/>
                <br>
                <br>
                <input id="searchButton" type="submit" value="Buscar" />
            </form>
        </body>
        <footer>

            <a id="licencia" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /></a>.

        </footer>
    </html>
