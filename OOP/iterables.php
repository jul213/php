<?php 

    function printIterable(iterable $miIterable){
        foreach($miIterable as $item){
            echo $item;
        }
    }


    function getIterable():iterable {
        return ["a", "b", "c"];
    }

    $myIterable = getIterable();

    foreach($myIterable as $item){
        echo $item;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creamos un Iterador</title>
</head>
<body>
    <?php 
    
        class MyIterator implements Iterator {
            private $items = [];
            private $pointer = 0;

            
        }
    ?>
</body>
</html>