<?php 
$conn = mysqli_connect("localhost","root","","form");

if($conn)
{
    echo "Database connected";
}
else 
{
    echo "connected err";
}

?>