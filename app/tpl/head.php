<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="Content-Type" content="text/html"; charset="ISO-8859-1"> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $titol; ?></title>
        <meta name="description" content="Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/main.js" type="text/javascript"></script> 
        <link rel="icon" href="<?= APP_W . 'pub/theme/k/' . $favicon; ?>" type="image/png"  />
        <link rel="stylesheet"  type="text/css" href="<?= APP_W . 'pub/theme/k/css/font-awesome.css'; ?>">
        <link rel="stylesheet"  type="text/css" href="<?= APP_W . 'pub/theme/k/css/app.css'; ?>">
        <link href='http://fonts.googleapis.com/css?family=Roboto:100|Open+Sans' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript">

            $(document).ready(function () {

                $.get('sys/conexion-evento.php', function (data) {
                    $("#combo-eventos").html('');
                    $("#combo-eventos").append(data);
                });

                $.get('sys/conexion-localizacion.php', function (data) {
                    $("#combo-localizacion").html('');
                    $("#combo-localizacion").append(data);
                });
                $("#park").click(function () {
                    if($("#img-map").hasClass("visible")){
                        $("#img-map").removeClass("visible").addClass("invisible");
                        $("#img-park").removeClass("invisible").addClass("visible");
                    }else{
                        $("#img-hot").removeClass("visible").addClass("invisible");
                        $("#img-park").removeClass("invisible").addClass("visible");
                    }
                });
                $("#hot").click(function () {
                    if($("#img-map").hasClass("visible")){
                        $("#img-map").removeClass("visible").addClass("invisible");
                        $("#img-hot").removeClass("invisible").addClass("visible");
                    }else{
                        $("#img-park").removeClass("visible").addClass("invisible");
                        $("#img-hot").removeClass("invisible").addClass("visible");
                    }
                });
                $("#map").click(function () {
                    if($("#img-hot").hasClass("visible")){
                        $("#img-hot").removeClass("visible").addClass("invisible");
                        $("#img-map").removeClass("invisible").addClass("visible");
                    }else{
                        $("#img-park").removeClass("visible").addClass("invisible");
                        $("#img-map").removeClass("invisible").addClass("visible");
                    }
                });

                $.get('sys/conexion-municipios.php', function (data) {
                    $("#combo-municipios").html('');
                    $("#combo-municipios").append(data);
                });

                $.get('sys/conexion-provincias.php', function (data) {
                    $("#combo-provincias").html('');
                    $("#combo-provincias").append(data);
                });





            });

        </script>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


    </head>

