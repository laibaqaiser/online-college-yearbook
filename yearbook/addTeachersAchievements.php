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
        <link href="style/admin.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
            <?php
            if(isset($_POST["submit"])) {
                $u = $_POST["Username"];
                $r=$_POST["regNum"];
                $a=$_POST["Achievements"];
                $key=true;
            
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="user";
                
                $conn = mysqli_connect($servername, $username, $password,$dbname);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                else
                { 
                    $id=mysqli_query($conn,"SELECT id FROM teacher WHERE userName ='$u'")->fetch_object()->id;
                    $name=mysqli_query($conn,"SELECT fullName FROM teacher WHERE userName ='$u'")->fetch_object()->fullName;
                    $sql="INSERT INTO teacherachievements(fullName,regNum,achievement,id) VALUES('$name','$r','$a','$id')";
                    //$sql="UPDATE teacher SET achievement='$a' WHERE userName='$u'and regNum='$r'";
                    if (mysqli_query($conn, $sql)) {
                        echo "Record updated successfully";
                    } 
                    else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                    
                    mysqli_close($conn);
                     
                     
                }
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
                                            <a href="Admin.html" class="nav-link" id="textColor">Home</a>
                                        </li>
                                        <li class="nav-item" >
                                            <a href="Home.php" class="nav-link" id="textColor">Logout</a>
                                        </li>
                                        </ul>  
                                 </div>                               
                    </nav>
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                <div class="form-outer">
                                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                                      
                                        <div class="form-group"id="form">
                                        <i class="fa fa-user icon"></i>
                                                <label for="Username">Name</label>
                                                <input type="Username" class="form-control" name="Username" required="required">
                                            </div>
                                            <div class="form-group"id="form">
                                            <i class="fa fa-key icon"></i>
                                                    <label for="id">Id No. </label>
                                                    <input type="Id" class="form-control" name="regNum" required="required">
                                                </div>
                                            <div class="form-group"id="form">
                                            <i class="fas fa-award"></i>
                                                <label for="Add Achievements">Add Achievements</label>
                                                <textarea class="form-control" name="Achievements"></textarea>
                                            </div>
                                            <div class="col-md-12 text-center"> 
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                            </div>
                                            </form>
                                    </div>
                                </div>
                                <div class="col-4"></div>  
                               

                            </div>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
</body>
</html>