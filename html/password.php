
<?php
$dbuser = 'localhost';
$dbuser='shivalika';
$dbpass='riya2203';
$dbname='demodb';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(! $conn)
{
die('Could not connect:'.mysql_error());
}
echo "hi";
$enum=$_POST['enrollnum'];
$pass=$_POST['password'];
echo $enum;
echo $pass;
$q= "SELECT enrollnum from signupdetails where enrollnum= $enum";
$result=$conn->query($q);
if($result->num_rows >0){
echo"found";
}
else{
echo"no";
}
?>

