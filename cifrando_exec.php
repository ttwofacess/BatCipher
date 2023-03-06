<?php

    session_start();

    if ($_SESSION[auth] != 'si')
    {
	    header('Location: index.php');
    }

    $codigo;
    $cadena_codigo = "murcielago";
    $cod_elem = strlen($cadena_codigo);
    for ($i=0; $i < $cod_elem; $i++)
    {
        $codigo[$i] = $cadena_codigo[$i];
    }

    if ($_POST[msgToCif])
    {
        $cadena = $_POST[msgToCif];
        //$cad_elem = strlen($cadena);
        
        //for ($i=0; $i<$cad_elem;$i++)
        for ($i=0; $i<$cod_elem;$i++)
        {
            $busqueda = '/' . $codigo[$i] . '/i';
            preg_match($busqueda, $cadena, $res);

            if (isset($res[0]))
            {
                $busqueda2 = '/' . $res[0] . '/i';
                $cadena = preg_replace($busqueda2, $i, $cadena);
                reset($res);
            }
        }

        $_SESSION[msgToDes] = $cadena;
        header('Location: cifrando.php');
    } 
    else 
    {
        header('Location: index.php');
    }
?>