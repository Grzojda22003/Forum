<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>NajlepszeForum</title>
<script type="text/javascript">
function loadDoc()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("who").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index.php/index/who",true);
	xhttp.send();
	setTimeout("loadDoc()",1000);
}
function loadPrimary()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("primary").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index.php/index/primary",true);
	xhttp.send();
}
function loadNewer()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("newer").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET","/default/index.php/index/newer",true);
	xhttp.send();
	setTimeout("loadNewer()",1000);
}
</script>
</head>
<body onload="loadDoc(); loadPrimary(); loadNewer();">
<p>Najlepsze Forum</p>
<div id="who">
</div>
<table>
	<tr>
		<td><a href="forum/regulamin">Regulamin</a></td>
		<td><a href="forum/regulamin">Najnowsze</a></td>
		<td><a href="forum/regulamin">Kontakt</a></td>
	</tr>
</table>
<?php
	if(!isset($watek))
	{
		echo "<div id=\"primary\"></div>";
	}
?>
<div id="newer">
</div>
<div>
<?php
	if(isset($watek))
	{
	foreach($watek->result() as $w)
		{
			echo "<table>"
			echo "<tr>
			<th>Nazwa wątku </th>
			<th>Autor wątku </th>";
			echo "<tr>";
			echo "<td>".$w->name."</td>";
			echo "<td>".$w->authorname."</td>";
			echo "</table>";
		}
	foreach($posty->result() as $w)
		{ 
			echo "<table>
			<tr>
			<th>Nazwa posta </th>
			<th>Autor posta </th>
			<th>Data ostatniej aktualizacji</th>
		 <th>Odpowiedzi </th>
   <th>Wyświetleń </th>
   </tr>
   <tr>
   <td>".$w->name."</td>
			<td>".$w->authorname."</td>
			<td>".$w->actudate."</td>
			<td>".$w->odp."</td>
			<td>".$w->wys."</td>
			</tr>
			</table>";
		}
	}
?>
</div>
</body>
</html>