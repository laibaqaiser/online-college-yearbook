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
        <link href="style/achievement.css" rel="stylesheet" type="text/css" >
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
                        <div class="row" id="row3">
                                <div class="col-2"></div>
                                    <div class="col-8">
                             <div class="table-responsive">
                          <form method="POST" action="StudentAchievementEdit.php">
                            <table class="table table-bordered table-striped" style="margin-top:25px;" >
                                <thead class="thead-dark">
                                  <tr>
                                  <th><h3></h3></th>
                                  <th><h3>Name</h3></th>
                                  <th><h3>RegNo</h3></th>
                                    <th class="text-center">
                                        <h3>Achievements</h3></th>
                                        <th>
                                           </th>
                                  </tr>
                                  
                                </thead>
                                <tbody>
                                <?php 
                                        $sql ="SELECT a_id,fullName,regNum,achievement FROM studentachievements";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                           while($row = mysqli_fetch_array($result)) {
                                               ?>
                                                  
                                              <tr>
                                              
                                              <td><?php echo $row['a_id']; ?></td>
                                              <td><?php echo $row['fullName']; ?></td>
                                              <td><?php echo $row['regNum']; ?></td>
                                              <td><?php echo $row['achievement']; ?></td>
                                              <td><button type="submit" name="edit" class="btn btn-outline-secondary btn-sm" value="<?php echo $row['a_id']; ?>"> Edit </button></td>
                                             <?php echo "<tr>" ;
                                                  }
                                               } else {
                                           echo "0 results";
                                              } 
                                            ?>
                                </tbody>
                                           
                            </table>
                                            </form>
                                            </div>
                                <div class="col-2"></div>   
                                
                                            
                                            </div>
                                            </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
</body>
</html>