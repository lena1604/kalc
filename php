<html>
<head>
</head>
<body>
<?php
$shyryna=$_REQUEST['shyryna'];
echo "ширина =$shyryna <br>";
$hlybyna=$_REQUEST['hlybyna'];
echo "глибина =$hlybyna <br>";
$vysota=$_REQUEST['vysota'];
echo "висота =$vysota <br>";
$result=$_REQUEST['result'];
echo "$result <br>";
$fp=fopen("res.txt","a");
fputs($fp,"$shyryna\t$hlybyna\$vysota\t$result\t");
fclose($fp);

?>
</body>
</html>
