<?php
    require('./database.php');

    if (isset($_POST['edit'])){
        $editId = $_POST['editId'];
        $editUsername = $_POST['editUsername'];
        $editPassword = $_POST['editPassword'];
    }

    if (isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateUsername = $_POST['updateUsername'];
        $updatePassword = $_POST['updatePassword'];
    
        $queryUpdate = "UPDATE accounts SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        echo '<script> alert("Successfully Updated!")</script>';
        echo '<script> window.location.href = "/php-crud/index.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<style>
html, body {
    margin: 0;
    padding: 0;
}

.main{
    height:100vh;

 /* grid */ 
    display: grid;
    grid-template-rows: auto 1fr;
    justify-items: center;
    row-gap: 20px;  
}

.main .update-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap:5px;
}

.main .update-main h3 {
    text-align: center;
}

</style>

<body>

    <div class = "main">
        <form class = "update-main" action="/php-crud/update.php" method = "post">
            <h3>UPDATE USER</h3>
            <input type="text" name = "updateUsername" placeholder = "Enter your USERNAME" value = "<?php echo $editUsername ?>" required/>
            <input type="text" name = "updatePassword" placeholder = "Enter your PASSWORD" value = "<?php echo $editPassword ?>"required/>
            <input type="submit" name = "update" value = "UPDATE"/>
            <input type="hidden" name = "updateId" value = "<?php echo $editId ?>"/>
        </form>
    </div>
</body>
</html>