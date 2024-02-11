<?php

   $connection = mysqli_connect('localhost','root','','pay');

   if(isset($_POST['submit'])){
      $card_number = $_POST['card_number'];
      $card_holder = $_POST['card_holder'];
      $expiration_mm_dd_yy = $_POST['expiration_mm_dd_yy'];
      // $expiration_yy = $_POST['expiration_yy'];
      $cvv = $_POST['cvv'];
      
      $request = " insert into pay_form(card_number,card_holder , expiration_mm_dd_yy,  cvv) values('$card_number','$card_holder','$expiration_mm_dd_yy','$cvv') ";
      mysqli_query($connection, $request);

      header('location:pay.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>