<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<body class="bg-danger">
    <div class="col bg-dark">
        <ul class="nav nav-tabs">
            <li class="nav-item"> 
                <a href="homepagebloodhtml.php" class="nav-link link-white" data-bs-toggle=""> <i class="bi bi-house-fill"></i>Home</a>
            </li> 
            <li class="nav-item"> 
               <a href="loginpagehtml.php" class="nav-link link-white" data-bs-toggle=""><i class="bi bi-book-half"></i>Admin Login</a>
           </li>
           <li class="nav-item"> 
            <a href="registrationpage.html" class="nav-link link-white" data-bs-toggle=""><i class="bi bi-book-half"></i>Admin Registration</a>
          </li>  
           <li class="nav-item"> 
               <a href="Aboutus.php" class="nav-link link-white" data-bs-toggle=""> <i class="bi bi-file-earmark-person-fill"></i>About US</a>
           </li> 
           <li class="nav-item"> 
               <a href="facility.php" class="nav-link link-white" data-bs-toggle=""> <i class="bi bi-briefcase-fill"></i>Facilitiies</a>
           </li> 
           
           <input type="search" class="rounded-pill m-2" >
        </ul> 
        
        
    </div>
  <div class="row p-3 m-3">
      <div class="col-8 p-4 m-3">
            <form action="donarinfohtml.php" method="POST">
                <div class="row p-2 m-2 bg-dark rounded-pill">
                <span class="text-center text-white"> Filled The Donar Information In Following Button On Click </span>
                  </div>
                <div class="row p-2">

                    <button type="submit" class="btn btn-warning rounded-pill"> REGISTER THE DONAR INFORMATION </button>
                </div>
           </form>
      </div>
  </div>
  <div class="col-4"><div class="pt-0 pb-0 p-4 text-center">
    <?php
    if(isset($_GET["flag"])==true)
    {
        echo"<div class=shadow><h2 class=text-success> Donar Information Saved Successfully</h2></div>";
       
    }
        if(isset($_GET["flag"])==false)
        {
            echo"<h2 class=text-danger> Donar Information Is Not Saved Some Error Occured Please Try Again</h2>";
        }
    
    ?>
</div>
</div>
  <div class="row p-3 m-4 shadow">
      A+ 
  <input type="range">
</div>
<div class="row p-3 m-4 shadow">
    B+ 
<input type="range">
</div>
<div class="row p-3 m-4 shadow">
    AB+ 
<input type="range">
</div>
<div class="row p-3 m-4 shadow">
    O+ 
<input type="range">
</div>
</body>
</html>