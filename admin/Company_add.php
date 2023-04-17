<?php
include('connection/db.php');
$company=$_POST['company'];    
$des=$_POST['des'];
$admin=$_POST['admin'];
$query=mysqli_query($conn,"INSERT INTO company (`company`, `des`, `admin`) VALUES ('$company','$des','$admin')");
if($query){
    echo "data has been inserted";
}
else{
    echo "some error occured";
}
?>