<style media="screen">
  p { margin:0 }
</style>

<?php
$BDD = new PDO('mysql:host=localhost;dbname=chat;charset=utf8','root','SinAdminServer');
$articles = $BDD->query('SELECT * FROM chat ORDER BY id');

while( $a = $articles->fetch()){ ?>
    <p><?= $a['pseudo'] ?> : <?= $a['msg'] ?></p>
<?php } ?>

<br>
<form class="" action="sendMsg.php" method="post">
  <input type="text" name="pseudo" value="" placeholder="Pseudo">
  <input type="text" name="message" value="" placeholder="Message">
  <input type="submit" name="Send" value="submit">
</form>
