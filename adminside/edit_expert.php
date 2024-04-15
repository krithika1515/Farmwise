<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Expert Information</title>
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            color: #4CAF50;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Edit Expert Information</h2>
        <?php
        include('dbConnect.php');

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch the expert's information from the database based on the ID
            $sql = "SELECT * FROM expert WHERE expert_id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Display a form for editing expert information
                $row = $result->fetch_assoc();
                ?>
                <form action="process_edit_expert.php" method="POST">
                    <!-- Add input fields for editing expert data, pre-filled with existing values -->
                    <input type="hidden" name="id" value="<?php echo $row['expert_id']; ?>">
                    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
                    Email: <input type="text" name="mailid" value="<?php echo $row['mailid']; ?>"><br>
                    Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
                    Specialist: <input type="text" name="specialist" value="<?php echo $row['specialist']; ?>"><br>
                    <input type="submit" value="Update">
                </form>
            <?php
            } else {
                echo "Expert not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $conn->close();
        ?>
    </div>
</body>

</html>
