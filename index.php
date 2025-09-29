<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
<!---Adat megjelenítési célt szolgálja -->


    <?php
        include_once("laptop.php");
        $l1 = new Laptop("Lenovo", "ThinkPad", "LTP444", 400000); //így jön létre az osztály. példányosítással. ez itt konkrétan a konstruktor hívásom. //adattagok módosíthatók a későbbi folyamán

        //egy db objektum:
        //$l1 = new Laptop("     ", "  ", "", -500);

        //érték: 4 parancs -> 4 adattag
        /*$l1->setGyarto("    ");
        $l1->setTipus("  ");
        $l1->setCikkszam("");
        $l1->setAr(-500);*/

        $l2 = new Laptop("Dell", "Latitude", "LTD565", 600000);

        print($l1->kiir() . "<br>");
        print($l2->kiir());
    ?>
</body>
</html>
