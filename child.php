<?php include('Book.php'); ?>
<?php

  class Novel extends Book{
      var $publisher;


      function setpublisher($par){
      	$this->publisher = $par;
      }
      function getpublisher(){
      	echo $this->publisher;
      }

  }

  $shakespeare = new Novel ("Shakespeare in love",500);
  $shakespeare->setpublisher("McGraw Hill");
  $shakespeare->gettitle();
  $shakespeare->getprice();
  $shakespeare->getpublisher();

?>