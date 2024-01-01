<?php
include "conn.php";
$id=$_GET['edit'];

$sql="SELECT * FROM client WHERE ID ='$id' ";
$query=$conn->query($sql);
$row=$query->fetch_assoc();
?>

<form action="update.php" method="post">
        <table width=100%>


           <tr>
                <td>ID Number</td>
                <td> <input type="text" value="<?=$row['ID'];?>" name="ID" require readonly></td>
            </tr>


            <tr>
                <td>First Name</td>
                <td> <input type="text" value="<?=$row['FNAME'];?>" name="FNAME" require></td>
            </tr>

            <tr>
            <td>Middle Initial</td>
                <td><input type="text" value="<?=$row['MI'];?>" name="MI" require></td>
            </tr>

            <tr>
            <td>Last Name</td>
                <td><input type="text" value="<?=$row['LNAME'];?>" name="LNAME" require></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit" >UPDATE</button></td>
            </tr>

        </table>

        </form>

