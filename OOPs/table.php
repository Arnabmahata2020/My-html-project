<?php
require'function.php';

$show=new show();

$result= $show->displayAllRecord();

if($result)
{
    foreach($result as $row){     
    }
}
else{
    
}
?>

<html>
    <body>
    <table style="border:red; background-color:white;" border="5">
            <tr>
                <th>Slno</th>
                <th>name</th>
                <th>email</th>
                <th>gender</th>
                <th>address</th>
            
                <th>Operation</th>
            </tr>
            <?php $sl=1; foreach($result as $row){?>
                <tr>
                    <td><?php echo $sl;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['address'];?></td>

                    <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                    
                    <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
                <?php $sl++; } ?>
            
        </table>
    </body>
</html>