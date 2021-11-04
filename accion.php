<?php
function Accion($fila,$puesto,$accion,$lista){

        if($lista[$fila-1][$puesto-1] == 'L' || $lista[$fila-1][$puesto-1] == 'R' ){
                $lista[$fila-1][$puesto-1]=$accion;
                echo "<script>alert('";
                echo " Accion Realizada satisfactoriamente"; 
                echo "')";
                echo "</script>'";
            
       }else{
           echo '<script>alert("No puede cambiar a estado reservado o liberado")</script>';
       }
      
 
        return $lista;
}
?>
