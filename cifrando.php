<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cifrando</title>
</head>
<body>
    <header><h1>Cifrar un mensaje</h1></header>
    <main>
        <form action="#">
        <div>
            <label for="msgToCif" class="lblCif">Ingrese su mensaje</label>
            <textarea name="msgToCif" id="msgToCif" class="areasCif" maxlength="10" cols="10" rows="3" required autofocus></textarea>

            <input type="submit" class="actbtn" value="Cifrar">

            <label for="msgToDes" class="lblCif">Mensaje cifrado</label>
            <textarea name="msgToDes" id="msgToDes" class="areasCif" maxlength="10" cols="10" rows="3"></textarea>
        </div>
        </form>
    </main>
</body>
</html>