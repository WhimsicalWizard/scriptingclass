<?php 
include('config.php');
$result = mysqli_query($con, "select * from user order by id desc");

if(!$result) die ("Database fetch failed: ". mysqli_error($con));
?>

        <html><head><title>HomePage</title></head>
<body>
    <a href="add.html">Add New Data</a><br/><br/>
        <table width = '80%' border="0">
            <tr bgcolor = '#aaf0fa'>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td>Update</td>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['name'];"</td>";
            echo "<td>".$row['age'];"</td>";
            echo "<td>".$row['email'];"</td>";
            echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a>
            <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            
        }
        ?>
    </tabel>
</body>

</html>