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
    <link rel="stylesheet" href="css/style.css">
    <title>oop extends</title>
  </head>
  <body>

    <h1 class="title">Softwares</h1>

    <div class="wrapper">
      <?php foreach ($softwares as $software): ?>
        <div class="software">
          <p><strong>Nome del Software: </strong><?php echo $software->nomeSoftware; ?></p>
          <p><strong>Software House: </strong><?php echo $software->softwareHouse; ?></p>
          <p><strong>Nazionalità: </strong><?php echo $software->nazione; ?></p>
          <p><strong>Numero Impiegati: </strong><?php echo $software->numeroImpiegati; ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <h2 class="title f-s35">Impiegati</h2>

    <div class="wrapper">
      <?php foreach ($impiegati as $impiegato): ?>
        <div class="impiegati">
          <p><strong>Nome Impiegato: </strong><?php echo $impiegato->nome ?></p>
          <p><strong>Cognome Impiegato: </strong><?php echo $impiegato->cognome ?></p>
          <p><strong>Età Impiegato: </strong><?php echo $impiegato->eta ?></p>
          <p><strong>Livello contratto: </strong><?php echo $impiegato->livello ?></p>
          <p><strong>Anni di esperienza: </strong><?php echo $impiegato->anniEsperienza ?></p>
          <p><strong>Azienda in cui lavora: </strong><?php echo $impiegato->softwareHouse ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </body>
</html>
