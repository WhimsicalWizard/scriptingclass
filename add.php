<<!DOCTYPE html>
    <html>

    <head>
        <title>Add Data</title>
    </head>

    <body>
        <?php
        include_once('config.php');
        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $age = mysqli_real_escape_string($con, $_POST['age']);
            $email = mysqli_real_escape_string($con, $_POST['email']);

            $result = mysqli_query($con, "INSERT INTO user(name, age, email) 
            VALUES('$name', '$age', '$email');");
            if (!$result) {
                die("Insertation failed: " . mysqli_error($con));
            }
            echo "Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
            
        }

        ?>
    </body>

    </html>