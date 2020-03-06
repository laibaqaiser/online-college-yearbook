<?php session_start();
    ;?>
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
        <link href="style/style1.css" rel="stylesheet" type="text/css" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
            <?php
            $n= $_SESSION['name'] ;
            $p=$_SESSION['password'] ;
            $type=$_SESSION['Teacher'] ;
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
               
                    if($type=="Teacher"){
                        $sql ="SELECT userName,fullName FROM teacher WHERE userName='$n' and password='$p'";
                        $result = mysqli_query($conn, $sql);
                           while($row = mysqli_fetch_assoc($result)) {
                             $name= $row["userName"];
                             $fullName=$row["fullName"];
                        }
                        }
                        mysqli_close($conn);
                    } 
            ?>
            <div class="container-fluid"> 
            <div class="row">
                <div class="col">
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
                                                <a href="TeacherHome.html" class="nav-link" id="textColor">Home</a>
                                            </li>
                                            
                                    </ul>
                                </div>  
                            </nav>
              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-4">
                                <div class="form-outer">
                                        <h2 class=" h2 text-center"><?php echo $fullName ?></h2>
                                        <div class="form-inner">
                                    <form method="POST" action="">
                                         <div class="input-container">
                                                <i class="fa fa-user icon"></i>
                                             <input type="text"  name="username" placeholder="Username" class="input-field"  value="<?php echo $name; ?>" >
                                           
                                        </div>
                                        
                                        <div class="input-container">
                                                <i class="fa fa-user icon"></i>
                                            <input type="text" name="att" placeholder="Attendence" class="input-field">
                                            
                                        </div>
                                        <div class="input-container">
                                                <i class="fa fa-user icon"></i>
                                            <input type="text" name="Certificates" placeholder="Certificates" class="input-field">
                                            
                                        </div>
                                        <div class="input-container">
                                                <i class="fa fa-user icon"></i>
                                            <input type="text" name="cp" placeholder="Awards" class="input-field" >
                                            
                                        </div>
                                        <div class="input-container">
                                                <i class="fa fa-user icon"></i>
                                            <input type="text" name="cca" placeholder="Teaching skills" class="input-field">
                                            
                                        </div>
                                        <div class="input-container">
                                                <i class="fa fa-user icon"></i>
                                            <input type="text" name="sports" placeholder="Education" class="input-field">
                                            
                                        </div>
                                        
                                    </form>
                                </div>
                        </div>
                    </div>
                        <div class="col-8 col-sm-8" id="col-2">
                             <table class="table-responsive">
                                 <tbody>
                              <tr>
                                        <th ></th>
                                        <td>GPA</td>
                                        
                                        <td>Class Attendence</td>
                                        
                                      </tr>
                                      
                                      <tr>
                                            <th ></th>
                                            <td>Awards</td>
                                            
                                            <td>Certificates</td>
                                            
                                          </tr>
                                </tbody>
                              </table> 
                            </div> 
                        
                    </div>
                    </div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </body>
                    