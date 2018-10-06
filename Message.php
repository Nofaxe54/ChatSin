<?php
$BDD = new PDO('mysql:host=localhost;dbname=chat;charset=utf8','root','SinAdminServer');
$articles = $BDD->query('SELECT * FROM chat ORDER BY id');
while( $a = $articles->fetch()){ ?>
    <p><?= $a['pseudo'] ?> : <?= $a['msg'] ?></p>
<?php } ?>
