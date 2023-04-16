<?php
include('connection/db.php');
 $category=$_POST['category'];
$des=$_POST['des'];
$query=mysqli_query($conn,"insert into job_category(category,des)values('$category','$des')");
if($query){
    echo "data has been inserted";
}
else{
    echo "some error occured";
}
?>