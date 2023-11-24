<h2><?php echo $title ?> </h2>
<ul>
<?php foreach($userlist as $user):?>
<?php echo "<li > ".$user['id'].". ".$user['nom']." </li >";?>
<?php endforeach ?>
</ul>