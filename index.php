<?php
     class Animal extends Farm
     {
          public $id;
          public $animalName;
          public $earningProd;

          public function __construct($animalName, $NumberOfMeterials){
               echo 'Fram has '.count(parent::$barn).' animals!'.'<br>';

               parent::$countAnimal++;

               //construct of `this` class
               // $this->id = 'id_'.parent::$countAnimal.'e'.rand(100,999);
               $this->id = parent::$countAnimal;
               $this->animalName = $animalName;
               $this->earningProd = rand($NumberOfMeterials[0], $NumberOfMeterials[1]);

               //add `this` animal to the Farm class
               array_push(parent::$barn, array(
                    'id' => $this->id,
                    'name' => $this->animalName,
                    'earningProduct' => $this->earningProd,
               ));
          }

          public function getStrProd(){ //recive data
               return 'Name: '.$this->animalName.'; Earning: '.$this->earningProd;
          } 

          public function takeProd(){
               parent::$storeItems += $this->earningProd;
          }
     }

     class Farm
     {
          public static $barn = [];
          public static $storeItems = 0;
          public static $countAnimal = 0;

          public function __construct(){} 

          //show one data of Farm
          public function getDataOne($idx){
               echo '<br><br>Showing a one data of ferm by Id: <br>';
               foreach (self::$barn as $value) {
                   if ($value['id'] == $idx){
                         echo 'id: '.$value['id'].', name: '.$value['name'].', earning product: '.$value['earningProduct'].'<br>';
                   }
               }
          }

          public function getDataAll(){
               echo '<br><br>Showing a barn of ferm: <br>';
               if (count(self::$barn) != 0){
                    foreach (self::$barn as $value) {
                         echo 'id: '.$value['id'].', name: '.$value['name'].', earning product: '.$value['earningProduct'].'<br>';
                    }
                    return '';
               }
                    
               return 'Error in getDataAll function<br>';
          }

          public function takeProd(){}
          public function getStrProd(){}
     }

     $farm = new Farm();

     $Cow1 = new Animal('Cow', [8, 12]);
     $Chicken1 = new Animal('Chicken', [0, 1]);
     $Cow2 = new Animal('Cow', [8, 12]);

     echo $Cow1->getStrProd();

     echo $farm->getDataAll();
     echo $farm->getDataOne(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <title>Farm in PHP</title>
</head>
<body class="container d-flex p-2" style="border: 1px solid gray; margin: 2em; width: 20%;">
     <div><p>Created by Vadim Makarov</p></div>
</body>
</html>