<!DOCTYPE html>
<html>
<head>
    <title>View Expert Details</title>
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 36px;
            color: #4CAF50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #4CAF50;
            color: #fff;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php include 'header1.php'; ?>

    <div class="container">
        <h2>View Expert Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Specialist</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('dbConnect.php');

                // Retrieve expert details from the database
                $sql = "SELECT * FROM expert";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["mailid"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["specialist"] . "</td>";
                        echo "<td>";
                        echo "<a href='edit_expert.php?id=" . $row["expert_id"] . "'>Edit</a> | ";
                        echo "<a href='delete_expert.php?id=" . $row["expert_id"] . "'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No experts found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
