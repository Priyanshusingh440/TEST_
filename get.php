
<?php
//factorial of a number
/*$num=$_GET['$numb'];
$fact=1;
for($i=$num; $i>=1; $i--)
{
	$fact=$fact*$i;
}
echo $fact;
*/
?>

<?php
$num=$_GET['$numb'];
function fact ($num')
{
if($n <= 1)
{
	return 1;
}
else
{
	return $n*fact($n-1);
}
}
echo "factorial of 6 is".fact(6);

?>