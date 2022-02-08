<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donarinfohtml</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body class=" bg-danger">
    <div class="col bg-dark">
        <ul class="nav nav-tabs">
            <li class="nav-item"> 
                <a href="homepagebloodhtml.php" class="nav-link link-white" data-bs-toggle=""> <i class="bi bi-house-fill"></i>Home</a>
            </li> 
            <li class="nav-item"> 
               <a href="loginpagehtml.php" class="nav-link link-white" data-bs-toggle=""><i class="bi bi-book-half"></i>Admin Login</a>
           </li>   
           <li class="nav-item"> 
               <a href="registrationpage.html" class="nav-link link-white" data-bs-toggle=""> <i class="bi bi-briefcase-fill"></i>REGISTER CAMP</a>
           </li> 
           <li class="nav-item"> 
            <a href="Aboutus.php" class="nav-link link-white" data-bs-toggle=""> <i class="bi bi-file-earmark-person-fill"></i>About US</a>
        </li>
           
           <input type="search" class="rounded-pill m-2" >
        </ul>   
    </div>
    <form action="donarinfo.php" method="POST">
    <div class="contaner-fluid ">
        <div class="row">
            <div class="col-4">
                <div class="pt-0 pb-0 p-4 text-center">
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
            <div class="col-5 p-2">
            
                <div class="row bg-danger shadow">
                    <h3 class="text-center text-white"> BLOOD DONAR INFORMATION </h3>
                </div>
                <div class="row p-2 m-2">
                    <input type="text" name="donarName" class="form-control rounded-pill" required placeholder="Enter Donar Name">
                </div>
                <div class="row p-2 m-2">
                    <input type="text" name="campName" class="form-control rounded-pill" required placeholder="Enter Camp Name">
                </div>
                <div class="row p-2 m-2">
                    <input type="text" name="donarContact" class="form-control rounded-pill" required placeholder="Enter Donar Contact Number">
                </div>
                <div class="row p-2 m-2">
                    <label for="donarDob" class="p-3 shadow"> Selec Date Of Brith Donar : </label>
                    <input type="date" name="donarDob" class="form-control rounded-pill" required placeholder="Select Donar Date Of Brith">
                </div>
                <div class="row p-2 m-2">
                    <input type="text" name="donarEmail" class="form-control rounded-pill" required placeholder="Enter Donar Email">
                </div>
                <div class="row p-2 m-2">
                    <input type="text" name="donarAdd" class="form-control rounded-pill" required placeholder="Enter Donar Address">
                </div>
                <div class="row p-2 m-2 shadow">
                    <label for="gender shadow"> Select Donar Gender: </label>
                    <div class="col-4 p-2">
                    <input type="radio" name="gender" class="form-check" required value="Male">
                    <label for="Male">Male</label>
                </div>
                <div class="col-4 p-2">
                    <input type="radio" name="gender" class="form-check" required value="Female">
                    <label for="Female">Female</label>
                </div>
                </div>
                <div class="row p-2 m-2">
                    <label for="campDate" class="p-3 shadow"> Select Camp Date: </label>
                    <input type="date" name="campDate" class="form-control rounded-pill" required >
                </div>
                <div class="row p-2 m-2">
                    <select class=" form-select rounded-pill" name="bloodGroup">
                        <option value="Select"> --Select Blood Group-- </option>
                        <option value="A+"> A+ </option>
                        <option value="B+"> B+ </option>
                        <option value="AB+"> AB+ </option>
                        <option value="O+"> O+ </option>
                        <option value="A-"> A- </option>
                        <option value="B-"> B- </option>
                        <option value="AB-"> AB- </option>
                        <option value="O-"> O- </option>
                    </select>
                </div>
                <div class="row p-2 m-2">
                    <label for="donarPhoto" class="p-3"> Selec Donar Photo: </label>
                    <input type="file" name="donarPhoto" class="form-control rounded-pill" required>
                </div>
                <div class="row p-2 m-2">
                    <input type="text" name="donarBlood" class="form-control rounded-pill" required placeholder="Enter Donar Blood In ML.">
                </div>
                <hr>
                <div class="row p-2 m-2">
                <button type="submit" class="btn btn-dark rounded-pill shadow"> SUBMIT INFORMATION </button>
                 </div>
            
            </div>

            <div class="col-3"></div>
        </div>
    </div> 
    </form>
</body>
</html>