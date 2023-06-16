<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="form" >

<form action="db/db_connect.php" method="post" class="form-group">
   
<div class="form-input">
    <label for="name">Username: </label>
    <input type="text" name="name" id="">
</div>
<div class="form-input">
    <label for="name">Email: </label>
    <input type="email" name="email" id="">

</div>
    <div class="form-input">
    <label for="name">Note: </label>
    <input type="text" name="note" id="">
    </div>
    <div class="form-input">
<input type="submit" value="Save">
    </div>



</form>

</div>


<?php include_once "add_user.php"; 

// var_dump( $result->fetch_assoc());


// if ($result->num_rows > 0){
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Email:" . $row["email"]. " Note:" . $row["note"]. "<br>";
//       }
//     } else {
//       echo "0 results";
//     }

?>
<div class="users">

<?php
if ($result->num_rows > 0){

?>

    <table id="users">
        <thead>
            <tr>
                <th> Number</th>
                <th>User</th>
                <th>Enail</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
        while($row = $result->fetch_assoc()) {

            ?>
            <tr>
                <td> <?php echo $row["id"] ?></td>
                <td> <?php echo $row["name"] ?></td>
                <td> <?php echo $row["email"] ?></td>
                <td> <?php echo $row["note"] ?></td>
                <td>

                </td>
            </tr>
            <?php 
        }
        ?>
        </tbody>
    </table>
<?php

} else {
          echo "No Users stored.";
        }
    

?>
</div>


</body>
</html>