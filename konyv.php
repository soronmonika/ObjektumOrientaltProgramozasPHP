<?php
class Konyv{
  private string $cim;
  private string $szerzo;
  private int $oldalszam;

  public function __construct(string $cim, string $szerzo, int $oldalszam){
    $this->cim=$cim;
    $this->szerzo=$szerzo;
    $this->oldalszam=$oldalszam;
  }

  public function kiir():string{
    return "A könyv címe: " . $this->cim . ", a könyv szerzője: ". $this->szerzo . " és az oldalszáma: ". $this->oldalszam . "db";
  }

  //ha van getter-setter, a mezőket privátra teszem
  //getter: csak visszaad(nem módosít)
  public function getCim(): string{
    return $this->cim;
  }

  public function getSzerzo():string{
    return $this->szerzo;
  }

  public function getOldalszam():int{
    return $this->oldalszam;
  }

  //setter: beállít és ellenőriz
  public function setCim(string $cim):void{
    if(strlen(trim($cim))>0){//ha nem üres
      $this->cim=$cim;//eltároljuk
    }
    else{
      $this-> cim="N.A.";//ez biztosítja, hogy ne legyen üres a cím.
    }
  }

  public function setSzerzo(string $szerzo):void{
    if(strlen(trim($szerzo))>0){
      $this->szerzo=$szerzo;
    }
    else{
      $this->szerzo="N.A.";
    }
  }

  public function setOldalszam(int $oldalszam):void{
    if($oldalszam>0){
      $this->oldalszam=$oldalszam;
    }
    else{
      $this->oldalszam=-1; //ez a legfontosabb védelem, mert az oldalszám nem lehet negatív érték.
    }
  }
}
