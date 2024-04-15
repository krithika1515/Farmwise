<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Website</title>
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">

    <style>
        .content {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90.3vh;
            margin: 0;
            background-image: url(../images/g1.jpeg);
            background-size: 100% 100%;;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 80%;
            max-width: 800px;
        }

        .action-button {
            /* background-color: #4CAF50; */
            background-color: rgba(255, 255, 255, 0.13);
            backdrop-filter: blur(5px); 
            color: black;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            width: 100px; 
            height: 50px;  
        }


        .action-button:hover {
            background-color: #45a049;
            
            
        }

        .button-label {
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s ease;
        }

        .icon {
            position: absolute;
            bottom: -100%; 
            left: 50%;
            transform: translateX(-50%);
            transition: bottom 0.3s ease;
            text-decoration:bold;
        }

        
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 900,
  'wght' 900,
  'GRAD' 900,
  'opsz' 40
}


        .action-button:hover .button-label {
            opacity: 0; 
        }

        .action-button:hover .icon {
            bottom: 10px; 
            color:black;
        }
    </style>
</head>
<body>

<?php include 'header.php';?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="content">
    <div class="container">
        <div class="action-button" onclick="userdetails()">
            <div class="button-label">User details</div>
            <div class="icon"><i class="material-icons md-36">account_circle</i></div>
        </div>
        <div class="action-button" onclick="adduser()">
            <div class="button-label">Add Users</div>
            <div class="icon"><i class="material-icons md-36">person_add</i></div>
        </div>
        <div class="action-button" onclick="expertdetails()">
            <div class="button-label">Expert details</div>
            <div class="icon"><i class="material-icons md-36">account_circle</i></div>
        </div>
        <div class="action-button" onclick="addexpert()">
            <div class="button-label">Add Expert</div>
            <div class="icon"><i class="material-icons md-36">person_add</i></div>
        </div>
        <div class="action-button" onclick="profile()">
            <div class="button-label">Profile</div>
            <div class="icon"><i class="material-icons md-36">person_pin</i></div>
        </div>
        <div class="action-button" onclick="change()">
            <div class="button-label">Update</div>
            <div class="icon"><i class="material-icons md-36">update</i></div>
        </div>
    </div>
</div>

    <script>
        function userdetails() {
            window.location.href = "userdetails.php"; 
        }

        function adduser() {
            window.location.href = "adduser.php"; 
        }
        
        function expertdetails() {
            window.location.href = "expertdetails.php";
        }

        function addexpert() {
            window.location.href = "addexpert.php";
        }

        function change() {
            window.location.href = "adminupdate.php"; 
        }

        function profile() {
            window.location.href = "details.php"; 
        }
    </script>
</body>
</html>
