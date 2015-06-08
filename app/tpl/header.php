<?php
/**
 * @Autor Carlos Vicente
 * @Autor Carlosvicente100@gmail.com
 * Copyright 2015 ~ M7 DAW */
?>
<body>
    <header>
        <div class="header-tit">
            <div id="wrapper">
                <a href="<?= APP_W; ?>"><img class="logo" alt="Put your logo" src="<?= APP_W . 'pub/theme/k/' . $logo; ?>"/></a>
                <h1><?= $titol; ?></h1>
            </div>
        </div>
        <?php
        $destino = 'home/login';
        $destino2 = 'reg';
        $texto_boton = "Entrar";
        ?>
        <div id="sesion" class="sesion2">
            <!--  <a href="/login">Inicia SesiÃ³n</a> o <a href="/registrate">Registrate</a> -->
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
                    echo '<a href="' . APP_W . 'login/home">Bienvenido ';
                    echo $_SESSION['user'];
                    ?> 

                    <form class="logout" name="formlog" method="post" action="<?= APP_W . $destino; ?>">
                   <!-- <input type="submit" class="bEntra" value="<?= $texto_boton ?>" id="logsend"> -->
                   <!-- <button type="submit" name="someName" value="someValue"><i class="fa fa-times-circle"></i> <img class="icon exit" src="<?= APP_W . 'pub/theme/k/img/icons/exit.png'; ?>" alt=" "></button>
                    --> <!-- <input type="image" class="icon exit"  alt=" "> --> 
                        <!--<a href="<?= APP_W . $destino; ?>"><i class="fa fa-times-circle"></i></a>-->

            <!-- <a href="whatever" type="submit" class="bEntra" value="<?= $texto_boton ?>" id="logsend"><img /></a> --></form><br>
                    <?php
                    if($_SESSION['rol']==1){
                        
                    echo 'Puntoss ';
                    echo $_SESSION['puntos'];
                }else{
                     echo 'Administración ';
                }
                    ?>
                    <a href="<?= APP_W . $destino; ?>"><i class="fa fa-times-circle"></i></a>
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
                            ContraseÃ±a<input type="password" name="password" id="password"required></label>
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

    </header>