<?php
  $name = $_POST['name_form'];
  $visitor_phone = $_POST['phone_form'];
  $email_from = 'metseor@gmail.com';
  $email_subject = "Заявка на консультацию";
  $email_body = "Вы получили сообщение от пользователя $name.\n" . "Содержание:\n $message";
  $to = "ironhide610@gmail.com";
  $headers = "От: $email_from \r\n";
  $headers .= "Ответ: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  echo "Ваша заявка была успешно отправлена";
?>