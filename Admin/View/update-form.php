<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot.php' ?>
    <title>Update Form</title>
</head>
<body>

                
               

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot.php' ?>
    <title>Update Form</title>
</head>
<body>

                
               

<div class="container w-25 shadow border my-4 my-3">
        <div class="row">
            <div class="col-lg-12">

                <?php
                    include '../../Config/connect.php';
                    $id = $_GET['id'];
                    $query = "SELECT * FROM students_info WHERE id = $id ";
                    $result = mysqli_query($conn,$query);

                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result)){


                        
                ?>
<form action="./update-data.php" method="POST" enctype="multipart/form-data">

<h2>Update Form Data</h2>

<label class="my-3" for="name">ID</label>
<input type="text" name="id" class="form-control" value="<?php echo $row['id'] ?>"  placeholder="Enter Updated Name">

<label class="my-3" for="name">Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>"  placeholder="Enter Updated Name">

<label class="my-3" for="age">fname</label>
<input type="text" name="fname" class = "form-control" value="<?php echo $row['father_name'] ?>" placeholder="Enter Updated Age Number">

<label class="my-3" for="image">image</label>
<input type="file" name="image" class = "form-control" value="<?php echo $row['image'] ?>" placeholder="Enter Updated image Name">

<!-- ext" name="class"class = "form-control" value=" placeholder="Enter Updated Class Name"> -->

<input  type="submit" class="btn btn-info my-3 w-100" value="Updated Data">
            </div>

        </div>
    </div>

                            <?php
                        }
                    }
                            ?>

      </form>









</body>
</html>