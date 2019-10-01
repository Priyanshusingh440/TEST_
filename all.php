<!-- Program to print the sum of digits -->
<form>
The answer is ":
<?php
/*
$num=$_GET['$numb'];
$sum=0;
$rem=0;
for($i=0;$i<=strlen($num);$i++){
$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;	
}
echo $sum;
*/
?>
<!-- Program to check if given number is even or odd    -->
<?php
/*
$num=$_GET['$numb'];
if($num%2 == 0){
	echo "The number is Even";
}
else{
	echo "The number is odd";
}
*/
?>

<!-- Table of a number-->
<?php
/*
$num=$_GET['$numb'];
for($i=1;$i<=10;$i++){
	echo $i*$num;
echo '<br/>';
	}
*/
	?>
<!--Factorial of a number-->
<?php
$num=$_GET['$numb'];
$fact=1;
for($i=$num;$i>=1;$i--){
	$fact=$fact*$i;
}
echo $fact;
?>





</form>