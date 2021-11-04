<?php
/**
UNIDAD 4 taller formularios
**/
require("escenario.php");
require("accion.php");

//leer todas las variables por POST
    foreach($_POST as $campo => $valor){
      echo "- ". $campo ." = ". $valor;
   }

if(isset($_REQUEST["Enviar"])){
   
                $fila = $_POST['fila'];
                $puesto= $_POST['puesto'];
                $accion= $_POST['accion'];
                $StringEscenario=$_POST['lista'];
         
                $count=0;
                for($i=0;$i<5;$i++){
                    for($j=0;$j<5;$j++){
                        $count=5*$i+$j;
                      
                        $lista[$i][$j]=substr($StringEscenario,$count,1);                        
                    }
                    $count=0;
                }
        
        $lista=Accion($fila,$puesto,$accion,$lista);
      
        Escenario($lista);
}

else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
    $lista=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
    Escenario($lista);
}
?>
    
<body>
    <table style="margin:auto;">
        <form method="POST">
            
            <input type="hidden" name="lista" value="<?php foreach ($lista as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>"  />
           
            <tr>
                <td>Fila: </td>
                <td>
                    <input type="text" name="fila" size="4">
                </td>
            </tr>
            <tr>
                <td>Puesto: </td>
                <td>
				    <input type="text" name="puesto" size="4">
                </td>
            </tr>
            <tr>
                <td>Reservar: </td>
                <td>
                    <input type="radio" name="accion" value="R" />
                </td>
            </tr>
            <tr>
                <td>Comprar: </td>
                <td>
                    <input type="radio" name="accion" value="V" />
                </td>
            </tr>
            <tr>
                <td>Liberar: </td>
                <td>
                    <input type="radio" name="accion" value="L" checked="checked" />
                </td>
            </tr>
            <tr>
            <!-- botones -->
                <td>
                    <input type="submit" value="Enviar" name="Enviar" />
                </td>
                <td>
                    <input type="submit" value="Borrar" name="Reset" />
                </td>
            </tr>
        </form>
    </table>
</body>
