<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gyakorlás - OOP</title>
</head>
<body>
  <?php
  include_once("Gy01.php");
  //Új objektum létrehozása -> itt autómatikusan meghívódik a konstruktor, példányosítás
  //Így minden új objektumnál már kezdetkor lesznek értékek, nem kell külön később beállítgatni.
  $ember1=new Ember("Anna", 25);
    print_r($ember1->koszones()."<br>");
  $ember2=new Ember("Béla", 30);
    print_r($ember2->koszones());

  $ember2->setNev("   ");
  print_r("<br>" . "Frissítve" . $ember2->koszones());

  ?>
</body>
</html>
