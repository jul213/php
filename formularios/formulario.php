<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="dispositivo">Dispositivo</label>
        <select name="dispositivo" name="dispositivo[]" multiple>
            <option value="ipad">Ipad</option>
            <option value="celular">Celular</option>
            <option value="computador">Computador</option>
            <option value="laptop">Portatil</option>
        </select>

        <br>
        <br>
        <h1>te gusta la programacion?</h1>
        <label for="opcion-1">
            <input type="checkbox" value="si" id="opcion-1" name="si">
            si me gusta
        </label>

        <label for="opcion-2">
            <input type="checkbox" value="no" id="opcion-2" name="no">
            no me gusta
        </label>
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
