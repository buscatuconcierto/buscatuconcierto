 <?php

/**
* Modelo mEliminare
*/
 class mEliminare extends Model {

 /**
 * funcion eliminare recibe una variable que utiliza como filtro para borrar en eventos
 */
    function eliminare($ref) {
        try {
            $sql = "DELETE FROM eventos WHERE referencia = ? ";
            /* Ejecutar la sentencia */
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $ref); 
            $query->execute(); 
            if ($query->rowCount() == 1) {

                return TRUE;
            } else {

                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }



/**
* hace un select de eventos y genera una tabla mostrando todos los registros
*añadiendo al final un boton para modificar o eliminarlos
*/
 function tablaborrare() {
        try {

            $sql = "SELECT referencia,nombre,fecha,hora,localizacion,descripcion,puntos,imagen FROM  eventos eve";

            $query = $this->db->prepare($sql);

            $query->execute(); //fetch per rol

            $aaa = "<table id='tabla_eliminar'>";
            $aaa.= ('<tr id="cabeceras"><td>' . 'referencia' . '</td>
             <td>' . 'Nombre' . '</td>
             <td>' . 'fecha' . '</td>
             <td>' . 'hora' . '</td>
             <td>' . 'localizacion' . '</td>
             <td>' . 'descripcion' . '</td>
             <td>' . 'puntos' . '</td>
             <td>' . 'imagen' . '</td>
             <td>' . 'Eliminar' . '</td>
             <td>' . 'Modificar' . '</td>
             </tr>');
            /*   var_dump($aaa);
              die;
             */ $i = 0;

            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {

                $patata . $i = $fila['referencia'];
                
                ?>
                <?php
                $caca = "<?='. APP_W; ?>eliminare/eliminare2";
                $caca2 = '"<form class="registre" name="' . $patata . $i . 'form" method="post" action="' . APP_W . 'eliminare/eliminare2">"';
                $aaa.=$caca2;
                $aaa.= ('<tr>' . '<td>' . utf8_encode($fila['referencia']) . '</td>' .
                        '<td>' . utf8_encode($fila['nombre']) . '</td>' .
                        '<td>' . utf8_encode($fila['fecha']) . '</td>' .
                        '<td>' . utf8_encode($fila['hora']) . '</td>' .
                        '<td>' . utf8_encode($fila['localizacion']) . '</td>' .
                        '<td>' . utf8_encode($fila['descripcion']) . '</td>' .
                        '<td>' . utf8_encode($fila['puntos']) . '</td>' .
                        '<td>' . utf8_encode($fila['imagen']) . '</td>
<td>' . '<input type="submit" value="Borrar" name="' . $patata . $i . '">' . '</td>
<td>' . '<button><a href="'.APP_W.'modificare">Modificar</a></button>' . '</td></tr>');


                $caca3 = '"<input type="text" style="display:block;" name="referencia" value="' . $patata . $i . '"></label></form>"';
                $aaa.=$caca3;
                ?> 
                </form>
                <?php
                $i++;
            }
            $aaa.="</table></div>";
            $_SESSION['eventos'] = $aaa;
            if ($query->rowCount() == 1) {
                return $aaa;
            } else {
                return $aaa;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
}
    ?>