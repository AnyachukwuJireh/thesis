<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $message = $_POST['message'];
      

      $request = " insert into book_form(name, email, phone, address, location, message) values('$name','$email','$phone','$address','$location','$message') ";
      mysqli_query($connection, $request);

      header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>