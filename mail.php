<?php
   //$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['phone']) 
   //and !empty($_POST['message'])
   ){
      $name = trim(strip_tags($_POST['name']));
	  $phone = trim(strip_tags($_POST['phone']));
      //$message = trim(strip_tags($_POST['message']));
 
      mail('advicefinance@etlgr.com', 'Новая заявка на детский замок', 
      'Вам написал: '.$name.'<br />Его телефон: '.$phone.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=utf-8");
 
      //echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      //ближайшее время<Br> $back";

   
    header('location: thank-you.html');
    
    
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля корректно! $back";
      exit;
   }
?>