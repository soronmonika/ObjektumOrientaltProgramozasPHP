<?php

class Ember{
  private string $nev;
  private int $kor;

  //Konstruktor: autómatikusan lefut, amikor létrehozol egy új Embert-t
  public function __construct(string $nev, int $kor){
    $this->nev=$nev; //állítsa be az aktuális objektumot nev adattagját a konstruktorba kapott $nev paraméter értékre
    $this->kor=$kor;//ezek a függvények csak a (konstruktor) paraméterei, tehát csak a konstruktoron belül élnek. //property neve->$kor
  }

  public function koszones():string{
    return "Szia, a nevem " . $this->nev . ", és " .$this->kor . " éves vagyok.";
  }

  //getter: csak visszaad
  public function getNev():string{
    return $this->nev;
  }
  public function getKor():int{
    return $this->kor;
  }

  //setter: csak beállít paramétereken keresztül
  public function setNev(string $nev):void{
    if(strlen(trim($nev))>0)//strlen=megadja, hogy hány karakteres az adott szöveg||trim=eltávolítja a felesleges szóközöket
    $this->nev=$nev;//ezt a nevet elmentem a név változóba
  }
  else{
    $this->nev="N.A.";
  }

  public function setKor(int $kor):void{
    if(strlen(trim($kor))>0)
    $this->kor=$kor;
  }
  else{
    $this->kor=-1;
  }
}
