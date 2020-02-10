
<?php
$arrays =array(
array(1,2,3,"A"),
array(1,2,"B","C"),
array(1,"D","E","F")
);
 echo "Number Pattern : ";
  echo "<br>";
$n=3;
 for($i=0;$i<3;$i++)
 {
	 for($j=0;$j<$n;$j++)
	 {
		 echo $arrays[$i][$j];
	 }
	 $n--;
	 echo "<br>";
 }
 
 echo "Alphabet Pattern : ";
 echo "<br>";
 $m=4;
 $n=3;
 for($i=0;$i<3;$i++)
 {
	 for($j=$n;$j<$m;$j++)
	 {
		 
		 echo $arrays[$i][$j];
	 }
	 $n--;
	 echo "<br>";
 }
?>
