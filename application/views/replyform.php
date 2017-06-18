<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>Wiadomość</title>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css";?>"/>
</head>
<body>
<h1>Odpowiedz na wiadomość</h1>
<?php
	$attributes=array('id' => 'sendform','method'=>'post');
	echo form_open('Message/reply',$attributes);
	echo form_hidden('to',$to);
	echo "Tytuł wiadomości: ";
	echo form_input('title');
	echo "Treść wiadomości: ";
	echo form_textarea('tresc');
	echo form_hidden('from',$from);
	echo form_submit('submit','Wyślij');
	echo form_close();
?>
<a href="<?php echo base_url() ?>message">Wróć</a>
</body>
</html>