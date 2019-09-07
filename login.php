<?php

include('conexion.php');

$user     = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT STATUS FROM USER WHERE USER = '".$user."' AND PASSWORD = '".$password."'";

$query = mysqli_query($link, $sql);

if (mysqli_num_rows($query) > 0)
{
    echo $query['STATUS'];
    header("Location: dondesea");
}
else
{
    echo "ruede aracavaca";
}