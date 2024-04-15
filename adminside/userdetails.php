<html>
<head>
<link rel="icon" href="../images/flogo.jpg" type="image/icon type">
  <style>
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
    <h1>User's List</h1>
    <?php
    include('dbConnect.php');

    $sql = "SELECT id, name, state, district, phoneno FROM users"; // Added id field to the SQL query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>State</th>";
        echo "<th>District</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Update</th>";
        echo "<th>Delete</th>";
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        while($row = $result->fetch_assoc()) 
        {
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["state"]."</td>";
            echo "<td>".$row["district"]."</td>";
            echo "<td>".$row["phoneno"]."</td>";
            echo '<td><a href="update_user.php?id=' . $row['id'] . '">Update</a></td>';
            echo '<td><a href="delete_user.php?id=' . $row['id'] . '">Delete</a></td>';
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } 
    else 
    {
        echo "No User Data Available";
    }

    $conn->close();
    ?>
    <a class="button" href="download.php">Download List</a>
  </div>
</body>
</html>
