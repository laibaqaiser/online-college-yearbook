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
            //taking input from http
            if(isset($_POST["submit"])) {
                $n = $_POST["username"];
                $fn = $_POST["fullName"];
                $rn =$_POST["regNo"];
                $e=$_POST["email"];
                $s=$_POST["section"];
                $p=$_POST["password"];
                $cp=$_POST["confirmPass"];
                $type=$_POST["user"];
                $key=true;
            
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

               
                    if($type=="Student")
                    {
                        $email=mysqli_query($conn,"SELECT * FROM student WHERE email='$e'");
                        $regNum=mysqli_query($conn,"SELECT * FROM student WHERE regNum='$rn'");
                        $username=mysqli_query($conn,"SELECT * FROM student WHERE userName='$n'");
                        if(mysqli_num_rows($username) > 0)
                        {
                             echo " username already exsists";
                        }
                        elseif(mysqli_num_rows($regNum) > 0){echo "Registration number is already taken";}
                        elseif(mysqli_num_rows($email) > 0){echo "Email already taken";}

                       else{
                        if($p==$cp){
                            $sql="INSERT INTO student(userKey,userName,fullName,regNum,email,section,password) VALUES('$key','$n','$fn','$rn','$e','$s','$p')";
                            if(mysqli_query($conn,$sql)){
                                echo "Successfully Registered";
                            }
                            else{
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                    }
                    else{
                        echo "Password and Confirm password do not match";
                    }
                }
                }
                
                              
                        else{
                            $Email=mysqli_query($conn,"SELECT * FROM teacher WHERE email='$e'");
                            $regNum=mysqli_query($conn,"SELECT * FROM teacher WHERE regNum='$rn'");
                            $username=mysqli_query($conn,"SELECT * FROM teacher WHERE userName='$n'");
                            if(mysqli_num_rows($username) > 0)
                            {
                                 echo " username already exsists";
                            }
                            elseif(mysqli_num_rows($regNum) > 0){echo "Registration number is already taken";}
                            elseif(mysqli_num_rows($Email) > 0){echo "Email already taken";}
    
                        else{
                            if($p==$cp){
                            $sql="INSERT INTO teacher(userKey,userName,fullName,regNum,email,section,password) VALUES('$key','$n','$fn','$rn','$e','$s','$p')";
                            if(mysqli_query($conn,$sql)){
                                 echo "Successfully Registered"; 
                            } 
                            else{
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        
                             mysqli_close($conn);
                        }
                             else{
                                echo "Password and Confirm password do not match";
                            }
                }  
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
                        <h1 class="text-center">REGISTER</h1>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="input-container">
                         <i class="fa fa-user icon"></i>
                            <input type="text"  name="username" placeholder="Enter Username" class="input-field" required >
                             </div>
                         <div class="input-container">
                                <i class="fa fa-user icon"></i>
                            <input type="text"  name="fullName" placeholder="Enter Full Name" class="input-field" required>
                         </div>
                        <div class="input-container">
                                <i class="fa fa-user icon"></i>
                            <input type="text" name="regNo" placeholder="Enter Registration Number" class="input-field" required>
                            
                        </div>
                        <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                             <input type="email" name="email" placeholder="Enter Email" class="input-field" required>
                            
                         </div>
                         <div class="input-container">
                                <i class="fa fa-user icon"></i>
                             <input type="text" name="section" placeholder="Enter Section" class="input-field" required>
                            
                         </div>
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input type="password" name="password" placeholder="Enter Password" class="input-field" required>
                           
                        </div>
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                             <input type="password"  name="confirmPass" placeholder="Confirm Password" class="input-field" required >
                        </div>

                        <div class="form-group"> 
                            <label class="radio-inline">
                                <input type="radio" name="user" value="Student" ><span id="form-textColor" >Student</span>
                             </label>
                             <label class="radio-inline">
                                 <input type="radio"  name="user" value="Teacher"><span id="form-textColor">Teacher</span>
                             </label>
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit" ><span style="color: yellow;">Submit</span></button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
       
        </div>
            </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
    </body>
</html>