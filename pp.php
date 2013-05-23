<html>
<head>
<title>ШафиКупе</title>
</head>
<body>
<H1>Розрахунок вартості шафи-купе</H1>
<table border=2>
<tr> <td>shyryna</td> <td>hlybyna</td> <td>vysota</td> <td>result</td> </tr>
<?php
$fp=fopen("res.txt","r");
if ($fp)
   {
   while(!feof($fp))
   {
    $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
    list($shyryna,$hlybyna,$vysota,$result)=$stroka;
echo "<TR><td>$shyryna</td> <td>$hlybyna</td> <td>$vysota</td> <td>$result</td> </TR>";
}
fclose($fp);
}
?>
</body>
</html>
