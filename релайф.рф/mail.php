<?php
   // data sent in header are in JSON format
   header('Content-Type: application/json');
   // takes the value from variables and Post the data
   $childName = $_POST['childName'];
   $data = $_POST['data'];
   $Class = $_POST['Class'];
   $parentsName = $_POST['parentsName'];
   $phone = $_POST['phone'];
   $school = $_POST['school'];

   $to = "Ulubekov.ceo@mail.ru";
   $subject = "Клиент заинтересовался";
   // Email Template
   $message = "<b>ФИО ребёнка : </b>". $childName ."<br>";
   $message .= "<b>Дата рождения ребёка : </b>".$data."<br>";
   $message .= "<b>Класс обучения : </b>".$Class."<br>";
   $message .= "<b>ФИО родителя : </b>".$parentsName."<br>";
   $message .= "<b>Контакт : </b>".$phone."<br>";
   $message .= "<b>Номер школы : </b>".$school."<br>";

   $header = "From:"+$email+" \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   // message Notification
   if( $retval == true ) {
      echo json_encode(array(
         'success'=> true,
         'message' => 'Message sent successfully'
      ));
   }else {
      echo json_encode(array(
         'error'=> true,
         'message' => 'Error sending message'
      ));
   }
?>