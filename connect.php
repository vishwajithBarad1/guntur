<?php
    $con = mysqli_connect('localhost','root','','first_project');
    if($con)
    {
        echo "database connection succesful";
    }
    else
    {
        echo "databse connection not succesful";
    }

?>
