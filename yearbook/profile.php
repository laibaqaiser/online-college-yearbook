<?php session_start();
    ;?>
<!DOCTYPE html>
<html>
<title>Student's Profile</title>
<link href="images/uetlogo.png" rel="icon" type="image/png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="style/style_p.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-theme-l5">
    <?php
     $n= $_SESSION['name'] ;
     $p=$_SESSION['password'] ;
     $type=$_SESSION['Student'] ;
     
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
                 $sql ="SELECT userName,fullName,regNum,section,dob,gender,nationality FROM student WHERE userName='$n' and password='$p'";
                 $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                      $name= $row["userName"];
                      $fullName=$row["fullName"];
                      $regNum=$row["regNum"];
                      $section=$row["section"];
                      $dob=$row["dob"];
                      $gender=$row["gender"];
                      $nationality=$row["nationality"];
                 }
                 }
                 mysqli_close($conn);
             } 
     ?>
    <nav class="navbar navbar-expand-md sticky-top navbar-dark" id="customColor" >
        <!--Title of the page in navbar-->
        <div class="navbar-brand" id="textColor">
            
           <h5 class="h5">
                <img src="images/uetlogo.png" width="20vh">
            Student Profile
           </h5> 
        </div>
                            <!--Content in the navbar-->
                            <div class="collapse navbar-collapse" id="navData">
                                    <ul class="navbar-nav ml-auto" >
                                            <li class="nav-item" >
                                                <a href="studentHome.php" class="nav-link" id="textColor"> Home</a>
                                            </li>
                                        <li class="nav-item" >
                                            <a href="Home.php" class="nav-link" id="textColor">Logout</a>
                                        </li>
                                    </ul>
                                </div> 
  
    </nav>

        <div class="container">
            <div class="row ">
                    <div class="col-md-4">
                             <div class="card" style="width: 16rem;">
                                <img src="images/user.png" class="card-img-top" height="230px">
                                    <div class="card-body">
                                        <p class="card-text"><!--<a href="home.html" class="nav-link" id="textColor"> Edit Profile</a>--></p>
                                        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?php echo $fullName ?></p>
                                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $nationality ?></p>
                                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $dob ?></p>
                                    </div>
                            </div>
                     </div>
                        <div class="col-md-8">
                            <h1 class="text-left">Student Info</h1>
                            <div class="form-group">
                              <div class="row" id="info">
                                <div class="col-md-3" id="left-info">
                                    <label class="control-label col-sm-2" for="name">Name</label>
                                </div>
                                <div class="col-md-9" id="right-info">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                </div>
                              </div>
                              <div class="row" id="info">
                                  <div class="col-md-3" id="left-info">
                                      <label class="control-label col-sm-2" for="user_name">User</label>
                                  </div>
                                  <div class="col-md-9" id="right-info">
                                      <input type="text" class="form-control" id="user_name" name="user_name"  value="<?php echo $fullName ?>">
                                  </div>
                                </div>
                                <div class="row" id="info">
                                  <div class="col-md-3" id="left-info">
                                      <label class="control-label col-sm-2" for="section">Section</label>
                                  </div>
                                  <div class="col-md-9" id="right-info">
                                      <input type="text" class="form-control" id="section" name="section"  value="<?php echo $section ?>">
                                  </div>
                                </div>
                                <div class="row" id="info">
                                    <div class="col-md-3" id="left-info">
                                        <label class="control-label col-sm-2" for="reg_No">Registration#</label>
                                    </div>
                                    <div class="col-md-9" id="right-info">
                                        <input type="text" class="form-control" id="reg_No" name="reg_No"  value="<?php echo $regNum?>">
                                    </div>
                                  </div>
                                  <div class="row" id="info">
                                      <div class="col-md-3" id="left-info">
                                          <label class="control-label col-sm-2" for="b_date">D.O.B</label>
                                      </div>
                                      <div class="col-md-9" id="right-info">
                                          <input type="text" class="form-control" id="b_date" name="b_date" value="<?php echo $dob?>">
                                      </div>
                                    </div>
                                <div class="row" id="info">
                                    <div class="col-md-3" id="left-info">
                                        <label class="control-label col-sm-2" for="gender">Gender</label>
                                    </div>
                                    <div class="col-md-9" id="right-info">
                                        <input type="text" class="form-control" id="gender"  name="gender" value="<?php echo $gender?>">
                                    </div>
                                  </div>
                                 
                                    <div class="row" id="info">
                                        <div class="col-md-3" id="left-info">
                                            <label class="control-label col-sm-2" for="enroll">Enrollment #</label>
                                        </div>
                                        <div class="col-md-9" id="right-info">
                                            <input type="text"class="form-control" id="enroll"  name="enroll"  value="<?php echo $regNum; ?>">
                                        </div>
                                      </div>
                                      <div class="row" id="info">
                                          <div class="col-md-3" id="left-info">
                                              <label class="control-label col-sm-2" for="nationality">Nationality</label>
                                          </div>
                                          <div class="col-md-9" id="right-info">
                                              <input type="text" class="form-control" id="nationality"  name="nationality" value="<?php echo $nationality;?>">
                                          </div>
                                        </div>
                              </div>
                            </div>

                      </div>
           </div> 
        </div>
        <footer  class="page-footer font-small">
                         
                         <div class="footer-copyright text-center py-5">© 2018 Copyright:
                                 <a href="home.html"> UetYearbook.com</a>
                               </div>
                 </footer>
</body>
</html> 
