<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php 

        $name = $email = $gender = $comment = $website = "";
        $nameErr = $emailErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            if (empty($_POST["name"])){
                $nameErr = "El campo de name es obligatorio no puede estar vacio";
            } else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])){
                $emailErr = "El campo de email es obligatorio";
            } else {
                $email = test_input($_POST["email"]);
            }
            $gender = test_input($_POST["gender"]);
            $comment = test_input($_POST["comment"]);
            $website = test_input($_POST["website"]);
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <h2>Validacion de Formulario</h2>
    <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Ingresa tu Nombre: </label>
        <input type="text" name="name">
        <br>
        <label for="email">Ingresa tu email: </label>
        <input type="email" name="email">
        <br>
        <label for="comentario">Comentario: </label>
        <textarea name="comment" rows="20" cols="25"></textarea>
        <br>
        <label for="gender">Indique su genero: </label>
        <input type="radio" name="gender" value="mujer"> Mujer
        <input type="radio" name="gender" value="hombre"> Hombre
        <input type="radio" name="gender" value="other"> No decirlo
        <br>
        <input type="submit" name="Submit">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr){

            echo "<h2>Datos recividos del formulario</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Comentario: " . $comment . "<br>";
            echo "genero: " . $gender . "<br>";
            echo "website: " . $website . "<br>";
        }
    ?>
</body>
</html>