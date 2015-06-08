 <?php

/**
* Modelo mEliminars
*/
 class mEliminars extends Model {

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
* funcion eliminars recibe una variable que usa como filtro para borrar en stock
*/
    function eliminars($stock) {
        try {
            $sql = "DELETE FROM stock WHERE evento = ? ";
            /* Ejecutar la sentencia */
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $stock); 
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
*funcion tablaborrars 
* hace un select de stock y genera una tabla mostrando todos los registros
*añadiendo al final un boton para modificar o eliminarlos
*/
 function tablaborrars() {
        try {
            $sql = "SELECT evento,cantidad,precio,vendidas FROM  stock st";

            $query = $this->db->prepare($sql);

            $query->execute(); //fetch per rol

            $aaa = "<table id='tabla_eliminar'>";
            $aaa.= ('<tr id="cabeceras"><td>' . 'Evento' . '</td>
             <td>' . 'Cantidad' . '</td>
             <td>' . 'Precio' . '</td>
             <td>' . 'Vendidas' . '</td>
             <td>' . 'Eliminar' . '</td>
             <td>' . 'Modificar' . '</td>
             </tr>');
               /*var_dump($aaa);
              die;*/
              $i = 0;

            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {

                $patata . $i = $fila['evento'];
                $fila['evento'] = $this->spacein($fila['evento']);

                $caca = "<?='. APP_W; ?>eliminars/eliminars2";
                $caca2 = '"<form class="registre" name="' . $patata . $i . 'form" method="post" action="' . APP_W . 'eliminars/eliminars2">"';
                $aaa.=$caca2;
                $aaa.= ('<tr>' . '<td>' . utf8_encode($fila['evento']) . '</td>' .
                        '<td>' . utf8_encode($fila['cantidad']) . '</td>' .
                        '<td>' . utf8_encode($fila['precio']) . '</td>' .
                        '<td>' . utf8_encode($fila['vendidas']) . '</td>
<td>' . '<input type="submit" value="Borrar" name="' . $patata . $i . '">' . '</td>
<td>' . '<button><a href="'.APP_W.'modificars">Modificar</a></button>' . '</td></tr>');


                $caca3 = '"<input type="text" style="display:block;" name="stock" value="' . $patata . $i . '"></label></form>"';
                $aaa.=$caca3;
                ?> 
                </form>
                <?php
                $i++;
            }
            $aaa.="</table></div>";
            $_SESSION['stock'] = $aaa;

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