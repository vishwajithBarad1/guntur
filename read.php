<?php
    include "connect.php";
    $sql="SELECT * from `login`";
    $obj= mysqli_query($con,$sql);
    if($obj->num_rows > 0)
    {
        ?>
        <html>
            <body>
                <table>
                    <tr>
                        <td>id</td>
                        <td>username</td>
                        <td>email</td>
                        <td>contact</td>
                        <td> city</td>

                    </tr>
                    
                        <?php
                        while($row=$obj->fetch_assoc())
                        {
                            ?>
                            <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['city'];?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    
                <table>
            </body>

        </html>
        <?php
    }


?>
