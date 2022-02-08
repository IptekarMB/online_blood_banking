<?php
$cname=$_POST["campName"];
$cid=$_POST["campId"];
$oname=$_POST["orgName"];
$oemail=$_POST["orgEmail"];
$ocontact=$_POST["orgContact"];
$cadd=$_POST["campAdd"];
$cdate=$_POST["campDate"];
$cpassword=$_POST["campPassword"];
$cpassword2=$_POST["campPassword2"];
$cimage=$_POST["campImage"];
  
$con=mysqli_connect("localhost","root","","mibrand");
$query="insert into blood_camp values('$cname','$cid','$oname','$oemail','$ocontact','$cadd','$cdate','$cpassword','$cpassword2','$cimage')";
if(!$con)
{
    die("ERROR: Could Not Connect.".mysqli_connect_error());
}
$rst=mysqli_query($con,$query);
if($rst==true)
{
    header("location:loginpagehtml.php");
}
else
{
  header("location:registration.html ?flag==false");
}
mysqli_close($con)
?>

