<?php
include 'db.php';

if(count($_POST)>0){
  if($_POST['type']==1){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $sql = "INSERT INTO `student`( `username`, `email`,`password`,`confirm`) 
    VALUES ('$username','$email','$password','$confirm')";
    if (mysqli_query($conn, $sql)) {
      echo json_encode(array("statusCode"=>200));
    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
}
  /*
  }else if($action=="Update"){
    $id=mysqli_real_escape_string($con,$_POST["id"]);
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $email=mysqli_real_escape_string($con,$_POST["email"]);
    $password=mysqli_real_escape_string($con,$_POST["password"]);
    $confirm=mysqli_real_escape_string($con,$_POST["confirm"]);


    $sql="update student SET name='{$name}',email='{$email}',password='{$password}',confirm='{$confirm}',  where ID='{$id}'";
    if($con->query($sql)){
      echo "
        <td>{$id}</td>
        <td>{$name}</td>
        <td>{$email}</td>
        <td>{$password}</td>
        <td>{$confirm}</td>
        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
        
    }else{
      echo false;
    }
  }else if($action=="Delete"){
    $id=$_POST["uid"];
    $sql="delete from student where ID='{$id}'";
    if($con->query($sql)){
      echo true;
    }else{
      echo false;
    }*/
  }
?>