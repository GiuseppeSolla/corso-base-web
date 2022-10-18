<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 24px;
        }
        table{
            font-family: Montserrat, Arial;
            font-size: 1.1em;
            border: 1px solid #ccc;
        }
        tr td{
            padding: 4px 6px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
</head>
<body>
    
<?php

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$indirizzo = $_POST['indirizzo'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$comune= $_POST['comune'];

$condimento1 = $_POST['condimento1'];
$condimento2 = $_POST['condimento2'];
$condimento3 = $_POST['condimento3'];
$condimento4 = $_POST['condimento4'];

$size = $_POST['size'];

$consegna = $_POST['consegna'];
$istruzioni = $_POST['istruzioni'];

print "<table>";
print "<tr><td>Nome: </td><td><b>".$nome."</b></td></tr>";
print "<tr><td>Cognome: </td><td><b>".$cognome."</b></td></tr>";
print "<tr><td>Indirizzo: </td><td><b>".$indirizzo."</b></td></tr>";
print "<tr><td>Comune: </td><td><b>".$comune."</b></td></tr>";
print "<tr><td>Telefono: </td><td><b>".$telefono."</b></td></tr>";
print "<tr><td>Mail: </td><td><b>".$mail."</b></td></tr>";
print "<tr><td>Condimento: </td><td><b>".$condimento1." ".$condimento2." ".$condimento3." ".$condimento4."</b></td></tr>";
print "<tr><td>Grandezza della pizza: </td><td><b>".$size."</b></td></tr>";
print "<tr><td>Consegna: </td><td><b>".$consegna."</b></td></tr>";
print "<tr><td>Istruzioni: </td><td><b>".$istruzioni."</b></td></tr>";
print "</table>";

?>

<br />
<br />
<table>
    <tr><td>Nome: </td><td><b><?=$nome?></b></td></tr>
    <tr><td>Cognome: </td><td><b><?=$cognome?></b></td></tr>
    <tr><td>Indirizzo: </td><td><b><?$indirizzo?></b></td></tr>
    <tr><td>Telefono: </td><td><b><?=$telefono?></b></td></tr>
    <tr><td>Mail: </td><td><b><?=$mail?></b></td></tr>
    <tr><td>Condimento: </td><td><b><?=$condimento1." ".$condimento2." ".$condimento3." ".$condimento4?></b></td></tr>
    <tr><td>Grandezza della pizza: </td><td><b><?=$size?></b></td></tr>
    <tr><td>Consegna: </td><td><b><?=$consegna?></b></td></tr>
    <tr><td>Istruzioni: </td><td><b><?=$istruzioni?></b></td></tr>
</table>

</body>
</html>
