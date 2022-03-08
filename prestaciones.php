<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="libreria3.js"></script>
</head>

<body>
    <h1>
        <p>Prestaciones sociales</p>
    </h1>
    <form name="formulario" action="otra.php" method="POST">
        <center>
            <table>
                <tr>
                    <td> <label for="salario"><b>Salario</b></label> </p>
                    </td>
                    <td> <input type="text" name="sal" id="sal" value="<?php  $salario = $_GET['sal'];
        echo $salario; ?>" disabled></ </td>
                </tr>
                <tr>
                    <td> <label for="transporte"><b>Aux. Transporte</b></label> </p>
                    </td>
                    <td> <input type="text" name="tra" id="tra" value="<?php  $tra = $_GET['transpo'];
                         echo $tra; ?>" disabled> </td>
                </tr>

                <tr>
                    <td> <label for="comisiones"><b>Comisiones</b></label> </p>
                    </td>
                    <td> <input type="text" name="com" id="com" value="<?php  $comi = $_GET['com'];
                         echo $salario; ?>" disabled> </td>
                </tr>
                <tr>
                    <td> <label for="horae"><b>Hora Extra</b></label> </p>
                    </td>
                    <td> <input type="text" name="he" id="he" value="<?php  $hex = $_GET['totalhex'];
                         echo $hex; ?>" disabled> </td>
                </tr>

                <tr>
                    <td><label for="devengado"><b>Total devengado</b></label></td>
                    <td align="center">
                        <p> <input type="text" name="deven" id="deven" disabled> </td>
                </tr>
                <tr>
                    <td><label for="prima"><b>Prima de servicios</b></label></td>
                    <td align="center"> <input type="text" name="prima" id="prima" disabled> </td>
                </tr>
                <tr>
                    <td><label for="cesantias"><b>Cesantías</b></label></td>
                    <td align="center"> <input type="text" name="cesantias" id="cesantias" disabled> </td>
                </tr>
                <tr>
                    <td><label for="intcesantias"><b>interéses de cesantías</b></label></td>
                    <td align="center"> <input type="text" name="intcesantias" id="intcesantias" disabled> </td>
                </tr>
                <tr>
                    <td><label for="vacaciones"><b>Vacaciones</b></label></td>
                    <td align="center"> <input type="text" name="vacaciones" id="vacaciones" disabled> </td>
                </tr>
                <tr>
                    <td><label for="prestacion"><b>Prestaciones</b></label></td>
                    <td align="center"> <input type="text" name="prestac" id="prestac" disabled> </td>
                </tr>

                <tr>

                    <td align="center"> <input type="button" name="enviar" value="calcular" onclick="social()"> </td>
                </tr>
                <tr>

                    <td align="center">
                        <a href="otra.php"><input type="submit" name="pasar" value="Siguiente"></a>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>
