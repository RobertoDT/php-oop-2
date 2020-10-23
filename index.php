<?php

  class Software{

    public $softwareHouse;
    public $nazione;
    public $nomeSoftware;
    public $numeroImpiegati;

    public function __construct($_softwareHouse, $_nomeSoftware){
      $this->softwareHouse = $_softwareHouse;
      $this->nomeSoftware = $_nomeSoftware;
    }
  }

  class Impiegato extends Software{

    public $nome;
    public $cognome;
    public $eta;
    public $livello;
    public $anniEsperienza;

    public function __construct($_nome, $_cognome, $_livello){
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->livello = $_livello;
    }
  }

//creo oggetti riferiti alla classe software
$software1 = new Software("Adobe", "Illustrator");
$software1->nazione = "Stati Uniti";
$software1->numeroImpiegati = 25000;

$software2 = new Software("Adobe", "Photoshop");
$software2->nazione = "Stati Uniti";
$software2->numeroImpiegati = 25000;

$software3 = new Software("Microsoft", "Skype");
$software3->nazione = "Stati Uniti";
$software3->numeroImpiegati = 150000;

$software4 = new Software("Facebook", "Whatsapp");
$software4->nazione = "Stati Uniti";
$software4->numeroImpiegati = 50000;

//creo array che raggruppa softwares
$softwares = [$software1, $software2, $software3, $software4];

//creo oggetti dell'estensione impiegato
$roberto = new Impiegato("Roberto", "Del Toro", 5);
$roberto->eta = 27;
$roberto->anniEsperienza = 1;
$roberto->softwareHouse = $software1->softwareHouse;


$alex = new Impiegato("Alex", "Olivieri", 1);
$alex->eta = 25;
$alex->anniEsperienza = 12;
$alex->softwareHouse = $software2->softwareHouse;

$samuele = new Impiegato("Samuele", "Madrigali", 2);
$samuele->eta = 29;
$samuele->anniEsperienza = 7;
$samuele->softwareHouse = $software3->softwareHouse;

//creo array che raggruppa impoegati
$impiegati = [$roberto, $alex, $samuele];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>oop extends</title>
  </head>
  <body>

    

  </body>
</html>
