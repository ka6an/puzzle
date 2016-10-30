<?php
if (isset($_POST["name"])) { 
    $name =  $_POST['name']; 
    $mail =  $_POST['mail']; 
    $now = time();       
    $msg = '
    	Имя: '.$_POST['name'].' 
    	Почта: '.$_POST['mail'];
    	if(!($name == "" || $mail ==""))
    	{
    		mail($mail, "Данные конфигурации" , $msg, 'Content-Type: text/plain; charset=utf-8');
    	}
    	
}
