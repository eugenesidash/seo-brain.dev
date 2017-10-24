<?php

if (array_key_exists('messageFF', $_POST)) {
   $to = 'sidash.seo@gmail.com,work.page22@gmail.com';
   $subject = 'Заполнена ВЕРХНЯЯ-ПЛАНШЕТНАЯ контактная форма '.$_SERVER['HTTP_REFERER'];
   $message = "Имя клиента: ".$_POST['nameFF']."\nТелефон клиента: ".$_POST['contactFF']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['messageFF'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['nameFF'];
}

?>