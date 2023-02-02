<?php

   class Person{
      protected $name;
      public function setName($name){
         $this->name = $name;
      }
      public function getName(){
         return $this->name;
      }
   }
   $person = new Person();
   $person->setName("Devang");
   echo $person->getName();

?> 