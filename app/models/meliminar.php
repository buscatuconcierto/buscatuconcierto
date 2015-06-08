<?php

/**
 * @Autor Carlos Vicente
 * @Autor Carlosvicente100@gmail.com
 * Copyright 2015 ~ M7 DAW */

/**
* Modelo mEliminar
*/
class mEliminar extends Model {

/**
* funcion eliminar recoge una variable que utiliza para un delete de la tabla usuarios
*/
    function eliminar($id) {
        try {
            $sql = "DELETE FROM usuarios WHERE id = ? ";
            /* Ejecutar la sentencia */
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $id);
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
* funcion tablaborrar hace un select de usuarios y lo muestra en una tabla
*añade a la tabla dos botones, uno para borrar cada registro y uno para modificar
*/
        function tablaborrar() {
        try {
            $sql = "SELECT id,nombre,nif,apellidos,email,fecha_nacimiento,poblacion,rol,puntos FROM  usuarios usu";

            $query = $this->db->prepare($sql);

            $query->execute(); //fetch per rol

            $aaa = "<table id='tabla_eliminar'>";
            $aaa.= ('<tr id="cabeceras"><td>' . 'id' . '</td>
             <td>' . 'Nombre' . '</td>
             <td>' . 'Nif' . '</td>
             <td>' . 'Apellidos' . '</td>
             <td>' . 'Email' . '</td>
             <td>' . 'Fecha_nacimiento' . '</td>
             <td>' . 'Poblacion' . '</td>
             <td>' . 'Rol' . '</td>
             <td>' . 'Puntos' . '</td>
             <td>' . 'Eliminar' . '</td>
             <td>' . 'Modificar' . '</td>
             </tr>');
            /*   var_dump($aaa);
              die;
             */ $i = 0;

            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {

                $patata . $i = $fila['id'];
                ?>
                <?php
                $caca = "<?='. APP_W; ?>eliminar/eliminar2";
                $caca2 = '"<form class="registre" name="' . $patata . $i . 'form" method="post" action="' . APP_W . 'eliminar/eliminar2">"';
                $aaa.=$caca2;
                $aaa.= ('<tr>' . '<td>' . utf8_encode($fila['id']) . '</td>' .
                        '<td>' . utf8_encode($fila['nombre']) . '</td>' .
                        '<td>' . utf8_encode($fila['nif']) . '</td>' .
                        '<td>' . utf8_encode($fila['apellidos']) . '</td>' .
                        '<td>' . utf8_encode($fila['email']) . '</td>' .
                        '<td>' . utf8_encode($fila['fecha_nacimiento']) . '</td>' .
                        '<td>' . utf8_encode($fila['poblacion']) . '</td>' .
                        '<td>' . utf8_encode($fila['rol']) . '</td>
          <td>' . utf8_encode($fila['puntos']) . '</td>
<td>' . '<input type="submit" value="Borrar" name="' . $patata . $i . '">' . '</td>
<td>' . '<button><a href="'.APP_W.'modificar">Modificar</a></button>' . '</td></tr>');


                $caca3 = '"<input type="text" style="display:block;" name="id" value="' . $patata . $i . '"></label></form>"';
                $aaa.=$caca3;
                ?> 
                </form>
                <?php
                $i++;
            }
            $aaa.="</table></div>";
            $_SESSION['usuarios'] = $aaa;
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
