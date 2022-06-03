<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de formularios</title>
</head>
<body>
    <form method="post" action="lab5_1.php">
        Precio Actual pruebba:<br> <input type="text" name="precio"><br>
        Cantidad de unidades<br> <input type="text" name="unidades"><br>

        <input type="submit" name="producto" value="Calcular">
        <input type="reset" name="Cancelar" value="Cancelar">

         <br>
    </form>

    <?php
     $PrecioGaseosa=$_POST['precio'];
     $Unidades=$_POST['unidades'];

     $Rebaja = $PrecioGaseosa - ($PrecioGaseosa * 0.05);
     $obsequio = $Unidades * 2;
     $ImporteDescuento =($Rebaja * $Unidades) * 0.07;
     $Importecompra =($Rebaja * $Unidades)- $ImporteDescuento;

     echo "La rebaja de la gaseosa según su precio es: S/.".$Rebaja."<br>";
     echo "El importe de la compra sera S/.".$Importecompra."<br>";
     echo "El importe del descuento sera S/.".$ImporteDescuento."<br>";
     echo "El número de obsequios sera: ".$obsequio."<br>";
     
     

?>
</body>
</html>