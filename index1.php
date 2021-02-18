<?php
$link=mysqli_connect("trucorpdatabase","root","rahasia");
if(!link){
	echo "Tidak bisa terkoneksi ke Mysql".PHP_EOL;
	exit;
}

$sql = "SELECT * FROM Trucorp";
$result = $conn->query($sql);

$qty=0;
while ($num=mysql_fetch_assoc($result)){
	$qty += $num[id];
}
echo "Total: ". $qty . "\n";
