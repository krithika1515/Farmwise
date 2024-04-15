<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url(g1.jpeg);
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
            bottom: 30px; 
            color:black;
        }
    </style>
</head>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container">
        <div class="action-button" onclick="QueryPage()">
            <div class="button-label">Add  Query</div>
            <div class="icon"><i class="material-icons md-36">add</i></div>
        </div>
        <div class="action-button" onclick="DeletePage()">
            <div class="button-label">Delete Query</div>
            <div class="icon"><i class="material-icons md-36">delete</i></div>
        </div>
        <div class="action-button" onclick="AnswerPage()">
            <div class="button-label">See Answer</div>
            <div class="icon"><i class="material-icons md-36">visibility</i></div>
        </div>
    </div>

    <script>
        function QueryPage() {
            window.location.href = "addquery.php"; 
        }

        function DeletePage() {
            window.location.href = "display_queries.php";
        }

        function AnswerPage() {
            window.location.href = "ans.php"; 
        }
    </script>
</body>
</html>
