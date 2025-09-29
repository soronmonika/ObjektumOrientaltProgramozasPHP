<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gyakorlás - Könyvek</title>
</head>
<body>
  <?php
  include_once("konyv.php");

  $konyv1= new Konyv("Egri csillagok", "Gárodnyi Géza", 6000);
  print_r($konyv1->kiir() . "<br>");
  $konyv2=new Konyv("Légy jó mindhalálig","Móricz Zsigmond",3000);
  print_r($konyv2->kiir());

  //setter teszt, ha üres a cím:
  $konyv2->setCim("    ") ;
  print_r("<br>"."Frissítve".$konyv2->kiir());
  ?>
</body>
</html>
