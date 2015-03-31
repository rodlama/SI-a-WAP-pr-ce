<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "text.php"; // nacteni třídy
        $textak = new text("h1"); //nastavení TAGU
        $textak->text("Testovaci test naspisu");//nastavení Obsahu
        echo $textak; //vypsání
        
        $textak = new text("span");
        $textak->text("Testovaci test spanu");
        echo $textak;

        $textak = new text("p");
        $textak->text("Testovaci test odstavce");
        echo $textak;
        

        $textak = new text("sfdhjgk"); //spatne zadaný TAG
        $textak->text("sadghj");
        echo $textak;
        ?>
    </body>
</html>
