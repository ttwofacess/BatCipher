<?php session_start();

if ($_SESSION[auth] != 'si')
{
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Descifrando</title>
</head>
<body>
    <header><h1>Descifrar un mensaje</h1></header>
    <main>
        <form method="POST" action="descifrando_exec.php">
        <div>
            <label for="toDes" class="lblCif">Ingrese su mensaje</label>
            <textarea name="toDes" id="toDes" class="areasCif" maxlength="100" cols="10" rows="3" require autofocus></textarea>

            <input type="submit" class="actbtn" value="Descifrar">

            <label for="toShow" class="lblCif">Mensaje descifrado</label>

            <?php
            $txtarD = '<textarea name="toShow" id="toShow" class="areasCif" maxlength="10" cols="10" rows="3" readonly>';
            $txtarD .= "$_SESSION[toShow]";
            $txtarD .= '</textarea>';
            echo $txtarD;
            $_SESSION[toShow] = "";
            ?>
        </div>
        </form>
        <br />
        <a class="volver" href="index.php">Ir a inicio</a>
    </main>
    <footer><p>by azazel</p></footer>
</body>
</html>