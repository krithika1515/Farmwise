<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Website</title>
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">

    <style>
        body{
            background-image:url("bg3.jpg");
  background-size: 100% 100%;;
            background-repeat: no-repeat;
            background-attachment: fixed;   
        }
        .content {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90.3vh;
            margin: 0;
                
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
        <div class="action-button" onclick="answerquery()">
            <div class="button-label">Answer Quey</div>
            <div class="icon"><i class="material-icons md-36">question_answer</i></div>
        </div>
        <div class="action-button" onclick="details()">
            <div class="button-label">My Details</div>
            <div class="icon"><i class="material-icons md-36">person_pin</i></div>
        </div>
        <div class="action-button" onclick="update_expert()">
            <div class="button-label">Update details</div>
            <div class="icon"><i class="material-icons md-36">update</i></div>
        </div>
        </div>
    </div>
</div>

    <script>
        function answerquery() {
            window.location.href = "answer_query.php"; 
        }

        function details() {
            window.location.href = "expertdetails.php"; 
        }
        
        function update_expert() {
            window.location.href = "update_expert.php";
        }
    </script>
</body>
</html>
