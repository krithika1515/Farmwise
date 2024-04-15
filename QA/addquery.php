<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Query</title>

    <style>
        *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
        }
    body {
        font-family: Arial, sans-serif;
        background-image: url(g4.jpg);
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
    <form id="queryForm" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="problem">Problem:</label>
        <input type="text" id="problem" name="problem" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        
        <label for="image">Image (optional):</label><br>
        <input type="file" id="image" name="image"><br><br><br>
        <center>
        <input type="submit" value="Submit">
        </center>
    </form>

    <script>
        document.getElementById("queryForm").addEventListener("submit", function (e) {
    e.preventDefault();

    // Create a FormData object to send form data including files
    const formData = new FormData(this);

    // Send the data to the server using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "submit_query.php", true);
    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            // Handle the success response
            console.log(xhr.responseText); // Check the response in the browser's console
            alert("Query added successfully!");
        } else {
            // Handle the error response
            console.error("Error: " + xhr.status);
            console.error(xhr.statusText);
        }
    }
    };
    xhr.send(formData);
});

    </script>
</body>
</html>
