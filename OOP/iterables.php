<?php 

    function printIterable(iterable $miIterable){
        foreach($miIterable as $item){
            echo $item;
        }
    }


    function getIterable():iterable {
        return ["a", "b", "c"];
    }


    
?>