 <?php

/**
* modelo mEliminaru
*/
 class mEliminaru extends Model {

/**
* funcion eliminaru recibe una variable que usa como filtro para borrar en ubicacion
*/
 
    function eliminaru($ubi) {
        try {

            $sql = "DELETE FROM ubicacion WHERE nombre = ? ";
 
            $query = $this->db->prepare($sql);

            $query->bindParam(1, $ubi);
            var_dump($query); 
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
* funcion spacein se encarga de sustituir las barrabaja por espacios en blanco de una variable recibida
*/
 function spacein($string){

    $string = str_replace(
        array('_'),
        array(' '),
        $string
    );
    return $string;
 }

/**
*funcion tablaborraru 
* hace un select de ubicacion y genera una tabla mostrando todos los registros
*añadiendo al final un boton para modificar o eliminarlos
*/
 function tablaborraru() {
        try {
            $sql = "SELECT nombre,direccion,poblacion,codigo_postal,provincia,pais,aforo,mapa,parking,hoteles FROM  ubicacion ubi";

            $query = $this->db->prepare($sql);

            $query->execute(); //fetch per rol

            $aaa = "<table id='tabla_eliminar'>";
            $aaa.= ('<tr id="cabeceras"><td>' . 'Nombre' . '</td>
             <td>' . 'Direccion' . '</td>
             <td>' . 'Poblacion' . '</td>
             <td>' . 'Codigo postal' . '</td>
             <td>' . 'Provincia' . '</td>
             <td>' . 'Pais' . '</td>
             <td>' . 'Aforo' . '</td>
             <td>' . 'Mapa' . '</td>
             <td>' . 'Parking' . '</td>
             <td>' . 'Hoteles' . '</td>
             <td>' . 'Eliminar' . '</td>
             <td>' . 'Modificar' . '</td>
             </tr>');
               /*var_dump($aaa);
              die;*/
              $i = 0;

            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {

                $patata . $i = $fila['nombre'];
                  $fila['nombre'] = $this->spacein($fila['nombre']);
                  $fila['direccion'] = $this->spacein($fila['direccion']);


                $caca = "<?='. APP_W; ?>eliminaru/eliminaru2";
                $caca2 = '"<form class="registre" name="' . $patata . $i . 'form" method="post" action="' . APP_W . 'eliminaru/eliminaru2">"';
                $aaa.=$caca2;
                $aaa.= ('<tr>' . '<td>' . utf8_encode($fila['nombre']) . '</td>' .
                        '<td>' . utf8_encode($fila['direccion']) . '</td>' .
                        '<td>' . utf8_encode($fila['poblacion']) . '</td>' .
                        '<td>' . utf8_encode($fila['codigo_postal']) . '</td>' .
                        '<td>' . utf8_encode($fila['provincia']) . '</td>' .
                        '<td>' . utf8_encode($fila['pais']) . '</td>' .
                        '<td>' . utf8_encode($fila['aforo']) . '</td>' .
                        '<td>' . utf8_encode($fila['mapa']) . '</td>' .
                        '<td>' . utf8_encode($fila['parking']) . '</td>' .
                        '<td>' . utf8_encode($fila['hoteles']) . '</td>
<td>' . '<input type="submit" value="Borrar" name="' . $patata . $i . '">' . '</td>
<td>' . '<button><a href="'.APP_W.'modificaru">Modificar</a></button>' . '</td></tr>');


                $caca3 = '"<input type="text" style="display:block;" name="ubi" value="' . $patata . $i . '"></label></form>"';
                $aaa.=$caca3;
                ?> 
                </form>
                <?php
                $i++;
            }
            $aaa.="</table></div>";
            $_SESSION['ubi'] = $aaa;

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