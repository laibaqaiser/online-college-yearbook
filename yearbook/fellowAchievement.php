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
            $servername = "localhost";
            $username = "root";
            $password = "";
             $dbname="user";
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
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
                                    <spam class="navbar-toggler-icon" ></spam>
                                </button>
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
              
            </div>
               
                    </div>
                    
                    
                   
                <div class="row" id="row1">
                        <div class="col-6 col-sm-6">
                            <div id="content-center">
                                    <h2 class="text-light">
                                            University of Engineering & Technology Yearbook 2019
                                         </h2>
                                         <p class="text-light">Keeping the tradition of valuing students and encapture their acheivement,University of
                                             Engineering and Techlogy now introduces Yearbook 2019
                                         </p>
                                        
                            </div>   
                            
                        </div>

                        <div class="col-6 col-sm-6">  
                            
                                    <img src="images/graduate.jpeg" class="img-fluid" >
                    </div> 
                </div>  
                <div class="row" id="row2">
                        <div class="col-6 col-sm-6">  
                                <img src="images/studentofyear.jpeg" class="rounded-circle center-block" width="236" height="236" >
                                
                </div> 
                        <div class="col-6 col-sm-6">
                            <div id="content-center">
                            <blockquote class="text-center text-light" style="margin-top: 30px;">
                                                 <p style="color:black">Education is the most powerful weapon which you can use to change the world</p>
                                                 <footer class="blockquote-footer">Nelson Mandela</footer>
                                         </blockquote>
                                        
                            </div>   
                            
                        </div>
                </div>
                <div class="row" id="row3">
                        <div class="col">  
                                <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Registration Number</th>
                                            <th scope="col">Acheivement</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $sql ="SELECT fullName,regNum,achievement FROM studentachievements";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                               while($row = $result->fetch_assoc()) {
                                                       echo '<tr>
                                                  <td>' . $row["fullName"] .'</td>
                                                  <td> '.$row["regNum"] .'</td>
                                                  <td> '.$row["achievement"] .'</td>
                                                  </tr>';
                                                      }
                                                   } else {
                                               echo "0 results";
                                                  } 
                                   
                                    ?>
                                    
                                        </tbody>
                                      </table> 
                                         
                                
                </div>     
                </div>
                </div>
                <footer  class="page-footer font-small">
                         
                        <div class="footer-copyright text-center py-5">© 2018 Copyright:
                                <a href="home.html" class="nav-link"> UetYearbook.com</a>
                              </div>
                </footer>
                </body>
                        
