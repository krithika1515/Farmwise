<?php include('header1.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Query</title>

    <style>

/* For WebKit (Chrome, Safari) */
*::-webkit-scrollbar {
  display: none !important;
}

        *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
        }
    body {
        font-family: Arial, sans-serif;
        background-image: url(../images/g4.jpg);
        background-size: 100% 100%;;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 10px;
        
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        /* background-color: #fff; */
        
        border-radius: 20px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
    }

    form:hover{
        background-color:white;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    

    input[type="submit"] {
        background-color: green;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 3px;
        transition: background-color 0.3s ease;
        width:30%;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }

    /* Style the form fields */
    #title {
        font-size: 18px;
    }

    #problem {
        font-size: 18px;
    }

    #description {
        font-size: 16px;
    }

    /* Style the file input */
    #image {
        font-size: 16px;
    }

    input[type="file"]::file-selector-button {
  border-radius: 40px;
  padding: 10px 16px;
  height: 40px;
  cursor: pointer;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
  margin-right: 16px;
  transition: background-color 200ms;
  width:50%;
}

/* file upload button hover state */
input[type="file"]::file-selector-button:hover {
  background-color: #f3f4f6;
}

/* file upload button active state */
input[type="file"]::file-selector-button:active {
  background-color: #e5e7eb;
}

</style>
</head>
<body>
    <h1>Add a Query</h1><br><br><br><br>
    <form id="queryForm" enctype="multipart/form-data" method="POST" action="submit_query.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="problem">Problem:</label>
        <input type="text" id="problem" name="problem" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>


        <label for="tag">Tag:</label>
            <select id="tag" name="tag" required>
                <option value="Crop Specialist">Crop Specialist</option>
                <option value="Livestock Expert">Livestock Expert</option>
                <option value="Sustainability & Environment Consultant">Sustainability & Environment Consultant</option>
                <option value="AgTech Innovator">AgTech Innovators</option>
                <option value="Soil Scientist & Agronomist">Soil Scientist & Agronomist</option>
                <option value="Organic Farming Advocate">Organic Farming Advocate</option>
                <option value="Farm Management Consultant">Farm Management Consultant</option>
                <option value="Horticulturalist & Specialty Crop Guru">Horticulturalist & Specialty Crop Guru</option>
                <option value="Agricultural Policy Analyst">Agricultural Policy Analyst</option>
                <option value="Educator & Extension Agent">Educator & Extension Agent</option>
            </select><br><br>

        <label for="image">Image (optional):</label><br>
        <input type="file" id="image" name="image"><br><br><br>

        <center>
            <input type="submit" value="Submit">
        </center>
        
    </form>
</body>
</html>
