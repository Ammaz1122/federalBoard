<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot.php' ?>
    <title>Show Record</title>
</head>
<body>
        <div class="bg-info text-center text-secondary">

       
        <?php
        session_start();
        echo " Hello " . $_SESSION['name'];
        ?>
    
     <img width =50px; height= 50px; src="<?php echo "../Assets/images" . $_SESSION['image']; ?>">
     </div>
        
       


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            
            include '../../config/connect.php';
            $select = "SELECT * FROM students_info";
            $result = mysqli_query($conn,$select);

            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){


            ?> 
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['father_name'] ?></td>
                <td> <img width="50px"; height="50px" src="<?php echo "../Assets/images". $row['image']; ?>" alt="">  
            </td>
            <td><a href="http://localhost/Student-Data/Admin/View/update-form.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Update </a></td>
            <td><a href="http://localhost/Student-Data/Admin/View/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete </a></td>
            </tr>
        
    
    <?php
                }
            }

            session_unset();
            session_destroy();
            ?>
    </tbody>
    </table>





</body>
</html>




















</body>
</html>