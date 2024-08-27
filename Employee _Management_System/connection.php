<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nextech_portal_22RP03130";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "connected successfully";
}
else{
    echo "not connected successfully";
}
?>