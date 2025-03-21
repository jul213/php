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
        $nameErr = $emailErr = $genderErr = "";

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

            if (empty($_POST["website"])) {
                $website = "";
            } else {
                
                $website = test_input($_POST["website"]);
            }

            if (empty($_POST["comment"])){
                $comment =  "";
            } else {
                $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])){
                $genderErr = "Tienes que seleccionar uno";
            } else {

                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <h2>Validacion de Formulario</h2>
    <p>mensajes de error señalados con un *</p>
    <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Ingresa tu Nombre: </label>
        <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br>
        <label for="email">Ingresa tu email: </label>
        <input type="email" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br>
        <label for="website">Ingresa tu website: </label>
        <input type="text" name="website">
        <br>
        <label for="comentario">Comentario: </label>
        <br>
        <textarea name="comment" rows="20" cols="25"></textarea>
        <br>
        <label for="gender">Indique su genero: </label>
        <input type="radio" name="gender" value="mujer"> Mujer
        <input type="radio" name="gender" value="hombre"> Hombre
        <input type="radio" name="gender" value="other"> No decirlo
        <span class="error">* <?php echo $genderErr; ?></span>
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