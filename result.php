<form>

The number is <?php
 echo $_GET['$numb']; 
 ?>
<?php
/*$num=$_GET['$numb'];
$sum=0;
$rem=0;
for ($i =0; $i<=strlen($num);$i++)  
{
	$rem=$num%10;
	$sum=$sum+$rem;
	$num=$num/10;
}
 echo $sum;
 */
 ?>


<?php
$num=$_GET['$numb'];
if($num%2==0){
	echo"number is Even";
}
else{
echo "Number is odd";	
}

?>

<form>