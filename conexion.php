<?php

function connect()
{
    if(!$link = mysqli_connect("mysql", "root", "root", "miwebapp"))
    {
        echo "<p>Error conectando a la base de datos</p>";
		exit();
    }
    return $link;
}

$link = connect();