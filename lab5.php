<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de formularios</title>
</head>
<body>
    <form method="post" action="lab5.php">
        Numero de hijos:<br> <input type="text" name="nro_hijos"><br>
        Importe total del mes:<br> <input type="text" name="importe_total"><br>

        <input type="submit" name="producto" value="Calcular">
        <input type="reset" name="Cancelar" value="Cancelar">

         <br>
        <p>Nota: Se debe considerar solo a los hijos que se encuentren en edad escolar </p>
    </form>

    <?php
     $sueldoBasico = 600;

     $numero1=$_POST['nro_hijos'];
     $totalvendido=$_POST['importe_total'];

     $bonificacion = $numero1 * 50;

     $comision = $totalvendido * 0.075;

     $Sueldoneto = ($sueldoBasico + $comision + $bonificacion) - ($sueldoBasico + $comision + $bonificacion) *0.11;
     
     echo "La bonificacion por hijos es: S/.".$bonificacion."<br>";
     echo "comision: S/.".$comision."<br>";
     echo "El sueldo neto es: S/.".$Sueldoneto."<br>";
     

?>
</body>
</html>