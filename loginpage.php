<?php
$cid=$_POST["campId"];
$cpassword=$_POST["campPassword"];
  
$con=mysqli_connect("localhost","root","","mibrand");
$query="select * from blood_camp where campId='$cid' and campPassword='$cpassword'";
if(!$con)
    die("ERROR could Not Connect.".mysqli_connect_error());
$rows=mysqli_query($con,$query);
if(mysqli_num_rows($rows)>0)
if($rows==true)
{
    header("location: homepagebloodhtml.php");
   
}
else
{
    header("location: loginpagehtml.php ?flag==false");
}
 mysqli_close($con)
?>