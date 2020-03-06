<?php session_start();
  ?>
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
        <link href="style/lala.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
            <?php
            $myfilename = "DeansMsg.txt";
            if(file_exists($myfilename))
            {
              $DeansMsg=file_get_contents($myfilename);
            }
            else
            {
                echo "file not found";
            }
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
        $id=mysqli_query($conn,"SELECT id FROM teacher WHERE userName ='$n'")->fetch_object()->id;
        $sql ="SELECT achievement FROM teacherachievements WHERE id='$id'";
       
        $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)) 
           {
             $achievements= $row["achievement"];
           }
           mysqli_close($conn);

     }
     
     
 
                ?>
             
                    <nav class="navbar navbar-expand-md sticky-top navbar-dark "id="customColour">
                            <div class="navbar-brand" id="textColor">
                                    
                                    <h5 class="h5">
                                         <img src="images/uetlogo.png" width="40vh">
                                     UET Lahore Yearbook
                                    </h5> 
                            </div>
                                 <div class="collapse navbar-collapse">
                                 <ul class="navbar-nav ml-auto" >
                                        <li class="nav-item" >
                                            <a href="home.php" class="nav-link" id="textColor">Logout</a>
                                        </li>
                                        </ul>  
                                 </div>   
                               
                    </nav>
                    
             <div class="container-fluid">
             <div class="row" id="row" >
                  <div class="col-3">
                        <nav id="sidebar">
                                <div class="sidebar-header">
                                <input type="text" class="form-control" id=i value="<?php echo $n ?>"> </div>
                                    <ul class="list-unstyled components">
                                        <li class="active"><a href="#home" >Home</a></li>
                                        <li><a href="TeacherProfile.php">View Profile</a></li>
                                        <li><a href="ViewTeachersAchievements.php">View Achievements</a></li>
                                        <li><a href="teacherFellowAchievements.php">View Students Achievements</a></li>
                                        
                                    </ul>   
                            </nav>
                  </div>
                        <div class="col-9">
                        <div class="form-group"id="form">
                            <label for="DeansMessage">Dean's Message</label>
                            <input type="text" class="form-control" id=DeansMessage value="<?php echo $DeansMsg ?>">
                        </div>
                        <div class="form-group"id="form">
                                <label for="Achievements">Achievements</label>
                                <input type="text" class="form-control" id="Deansmessage" value="<?php echo $achievements ?>"></textarea>
                        </div>
                        
                        
                              
                        </div>
               </div>
               
               
                </div>
                  <!-- <footer  class="page-footer font-small">
                         
                        <div class="footer-copyright text-center py-5">© 2018 Copyright:
                                <a href="home.html"> UetYearbook.com</a>
                              </div>
                </footer>-->
            
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
    </body>
</html>