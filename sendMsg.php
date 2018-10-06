<?php
  $BDD = new PDO('mysql:host=localhost;dbname=chat;charset=utf8','root','SinAdminServer');
  $pseudo = $_POST['pseudo'];
  $message = $_POST['message'];

  $sth = $BDD->prepare("INSERT INTO 'chat'(pseudo,msg) VALUES ($pseudo,$message)");
  echo "INSERT INTO 'chat'(pseudo,msg) VALUES ($pseudo,$message)";
  $sth->execute();
 ?>
