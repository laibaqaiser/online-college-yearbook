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
        <link href="style/home.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

 
            <div class="bg">
                <div class="row">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                            
                                <div class="navbar navbar-expand-md sticky-top navbar-dark" id="color" > 
                                        <marquee  scrollamount=12>
                                    <h1>University of Engineering and Technology Lahore</h1>
                                </marquee> 
                                </div>
                                </div>
                            
                            </div>
                            
                    <nav class="navbar navbar-expand-md sticky-top navbar-dark" id="customColor" >
                        <!--Title of the page in navbar-->
                        <div class="navbar-brand">
                           <h5 class="h5">
                                <img src="style/images/home_logo.jpg" width="25vh" height="25vh">
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
                                        <a href="home.php" class="nav-link" id="textColor"> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="signup.php" class="nav-link" id="textColor">Register</a>
                                   </li>
                                    <li class="nav-item">
                                         <a href="login.php" class="nav-link" id="textColor">Login</a>
                                    </li>
                            </ul>
                        </div>  
                    </nav>
                </div>
                </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" id="events">
                    <h3>EVENTS</h3>
                    <marquee  direction="up"  height="480px" width="100%">
                    <?php 
                        $myfile = "./Event.txt";
                        $Events =file_get_contents($myfile);
                        $lines = explode("\n",$Events);
                        foreach($lines as $newline){
                            echo $newline .'<br>' ;
                            }
                    ?>
                    </marquee>
                </div>
                <div class="col-md-9" id="image">
                       <img src="style/images/y3.png" >
                </div>
           
            </div>
       
        </div>
        
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
    </body>
</html>