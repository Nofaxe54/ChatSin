<!DOCTYPE html>
<?php
$BDD = new PDO('mysql:host=localhost;dbname=chat;charset=utf8','root','SinAdminServer');
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test chat classe</title>
    <style media="screen">
      p { margin:0 }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="message">
      <?php

      $articles = $BDD->query('SELECT * FROM chat ORDER BY id');
      while( $a = $articles->fetch()){ ?>
          <p><?= $a['pseudo'] ?> : <?= $a['msg'] ?></p>
      <?php } ?>
    </div>
    <br>
    <form class="" action="sendMsg.php" method="post">
      <input type="text" name="pseudo" value="" placeholder="Pseudo">
      <input type="text" name="message" value="" placeholder="Message">
      <input type="submit" name="Send" value="submit">
    </form>

    <script type="text/javascript">
      setInterval('loadMessages()',500);
      function loadMessages(){
        $('#message').load('Message.php');
      }
    </script>
  </body>
</html>
