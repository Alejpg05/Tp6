<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tienda de ropa</h1>

    <h2>Lista de prendas marca Nike</h2>
    <p>La siguiente lista muestra las prendas Nike</p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
        </tr>
        <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tienda");
        $consulta = "SELECT*FROM ropa WHERE marca='nike'";
        $datos = mysqli_query($conexion, $consulta);


        while ($productos = mysqli_fetch_array($datos)) { ?>
            <tr>
                <td><?php echo $productos['id']; ?></td>
                <td><?php echo $productos['prenda']; ?></td>
                <td><?php echo $productos['marca']; ?></td>
                <td><?php echo $productos['talle']; ?></td>
                <td><?php echo $productos['precio']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="listar.php">Volver</a>

</body>

</html>