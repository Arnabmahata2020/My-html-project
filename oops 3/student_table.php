<?php
require'connection.php';

$show=new view();

$result= $show->view_data();


?>
<html>
<body>

<center>
    <table style="border:black; background-color:white;" border="10">
       
            <tr>
    
                <th>name</th>
                <th>number</th>
                 <th>Operation</th>
            </tr>
            <?php  foreach($result as $row){?>
                <tr>
                    
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['marks'];?></td>
                   <td><a href="edit_student.php?id=<?php echo $row['id'];?>">Edit</a>
                    <a href="delete_student.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
                <?php } ?>
               
            
        </table>
        </center>
    </body>
</html>