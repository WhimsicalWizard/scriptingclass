<?php
include('config.php');
$result = mysqli_query($con, "select * from user order by name asc");

if (!$result) die("Database fetch failed: " . mysqli_error($con));
?>

<html>

<head>
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>
    <a href="add.html">Add New Data</a><br /><br />
    <!-- creating table -->
    <table width='80%' border="0">
        <tr>
            <td>S.N</td>

            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Update</td>
        </tr>
        <?php
        // displays the data from the database
        $sn = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $sn;
            $sn++;
            "</td>";
            echo "<td>" . $row['name'];
            "</td>";
            echo "<td>" . $row['age'];
            "</td>";
            echo "<td>" . $row['email'];
            "</td></tr>";
            echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a>
            <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
        </tabel>
</body>

</html>