<?php session_start(); 
$_SESSION['auth']='si';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body>
    <header><h1>BatCipher</h1></header>
    <main>
        <div class="divsBordeVisible" id="divIndex" >
            <ul>
                <li><a href="cifrando.php">Cifrar</a></li>
                <li><a href="#">Descifrar</a></li>
            </ul>
        </div>
    </main>
    <footer><p>by azazel</p></footer>    
</body>
</html>