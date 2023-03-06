<?php

session_start();

if ($_SESSION[auth] != 'si')
{
	header('Location: index.php');
}

$codigo;
$cadena_codigo = "murcielago";
$cod_elem = strlen($cadena_codigo);

for ($i=0; $i<$cod_elem; $i++)
{
    $codigo[$i] = $cadena_codigo[$i];
}

if ($_POST[toDes])
{
    $cadenaC = $_POST[toDes];

    for ($i=0; $i<$cod_elem; $i++)
    {
        $busqueda = '/' . $i . '/i';
        preg_match($busqueda, $cadenaC, $res);

        if (isset($res[0]))
        {
            $busqueda2 = '/' . $res[0] . '/i';
            $cadenaC = preg_replace($busqueda2, $codigo[$i], $cadenaC);
            reset($res);
        }
    }

    $_SESSION[toShow] = $cadenaC;
    header('Location: descifrando.php');
}
else 
    {
        header('Location: index.php');
    }
?>