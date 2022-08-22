<?php
session_start();
include 'db.php';
$sql="SELECT * FROM student";
$result=$con->query($sql);
$result = mysqli_query($con,"SELECT *FROM student");


 
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Details</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>  
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>  
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"> </script>
 

  
</head>
<body>
     <div class="container">

    
    <table id="example" class="table table-bordered" >

         <center><h3>Students Details</h3></center>
         
            <p class='text-right'><a href='logout.php' class='btn btn-success'>Logout</a></p>
             <p class='text-left'><a href='' class='btn btn-success' id='add'>Add</a></p>
             
        <thead>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody id="tbody">
             <?php
            while ($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['confirm']; ?></td>
                     

                   <td><a href="" class="btn btn-primary">Edit</a></td>
                    
                    <td><input type="button"  name="delete" value="Delete" class="del btn btn-primary"></td>

        
                    
           </tr>
                <?php
            }?>
           
        
                    
           </tr>
        </tbody>
    </table>
</div>
   
    
        <script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});</script>
        </tbody>
</body>
</html>