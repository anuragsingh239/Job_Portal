<?php
include('connection/db.php');
 $company=$_POST['company'];
$des=$_POST['des'];
$query=mysqli_query($conn,"insert into company(company,des)values('$company','$des')");
if($query){
    echo "data has been inserted";
}
else{
    echo "some error occured";
}
?>