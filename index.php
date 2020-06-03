<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP OOP prodotto</title>
  </head>
  <body>
  <?php



   //inizio televisori-----------------
   class Television {

     public $category;
     public $brand;
     public $inch;

     public function __construct($inch,$brand,$category){

       $this -> category = $category;
       $this -> brand = $brand;
       $this -> inch = $inch;

     }
     // public function CategoryLCD(){
     //
     //  return getPrice() * 1.2;
     //
     // }
     public function getPrice(){

       return $this -> inch * 7.5;

     }

     public function printProduct(){

       echo "Television " . $this -> brand . " " . $this -> category . " with "
       . $this -> inch . " inch" . "<br>" . "Price: " . $this -> getPrice() . "$" . "<br>---------<br>";

     }
   }



  // inizio proiettori----------------------
   class Beamer extends Television {

      public $autonomyLamp;
     public function __construct($inch,$brand,$category,$autonomyLamp){

      parent::__construct($inch,$brand,$category) ;

       $this -> autonomyLamp = $autonomyLamp;

     }
     public function printProduct(){

       echo "Beamer " . $this -> brand . " " . $this -> category . " with "
       . $this -> inch . " inch" . "<br>" . "Price: " . $this -> getPrice() . "$"
       . ". autonomy Lamp = " . $this -> autonomyLamp . "<br>---------<br>";

     }

   }


   // creo tv1 con inch, brand e category
   $tv1 = new Television(46,"Sony","LCD");

   // creo tv2 con inch, brand e category
   $tv2 = new Television(32,"Samsung","Plasma");

   // creo tv3 con inch, brand e category
   $tv3 = new Television(55,"LG","Plasma");

   // stampo televisori
   $tv1 -> printProduct();
   $tv2 -> printProduct();
   $tv3 -> printProduct();
   echo "<br>----------------------------------------------------<br>";

    // creo proiettore 1
    $beamer1 = new Beamer(85,"SONY","HDD","5000 hours");

    // creo proiettore 2
    $beamer2 = new Beamer(120,"EPSON","4K","6000 hours");

    // creo proiettore 3
    $beamer3 = new Beamer(85,"ACER","4K","7000 hours");

    // stampo proiettori
    $beamer1 -> printProduct();
    $beamer2 -> printProduct();
    $beamer3 -> printProduct();

   ?>
  </body>
</html>
