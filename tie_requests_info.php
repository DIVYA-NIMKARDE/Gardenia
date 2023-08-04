<?php
    require('tieup_connection.php');
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tie up requests</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_panel.php">TIE-UP REQUESTS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
            
    </div>
    </div>
  </div>
</nav>

<div class="container mt-5">
           <div class="row">
               <div class="col-lg-12">
               <table class="table table-dark table-striped text-center">
                 <thead>
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Owner Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nursery Name</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Address</th>

                    </tr>
                </thead>
                    <tbody>

                        <?php 
                            $query = "SELECT * FROM `users_nurseries`";
                            $user_result = mysqli_query($tcon, $query);
                            while($user_fetch = mysqli_fetch_assoc($user_result))
                            {
                                echo "
                                <tr>
                                    <td>$user_fetch[userid]</td>
                                    <td>$user_fetch[owner_name]</td>
                                    <td>$user_fetch[phonenumber]</td>
                                    <td>$user_fetch[owneremail]</td>
                                    <td>$user_fetch[nurseryname]</td>
                                    <td>$user_fetch[city]</td>
                                    <td>$user_fetch[state]</td>
                                    <td>$user_fetch[address]</td>";

                                    if($user_fetch['is_approved']==1)
                                    {
                                        echo "<td>
                                       
                                            <button name='approved' class='btn btn-success'>Approved</button>
                                      
                                        </td>";
                                    }
                                    elseif($user_fetch['is_approved']==2)
                                    {
                                        echo"
                                        <td>
                                        
                                            <button type='submit'name='rejected' class='btn btn-danger'>Rejected</button>
                                            
                                        </td>";
                                    }
                                    else
                                    {
                                        
                                    echo " 
                                    <td>
                                        <form action='manage_tieup.php' method='POST'>
                                            <input type='text' hidden name='id' value='<?php echo $user_fetch[userid]; ?>'>
                                            <button type='submit' name='approve' class='btn btn-success'>Approve</button>
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <form action='manage_tieup.php' method='POST'>
                                            <button type='submit'name='reject' class='btn btn-danger'>Reject</button>
                                        </form>        
                                    </td>
                                </tr>
                                ";
                                }
                            }
                        ?>

                        
                    </tbody>

                </table>
               </div>
           </div>
       </div>
</body>
</html>