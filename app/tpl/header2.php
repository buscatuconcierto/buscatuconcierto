<?php /**
* @Autor Carlos Vicente
* @Autor Carlosvicente100@gmail.com
* Copyright 2015 ~ M7 DAW */ ?>
<body>
<header>
<div class="header-tit">
  <div id="wrapper">
    <a href="<?= APP_W; ?>"><img class="logo" alt="Put your logo" src="<?= APP_W . 'pub/theme/k/' . $logo; ?>"/></a>
    <h1><?= $titol; ?>
    </h1>
  </div>
</div>
<!-- from div header-tit -->



<div class="regist">
  <form class="reg" name="formlog" method="post" action="<?= APP_W; ?>home/salir">
    <p>Bienvenido <?php echo $_SESSION['user']; ?> </p>
    <input type="submit" class="bEntra" value="Sortir" id="logsend">
  </form>
</div> 
</header>