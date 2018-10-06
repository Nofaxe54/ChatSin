<?php
  $BDD = new PDO('mysql:host=localhost;dbname=chat;charset=utf8','root','SinAdminServer');
  $pseudo = $_POST['pseudo'];
  $message = $_POST['message'];

  $sth = "INSERT INTO chat(pseudo,msg) VALUES ($pseudo,$message)";
  echo $sth;
  $BDD->exec($sth);
  echo "execute";
 ?>
