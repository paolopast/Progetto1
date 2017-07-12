<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QRcode Generator</title>
</head>

<body>
<?php
// Usiamo la libreria 
require("phpqrcode/qrlib.php");
 
// ECC Level, livello di correzione dell'errore (valori possibili in ordine crescente: L,M,Q,H - da low a high)
$errorCorrectionLevel = 'L';

// Matrix Point Size, dimensione dei punti della matrice (da 1 a 10)
$matrixPointSize = 6;

// I dati da codificare nel QRcode
$data = $_GET['id'];

// Il File da salvare (deve essere salvato in una directory scrivibile dal web server)
$filename = 'QRcodes/qrcode' . $data.'.png';

// Generiamo il QRcode in formato immagine PNG
QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

//atampa del codice
$str ="<td><img src ='QRcodes/qrcode" . $data.".png'; </td>";
echo $str;
?>
</body>
</html>