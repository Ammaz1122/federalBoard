<?php

// echo "Deleted Page";

include '../../Config/connect.php';
$id = $_GET['id'];

$delete = "DELETE FROM students_info WHERE id = $id";

$result = mysqli_query($conn,$delete);

// if($delete){
//     echo "Data Deleted";
// }
// else{
//     echo "Data Was not deleted";
// }

header('Location: http://localhost/Student-Data/Admin/View/show-record.php');

?>