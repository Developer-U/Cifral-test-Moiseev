<?php
   
   require("phpmailer-5.2/PHPMailerAutoload.php");

   if(isset($_POST['first_name']) ) {
      $email = $_POST['email'];
	  $first_name = $_POST['first_name'];	      

      
      if(empty($errors)) {      
         $content = 'Имя: '.$first_name.' <br>E-mail: '.$email ;
           
         

         $email = new PHPMailer;

         $email->CharSet = 'UTF-8';         
         $email->From = 'digital-element@mail.ru';
         $email->FromName = 'Сайт такой-то';
         $email->Subject = 'Хочу у вас работать! Моисеев Юрий. +7(902) 407-56-47 ';
         $email->Body = $content;
         
         
         $email->AltBody = 'Хочу у вас работать! Моисеев Юрий. +7(902) 407-56-47';
         $email->addAddress( 'digital-element@mail.ru');       
         $send = $email->send();

         if(!$send) {
             echo json_encode('Сообщение не может быть отправлено.');
             echo json_encode('Mailer Error: ' . $email->ErrorInfo);
         } else {
             echo json_encode('Message has been sent');
         } 

      } else{
         echo json_encode($errors);
      }

   } else {
      echo json_encode('Не заполнено');
   }

?>