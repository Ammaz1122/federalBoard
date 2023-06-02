<?php

include '../../Config/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$fname= $_POST['fname'];


        if(isset($_FILES['image'])){
            
          $fileName = $_FILES['image']['name'];
         $fileSize = $_FILES['image']['size'];
         $tmp = $_FILES['image']['tmp_name'];
            
        move_uploaded_file($tmp,'../Assets/images'.$fileName);


        }


$update = "UPDATE students_info set name='{$name}', father_name ='{$fname}', 
image ='{$fileName}' WHERE id = '$id'";


$result = mysqli_query($conn,$update);

session_start();
$_SESSION['name'] = $name;
$_SESSION['image'] = $fileName;

header("Location: http://localhost/Student-Data/Admin/View/show-record.php");

?>