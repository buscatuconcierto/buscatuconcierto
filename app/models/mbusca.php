<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
* Modelo mBusca
*/
	class mBusca extends Model{

            function home(){
    }
        /**
        * funcion tablabuscar recibe 3 variables y genera una sentencia mysql con ellas
        * el resultado de la sentencia lo va mostrando en una tabla
        */

        function tablabuscar($nombre,$localidad,$fecha) {
        try {

        if(!empty($localidad))
            $where = (isset($where) ? $where . " AND " : '') . "localizacion IN (SELECT nombre FROM ubicacion WHERE poblacion=".$this->db->quote($localidad).")";
 
        if(!empty($fecha))
            $where = (isset($where) ? $where . " AND " : '') . "fecha=".$this->db->quote($fecha)."";
 
        if(!empty($nombre))
            $where = (isset($where) ? $where . " AND " : '') . "nombre like ".$this->db->quote(str_replace(" ", "%", '%'.$nombre.'%'))."";

 
        // condicion fija
        $where = (isset($where) ? $where . " AND " : '') . "e.nombre=s.evento;";
 
        $sql = "SELECT referencia,nombre,fecha,localizacion,puntos,s.precio,imagen FROM eventos e INNER JOIN stock s" . (isset($where)?" WHERE ".$where:'');
        
        $consulta = $this->db->query($sql);
/*         echo "<pre>";
        foreach ($this->db->query($sql) as $row) {
            print_r($row);
        }
        echo "</pre>";*/


        //$query->execute(); //fetch per rol


 
               ?> <div id="busqueda"><?php
              $i = 0;
                foreach ($consulta as $fila) {

                $patata . $i = $fila['referencia'];
                ?>
                <?php
                $caca = "<?='. APP_W; ?>eliminar/eliminar2";
                $caca2 = '<form class="busca" name="' . $patata . $i . 'form" method="post" action="' . APP_W . 'evento/mostrar">';
                $aaa.=$caca2;
                 $aaa.=('<a href=""><div class="concierto">
                <img src="'.$fila['imagen'] .'" width="250px" height="250px" alt="foto evento"/>
                <div id="texto">
                    <h1 id="titulo">'.$fila['nombre'] .'</h1>
                    <br>
                    <b><label>Fecha: </label></b><label>'. $fila['fecha'] .'</label>
                    <br>
                    <b><label>Precio: </label></b><label>'. $fila['precio'] .'</label>
                    <br>
                    <b><label>Localizacion: </label></b><label>'. $fila['localizacion'] .'</label>
                    <br>
                    <b><label>Puntos: </label></b><label>'. $fila['puntos'] .'</label>
                    <br>
                    <b><label>Comprar</label></b>
                       <input id="event" type="submit" value="Mas Informacion" id="eventsend"> 
                </div>
            </div>
        </a><hr>');
            $caca3 = '"<input type="text" style="display:block;" name="referencia" value="' . $patata . $i . '"></label></form>"';
                $aaa.=$caca3;
                ?> 
                
                <?php
                $i++;
            }
            $aaa.="</div>";

            $_SESSION['busqueda'] = $aaa;
            if ($consulta->rowCount() == 1) {
                return $aaa;
            } else {
                return $aaa;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }



		
	}