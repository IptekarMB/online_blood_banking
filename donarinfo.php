<?php
$dname=$_POST["donarName"];
$cname=$_POST["campName"];
$dcontact=$_POST["donarContact"];
$ddob=$_POST["donarDob"];
$demail=$_POST["donarEmail"];
$dadd=$_POST["donarAdd"];
$dgender=$_POST["gender"];
$cdate=$_POST["campDate"];
$bloodgroup=$_POST["bloodGroup"];
$dblood=$_POST["donarBlood"];
$dphoto=$_POST["donarPhoto"];

$con=mysqli_connect("localhost","root","","mibrand");
$query="insert into blood_donar_data(donarName,campName,donarContact,donarDob,donarEmail,donarAdd,gender,campDate,bloodGroup,donarBlood,donarPhoto) 
values('$dname','$cname','$dcontact','$ddob','$demail','$dadd','$dgender','$cdate','$bloodgroup','$dblood','$dphoto')";
if(!$con)
{
    die("ERROR: Could Not Connet ".mysqli_connect_error());
}
$rst=mysqli_query($con,$query);
if($rst==true)
{
    header("location:homepagebloodhtml.php ?flag=true");
}
else
{
    header("location:donarinfohtml.php ?flag=false");
}
mysqli_close($con)
?>