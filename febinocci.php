<?php
//01123581321
//1238
//k=8,j=8,i=5
$m=0;
$i=0;
$j=1;
$n=10;
$k=0;
while($m<$n){	
	$k=$i+$j;
	$i=$j;
	$j=$k;
	$m++;
	echo $k.' ';

}
?>