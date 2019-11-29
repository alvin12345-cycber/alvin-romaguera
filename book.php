<?php

   class Book {

   	   var $title;
   	   var $price;

   	  function __construct($par1, $par2) {
          $this->title =  $par1;
          $this->price =  $par2;
   	  }
      function gettitle() {
          echo $this->title.'<br/>';
   	  }
   	  function getprice() {
   	  	  echo $this->price.'<br/>';   	
   	  }
   }


   $physics = new Book ("physics for high School", 500);
   $maths = new Book ("Advance Mathematics", 600);

   $physics->gettitle();
   $physics->getprice();
   $maths->gettitle();
   $maths->getprice();
?>
