<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark p-4"> 
            <marquee  direction="left" class="text-warning "> <h4>WEL-COME TO BLOOD DONATION CAMP </h4> </marquee>
        </div>
        <div class="row bg-dark p-4">
            <marquee  direction="RIGHT" class="text-warning "> <h4>MGM'S COLLEGE OF CS AND IT NANDED </h4> </marquee>
        </div>
        <div class="row bg-dark p-4 pb-4"> 
        
        </div>
        <div class="row p-3">
            <div class="col-4">
                
            </div>
            <div class=" col-lg-4 col-md-4 col-sm-12 col-xsm-12 rounded-pill  shadow">
                <div class="row">
                <h3 class="bg-danger text-white rounded-pill text-center shadow">LOGIN FORM FOR CAMP ORGNIZATION</h3>
                </div>
                <form action="loginpage.php" method="POST">
                    <div class="row p-3">
                        <input type="text" class="form-control rounded-pill" name="campId" placeholder="Enter Camp Id" required>
                    </div>
                    <div class="row p-3">
                        <input type="password" class="form-control rounded-pill" name="campPassword" placeholder="Enter Camp Password" required>
                    </div>
                    <div class="row text-white"><a href="#" class="link-danger text-center">Forget Password ?</a></div>
                    <div class="row p-3">
                        <button type="submit" class="btn btn-danger shadow rounded-pill"> LOGIN </button>
                    </div>
                    <hr>
                    <div class="row p-3">
                        <a href="registrationpage.html" class="link-danger text-center"> New Camp Register Here ? </a>
                    </div>
                    <div class="pt-0 pb-0 p-4 text-center">
                        <?php
                        if(isset($_GET["flag"])==true)
                        {
                            if(isset($_GET["flag"])=="false")
                            {
                                echo"<p class=text-danger> Invalid Login Id Or password</p>";
                            }
                        }
                        ?>
                    </div>
                
                </form>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
    <div class="row p-5">
        
    </div>
    <div class="row p-5"></div>
    <div class="row p-5"></div>
    <div class="row p-5 bg-dark"></div>
    <div class="row p-5 bg-dark">
    <footer class="text-white">
    
    </footer>
</div>
</body>
</html>