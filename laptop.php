<?php
//minden osztálynak van külön fájlja van.

//ha osztályokat akarok létre hozni: CLASS szó! --> {}
class Laptop{ //magától felhozza ami a fájl neve - az osztály neve. nagy kezdő betű ált. || nincs többesszámba az osztály. 1-es szám
    //Adattagok / Mezok:
    // (Properties)-> Az osztályban adattagok vagy mezők, amik az objektumhoz tartozó adatokat tárolják.
    private string $gyarto;//private: Láthatósági szint. Azt modnja meg, ki férhet hozzá. Csak az osztályon belül használható, kívülről nem. -> Ez segít abban, hogy az adatok ne legyenek "szabad prédák", csak ellenőrzött módon érjük el őket. (private(csak az adott típuson belül látható az adott elem.)||protected(Csak az adott típuson belül és a leszármazottaknak látható az elem)||public(Mindenkinek éátható az adott elem.))
    private string $tipus; //string||int Ezek típusok, vagyis milyen adatot várunk.
    private string $cikkszam; //típusbiztonság: nem lehet véletlenül szám helyett szöveget betenni.
    private int $ar;

    //Konstruktor (specialis alprogram (metodus)): lefut amikor megtörténik a példányosítás.
    //mindenképp publicnak kell lennie, mert a konsktruktor a külvilág számára láthatónak kell lennie hiszen példányosok lefutásakor fut le. ergo az objektum létrejöttekor tud végre hajtani dolgokat folyamatokat.
    // az ő feladata: az adattagokba a kezdő értékeket behelyezze.
    //a speckós alprogramnak a neve: __construct -> mindig így jó.
    public function __construct(string $gyarto, string $tipus, string $cikkszam, int $ar){ //( ezek az értékek, amiket az objektum létrehozásakor adunk meg.)
        $this->setGyarto($gyarto); //$this: mindig arra az objektumra mutat, amelyik létre jön. A mezőket minden esetben a $this speciális jelölőn keresztül érjük el. $this->változó
        $this->setTipus($tipus); //tehát az $l1-en belüli privát adattag gyártó kapja meg a konstruktor paraméter gyártó értéket.
        $this->setCikkszam($cikkszam);//ezek átadásra kerülnek a privát adattagoknak.
        $this->setAr($ar);
    }

    //Alprogramok: Getter-Setter: biztosítanak hozzá férést a külvölág részére a privátan tárolt adattagokhoz, bizonyos feltételekkel
    //külvilág: nem a felhasználót értjük, hanem a kód többi/másik részét.

    //Getter: kiolvasó, ami a privát adattagokat, publikus - a külvilág számára átadja.
    public function kiir():string{ //ez szöveget készít az objektumról
        return $this->getGyarto() . " " . $this->getTipus() . ": " . $this->getCikkszam() . " (" . $this->getAr() . " Ft, br. " . $this->bruttoAr(27) . " Ft)";
    }//meghívja a getterek, és kiírja: gyártó+típus+cikkszám+nettó ár+bruttó

    private function bruttoAr(int $szazalek):int{ //bruttoArat bruttó ár metódus számolja ki.
        return $this->getAr() * ($szazalek / 100 + 1); //ez csak az osztályos belül használható(private)
    }//kiszámolja az ár ÁFa-val növelt változatát.


    //Getter: ezek vissza adják a privát adattagok értékét.
    //getter:
    public function getGyarto():string{ //Miért kell? mert az adattagok privátok->közvetlenól nem férhetünk hozzájuk kívülről.
        return $this->gyarto;
    }
//Miért van így megoldva? Elválasztjuk a felelősségeket:
//Getter: csak visszaad || Setter: csak beállít ||
//bruttoAr():csak számol|| kiir(): csak kiírásra szolgál.
//így a kód sokkal átláthatóbb, és könnyebben bővíthető pl.: ha később változik az áfa SZÁMÍTÁS LOGIKÁJA, CSAK A BRUTTÓ ÁR-T kell átírni. a többi maradhat.

    public function getTipus():string{
        return $this->tipus;
    }

    public function getCikkszam():string{
        return $this->cikkszam;
    }

    public function getAr():int{
        return $this->ar;
    }

    //setter: egy speciális metódus, amivel beállítjuk/módosítjuk egy osztály adatagját.
    //Célja: ellenőrizni és biztosítani, hogy csak helyes adat kerüljön be.
    //A setter a program "ár kutyái". Nem engedik, hogy rossz adat kerüljön a változókba. Így az osztályod megbízhatóbb és biztonságosabb lesz.

    //Metódusok, hiszen ők nem fognak értéket vissza adni, ők valahogyan a privát adattagok részére fognak beengedni infót, paramétereken keresztül.
    public function setGyarto(string $gyarto):void{ //(string $gyarto=paraméterérték.)
        if(strlen(trim($gyarto)) > 0){ //ha a szöveg nem üres
            $this->gyarto = $gyarto; //eltároljuk
        }
        else{
            $this->gyarto = "N.A."; //ha üres, N.A.
        }//ez biztosítja, hogy a gyártó neve sose legyen üres string, hanem mindig legyen egy értelmes alapérték.
    }

    public function setTipus(string $tipus):void{
        if(strlen(trim($tipus)) > 0){
            $this->tipus = $tipus;
        }
        else{
            $this->tipus = "N.A.";
        }
    }

    public function setCikkszam(string $cikkszam):void{
        if(strlen(trim($cikkszam)) > 0){
            $this->cikkszam = $cikkszam;
        }
        else{
            $this->cikkszam = "N.A.";
        }
    }

    public function setAr(int $ar):void{
        if($ar >= 0){//ha az ár nem negatív
            $this->ar = $ar;
        }
        else{
            $this->ar = -1;//ha rossz érték jött ->-1
        }//Ez a védelem a legfontosabb: ár nem lehet negatív
    }
}


//php-t le se kell zárni, mert így az egész fájl tartalma php lesz. csak megnyitjuk és csak használhatjuk.
