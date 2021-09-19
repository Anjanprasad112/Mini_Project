<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo"successfully connected!!\n";
}
else{
    echo "Failed to connect";
}
mysqli_select_db($con,'college');
$name=$_POST['name'];
$email=$_POST['email'];
$branch=$_POST['branch'];
$dis=$_POST['dis'];
$query="insert into college(name,email,branch,dis) values('$name','$email','$branch','$dis')";
mysqli_query($con,$query);
header('location:index.php');
?>