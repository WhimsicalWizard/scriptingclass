<?php
include('config.php');

if (isset($_POST['updatef'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $result = mysqli_query($con, "update  user set name='$name', age='$age', email='$email' where id='$id';");
    if (!$result) die("Update failed: " . mysqli_error($mysqli));
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";
}

?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
$result = mysqli_query($con, "Select * from user where id =$id");
while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
}
}
else "<font color='red'>The user is missing.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />
    <!-- //step 2: displaying retrived values in form  -->
    <form name=form1 method="POST" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?> " required></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age" value="<?php echo $age; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>" required></td>
            </tr>
            <tr>
            <td><input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>"></td>

            </tr>
            <td><input type="submit" name="updatef" value="Update"></td>

        </table>
    </form>

</body>

</html>