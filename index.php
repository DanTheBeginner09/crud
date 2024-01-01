<?php
include "conn.php";

?>
<style>
    #divheader{
        margin: auto;
        width: 500px;
        border-radius: 3px;
        padding: 10px;

    }

    input[type=text]{
        width: 100%;
    }
</style>

<!--HTML CRUD OPERATION-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
</head>
<body>
    <div id="divheader">
        <form action="insert.php" method="post">
        <table width=100%>
            <tr>
                <td>First Name</td>
                <td> <input type="text" name="FNAME" require></td>
            </tr>

            <tr>
            <td>Middle Initial</td>
                <td><input type="text" name="MI" require></td>
            </tr>

            <tr>
            <td>Last Name</td>
                <td><input type="text" name="LNAME" require></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit" >Register</button></td>
            </tr>

        </table>

        </form>

        <?php
            if(isset($_SESSION['success'])){
                echo $_SESSION['success'];
                unset ($_SESSION['success']);
            }

            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset ($_SESSION['error']);
            }
        ?>
         <table border="1" width="100%" >
            <tr>
                <th>First Name</th>
                <th>MI</th>
                <th>Last Name</th>
                <th>Actions</th>
            </tr>
            <?php
                $sql="SELECT * FROM client ORDER BY LNAME ASC";
                $query =$conn->query($sql);
                while($row=$query->fetch_assoc()){

                
            ?>
            <tr align="left">
                <td><?=$row['FNAME'];?></td>
                <td><?=$row['MI'];?></td>
                <td><?=$row['LNAME'];?></td>
                <td align="right">
                    <a href="edit.php?edit=<?=$row['ID'];?>">EDIT</a>
                    <a href="delete.php?delete=<?=$row['ID'];?>">DELETE</a>
                </td>
            </tr>

            <?php } ?>
         </table>


        <!--end of div-->
    </div>
    

<!--end-->
</body>
</html>