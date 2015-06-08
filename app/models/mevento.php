<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
* Modelo mEvento
*/
	class mEvento extends Model{

/**
* funcion mostrar, hace un select de evento con un inner join en stock y en ubicacion para mostrar varios campos, siendo el where el resultado del buscador
*/
 function mostrar($referencia) {
        try {
            //$sql = "SELECT FROM eventos WHERE referencia = ? ";
          $sql ="SELECT e.referencia,e.nombre,e.fecha,e.localizacion,e.descripcion,e.puntos,s.precio,e.imagen,u.provincia,u.mapa,u.parking,u.hoteles FROM eventos e INNER JOIN stock s ON e.nombre = s.evento INNER JOIN ubicacion u ON e.localizacion = u.nombre WHERE referencia = ? ";
            /* Ejecutar la sentencia */
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $referencia);
         $fila =   $query->execute();

             //fetch per rol
             while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {



$caca2 = '<form class="busca" name="' . $patata . $i . 'form" method="post" action="' . APP_W . 'evento/comprar">';
 $aaa.=$caca2;
 $aaa.=('<div id="evento">
               <h1>'.$fila['nombre'] .'</h1><!--Poner nombre del evento esto sale de la bdd-->
        <div id="event-contenido">
            <img src="'.$fila['imagen'] .'" class="buscaimg" alt="foto evento"/>
            <div id="informacion">
                <label>Fecha: </label><label>'.$fila['fecha'].'</label>
                <br>
                <label>Provincia</label><label>'.$fila['provincia'].'</label>
                <br>
                <label>Precio:</label><label>'.$fila['precio'].'</label>
                <br>
                <br>
                <p>'.$fila['descripcion'].'</p>
                <br>
                <br>

                    <p>Cantidad:</p>
                    <input type="number" name="cantidad" value="1" min="0" max="5"></input>
                    <input id="buy" type="submit" value="Comprar" id="eventsend"></input>
                <br>
                <div id="botones">
                    <a href="'.$fila['mapa'] .'" alt="mapa"><div id="map">Mapa</div></a>
                    <a href="'.$fila['parking'] .'" alt="mapa parking"><div id="park">Parking</div></a>
                    <a href="'.$fila['hoteles'] .'" alt="mapa hotel"><div id="hot">Hoteles</div></a>
                </div>
            </div>
        </div>
    </div>');
$caca3 = '"<input type="text" style="display:none;" name="puntos" value="'.$fila['puntos'] .'"></label><input type="text" style="display:block;" name="referencia" value="'.$fila['referencia'] .'"></label></form>"';
 $aaa.=$caca3;    
    ?>
        
                
                <?php
                $_SESSION['event'] = $aaa;
            }
                return TRUE;
            
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }






/**
* funcion compra hace un update en stock restando la cantidad que se compra y añadiendola a vendidas, y sumando los puntos al usuario que lo ha comprado
*/
    function compra($referencia,$cantidad,$puntos,$usuario){
try {


         $sql = "UPDATE stock SET cantidad=cantidad-$cantidad, vendidas=vendidas+$cantidad 
            WHERE cantidad>=$cantidad AND evento=(Select nombre from eventos where referencia=?);
            UPDATE usuarios 
            SET puntos=puntos+(SELECT puntos FROM eventos WHERE referencia=?)
            WHERE usuario=?";
        $query = $this->db->prepare($sql);
            $query->bindParam(1, $referencia);
            $query->bindParam(2, $referencia);
            $query->bindParam(3, $usuario);

try {
    //$db->exec($sql);
     $fila = $query->execute();
      $_SESSION['puntos']  = $_SESSION['puntos'] + $puntos;
     return true;
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die();
}

    }catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }


}
