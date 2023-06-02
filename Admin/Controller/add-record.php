<?php
    include '../../assets/boot.php';
    include '../../Config/connect.php';

    $name = $_POST['name'];
    $fname = $_POST['fname'];

    if(isset($_FILES['image'])){
            // File Actual Name
        $filename = $_FILES['image']['name'];

        // File Size

        $fileSize = $_FILES['image']['size'];

        // File Temporary Name
        $tmp = $_FILES['image']['tmp_name'];

        // Move uploaded file is a function gives 3 parameter (tempFileName , path of file .concatinate with orignal File name)
        move_uploaded_file($tmp,'../Assets/images'.$filename);


        $insert = "INSERT INTO students_info (name,father_name,image) VALUES ('{$name}', '{$fname}','{$filename}')";

        $result = mysqli_query($conn,$insert);
        // if($result)
        // {
        //     echo "Query Inserted";
        // }
        // else{
        //     echo "Query Failed";
        // }

        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['image'] =$filename;
            

        header('Location: http://localhost/Student-Data/Admin/View/show-record.php');
        

    }
    
    





?>