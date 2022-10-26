<?php

   $connection = mysqli_connect('localhost','root','','book');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      
      $where_to = $_POST['where_to'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, phone,email, where_to, guests, arrivals, leaving) values('$name','$phone','$email','$where_to','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

         echo 'Done'
   }else{
      echo 'something went wrong please try again!';
   }

?>
