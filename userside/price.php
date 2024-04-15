<?php include ('header1.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commodity Price Lookup</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    background-color: #3498db;
    color: #fff;
    padding: 20px;
    margin: 0;
}

form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
}

label, select, button {
    display: block;
    margin-bottom: 15px;
    width: 100%;
}

select, button {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #3498db;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

</style>
<body>
    <h1>Commodity Price Lookup</h1>
    <form id="searchForm">
        <label for="state">State:</label>
        <select id="state" name="state">
            <option value="">Select a State</option>
            <option value="Bihar">Bihar</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Kerala">Kerala</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttrakhand">Uttrakhand</option>
            <!-- Add other state options here -->
        </select>
        <label for="district">District:</label>
        <select id="district" name="district">
            <option value="">Select a District</option>
            <!-- District options will be dynamically populated -->
        </select>
        <label for="commodity">Commodity:</label>
        <select id="commodity" name="commodity">
            <option value="">Select a Commodity</option>
            <!-- Commodity options will be dynamically populated -->
        </select>
        <button type="submit">Search</button>
    </form>
    <table id="dataTable">
        <!-- Table headers here -->
    </table>

    <script>
        const apiUrl = "https://api.data.gov.in/resource/9ef84268-d588-465a-a308-a864a43d0070";
        const apiKey = "579b464db66ec23bdd0000016ad98cec8a364c866b502d1d0a9ef030"; // Replace with your API key

        const searchForm = document.getElementById("searchForm");
        const stateDropdown = document.getElementById("state");
        const districtDropdown = document.getElementById("district");
        const commodityDropdown = document.getElementById("commodity");
        const dataTable = document.getElementById("dataTable");

        // Maintain a set to store unique district values
        const uniqueDistricts = new Set();

        searchForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const state = stateDropdown.value;
            const district = districtDropdown.value;
            const commodity = commodityDropdown.value;

            // Construct the API request URL based on user input
            const apiUrlWithFilters = `${apiUrl}?api-key=${apiKey}&format=json&filters[state]=${state}&filters[district]=${district}&filters[commodity]=${commodity}`;

            // Make the API request
            fetch(apiUrlWithFilters)
                .then(response => response.json())
                .then(data => {
                    // Process and display the data in the table
                    displayData(data);
                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                    dataTable.innerHTML = "Error fetching data from the API.";
                });
        });

        // Event listener for state selection
        stateDropdown.addEventListener("change", function () {
            const selectedState = stateDropdown.value;
            if (selectedState) {
                // Fetch and populate the district dropdown based on the selected state
                fetchDistricts(selectedState);
            } else {
                // If no state is selected, reset the district and commodity dropdowns
                districtDropdown.innerHTML = '<option value="">Select a District</option>';
                commodityDropdown.innerHTML = '<option value="">Select a Commodity</option>';
            }
        });

        // Event listener for district selection
        districtDropdown.addEventListener("change", function () {
            const selectedDistrict = districtDropdown.value;
            if (selectedDistrict) {
                // Fetch and populate the commodity dropdown based on the selected district
                fetchCommodities(selectedDistrict);
            } else {
                // If no district is selected, reset the commodity dropdown
                commodityDropdown.innerHTML = '<option value="">Select a Commodity</option>';
            }
        });

        // Function to fetch and populate district dropdown based on the selected state
        function fetchDistricts(selectedState) {
            // Construct the API request URL to fetch districts for the selected state
            const apiUrlForDistricts = `${apiUrl}?api-key=${apiKey}&format=json&filters[state]=${selectedState}&fields=district&distinct=true`;

            // Make the API request to fetch districts
            fetch(apiUrlForDistricts)
                .then(response => response.json())
                .then(data => {
                    // Clear the set of unique districts
                    uniqueDistricts.clear();

                    // Populate the district dropdown with fetched district values
                    districtDropdown.innerHTML = '<option value="">Select a District</option>';
                    data.records.forEach(record => {
                        const district = record.district;
                        // Add district to the set if it's not already present
                        if (!uniqueDistricts.has(district)) {
                            uniqueDistricts.add(district);
                            const option = document.createElement("option");
                            option.value = district;
                            option.textContent = district;
                            districtDropdown.appendChild(option);
                        }
                    });
                })
                .catch(error => {
                    console.error("Error fetching districts:", error);
                    districtDropdown.innerHTML = '<option value="">Select a District</option>';
                });
        }

        // Function to fetch and populate commodity dropdown based on the selected district
        function fetchCommodities(selectedDistrict) {
            // Construct the API request URL to fetch commodities for the selected district
            const apiUrlForCommodities = `${apiUrl}?api-key=${apiKey}&format=json&filters[district]=${selectedDistrict}&fields=commodity&distinct=true`;

            // Make the API request to fetch commodities
            fetch(apiUrlForCommodities)
                .then(response => response.json())
                .then(data => {
                    // Populate the commodity dropdown with fetched commodity values
                    commodityDropdown.innerHTML = '<option value="">Select a Commodity</option>';
                    data.records.forEach(record => {
                        const commodity = record.commodity;
                        const option = document.createElement("option");
                        option.value = commodity;
                        option.textContent = commodity;
                        commodityDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching commodities:", error);
                    commodityDropdown.innerHTML = '<option value="">Select a Commodity</option>';
                });
        }

        // Function to display data in the table
        function displayData(data) {
            // Clear the previous data
            dataTable.innerHTML = "";

            // Check if data is available
            if (data.records.length === 0) {
                dataTable.innerHTML = "No data available for the selected query.";
                return;
            }

            // Create table headers excluding "arrival_date"
            const headers = Object.keys(data.records[0]).filter(header => header !== "arrival_date");
            const headerRow = document.createElement("tr");
            headers.forEach(header => {
                const th = document.createElement("th");
                th.textContent = header;
                headerRow.appendChild(th);
            });
            dataTable.appendChild(headerRow);

            // Populate the table with data excluding "arrival_date"
            data.records.forEach(record => {
                const row = document.createElement("tr");
                headers.forEach(header => {
                    const td = document.createElement("td");
                    td.textContent = record[header];
                    row.appendChild(td);
                });
                dataTable.appendChild(row);
            });
        }
    </script>
</body>
</html>
