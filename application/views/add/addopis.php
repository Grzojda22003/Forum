<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Dodawanie Opisu</title>
</head>
<body>
<h1>Dodaj Swój opis</h1>
<?php
	$attributes=array('id' => 'addform','method'=>'post');
	echo form_open('add/opis',$attributes);
	echo "Opis: ";
	echo form_textarea('opis');
	echo form_submit('submit','Dodaj Posta');
	echo form_close();
?>

</body>
</html>