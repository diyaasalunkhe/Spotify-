<?php

$conn = new mysqli('localhost', 'root', '','spotify');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['Age'];
    $mobile = $_POST['mobile'];
    $genre = $_POST['Genre'];

    $query = "insert into user(name,email,gender,Age,mobile,Genre) values('$name','$email','$gender','$age','$mobile','$genre')";
    $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Welcome to Spotify!!!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
}

if(isset($_POST['delete'])){
    $email = $_POST['delete-email'];
    $query = "select * from user where email='$email'";
    $result = mysqli_query($conn, $query);
    $rowcount = mysqli_num_rows( $result );
    if($rowcount>0){
        $query1="delete from user where email='$email'";
        $result1 = mysqli_query($conn, $query1);
        if ($result1) {
            echo "<script>alert('Your Record is deleted!!!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    else {
        echo "<script>alert('Email does not Exist!!!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}       


$conn->close();
?>
