<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
                University of Engineering and Techlogy ,Lahore
        </title>
        <link href="images/uetlogo.png" rel="icon" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="style/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php 
if(isset($_POST["submit"])) {
    $n = $_POST["username"];
    $p=$_POST["password"];
    $type=$_POST["user"];
    $key;
    $valid=true;
 //take db data
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname="user";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password,$dbname);
 
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 else{
    
         if($type=="Student"){
             $key = mysqli_query($conn,"SELECT userKey FROM student WHERE userName='$n' and password='$p'")->fetch_object()->userKey;
             
             if(($key)==true){
                
                  $_SESSION['name'] = $n;
                  $_SESSION['password'] = $p;
                  $_SESSION['Student'] = $type;
                  
                  echo "Login Successfully";
                 // echo "<a href='studentHome.php'>Show Profile</a>";
                 header('location:studentHome.php');
                  
             }
              else{
                 echo "User not found";
             }
             mysqli_close($conn);
         }               
         else if($type=="Teacher"){
             $key = mysqli_query($conn,"SELECT userKey FROM teacher WHERE userName='$n' and password='$p'")->fetch_object()->userKey;
             if(($key)==true){
                  echo "Login Successfully";
                  $_SESSION['name'] = $n;
                  $_SESSION['password'] = $p;
                  $_SESSION['Teacher'] = $type;
                  //echo "<a href='TeacherHome.php'>Show Profile</a>";
                  header('location:TeacherHome.php');
             }
              else{
                 echo "User not found";
             }
              mysqli_close($conn);
             }
          else{
             $key = mysqli_query($conn,"SELECT userKey FROM admin WHERE userName='$n' and password='$p'")->fetch_object()->userKey;
             if(($key)==true){
                  echo "Login Successfully";
                  //echo "<a href='Admin.html'>Show Profile</a>";
                  header('location:Admin.html');
                  
             }
              else{
                 echo "User not found";
             }
              mysqli_close($conn);
             }
          } 
        }
    ?>
            <div class="bg">

                    <nav class="navbar navbar-expand-md sticky-top navbar-dark" id="customColor" >
                            <!--Title of the page in navbar-->
                            <div class="navbar-brand" id="textColor">
                                
                               <h5 class="h5">
                                    <img src="images/uetlogo.png" width="50vh">
                                UET Lahore Yearbook
                               </h5> 
                            </div>
                            <!--Button to collapse items in it-->
                            <button class="navbar-toggler" data-toggle="collapse" data-target="#navData">
                                <span class="navbar-toggler-icon" ></span>
                            </button>
                            <!--Content in the navbar-->
                            <div class="collapse navbar-collapse" id="navData">
                                <ul class="navbar-nav ml-auto" >
                                        <li class="nav-item" >
                                            <a href="home.php" class="nav-link" id="textColor"> Home</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="login.php" class="nav-link" id="textColor">Login</a>
                                        </li>
                                </ul>
                            </div>  
                        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-outer"> 
                    <h1 class="text-center" >Login</h1>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                         <div class="input-container">
                            <i class="fa fa-user icon"></i>
                             <input type="text" name="username" placeholder="Enter Username" class="input-field" id="username" required>
                        </div>
                        <div class="input-container">
                                <i class="fa fa-key icon"></i>
                            <input type="password" name="password" placeholder="Enter Password" class="input-field" id="password" required>
                        </div>                           
                        <div class="form-group"> 
                            <label class="radio-inline">
                                <input type="radio" name="user" value="Student"><span style="color: white">Student</span>
                             </label>
                             <label class="radio-inline">
                                 <input type="radio"  name="user" value="Teacher"><span style="color: white">Teacher</span>
                             </label>
                             <label class="radio-inline">
                                <input type="radio" name="user" value="Admin"><span style="color: white">Admin</span>
                             </label>
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit" ><span style="color:yellow">Submit</span></button>
                        <h6 class="h6 mr-3 mt-3">Not Registered yet?   <a href="signup.php" style="color: whitesmoke" >Register Now</a></h6>
                    </form>
                    </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                <div class="col-md-3" id="col-2"></div>
            </div>

        </div>
            </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
    </body>
</html>