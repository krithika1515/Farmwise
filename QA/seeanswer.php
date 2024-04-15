<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Queries</title>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    background-color: #333;
    color: #fff;
    padding: 10px;
}

#queryList {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

img {
            max-width: 30%;
            height: 30%;
        }



.query {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: not-allowed;
    transition: background-color 0.3s ease;
}

.query:hover {
    background-color: #f0f0f0;
}

    </style>
</head>

<body>
    <h1>See Answer</h1>
    <div id="queryList"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const queryList = document.getElementById("queryList");

    // Fetch queries from the server
    fetch("get_queries.php")
        .then((response) => response.json())
        .then((data) => {
            // Create and append query elements
            data.forEach((query) => {
                const queryDiv = document.createElement("div");
                queryDiv.classList.add("query");

                const title = document.createElement("h2");
                title.textContent = query.title;

                const problem = document.createElement("p");
                problem.textContent = `Problem: ${query.problem}`;

                const description = document.createElement("p");
                description.textContent = `Description: ${query.description}`;

                const image = document.createElement("img");
                image.src = query.image_url;
                image.alt = "Query Image";

                queryDiv.appendChild(title);
                queryDiv.appendChild(problem);
                queryDiv.appendChild(description);
                queryDiv.appendChild(image);

                ;

                queryList.appendChild(queryDiv);
            });
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
});

    </script>
</body>
</html>
