<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Leck mir den Hobel hahahaha";
        echo "jetzt gehts lso";
        echo 1+2;
        $testkoko = array("Hase", "Hund","Katze","Maus");
        var_dump($testkoko);
        $counter = 0;
        foreach($testkoko as $item){
            $counter++;
            echo $counter." ".$item;
        }
        
        echo "Kiki";
        ?>
    </body>
</html>
