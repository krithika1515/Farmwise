<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/flogo.jpg" type="image/icon type">
    <title>Crop Information</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0-beta3/css/all.min.css">
    <style>
        /* Custom CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-image: url('../images/bg2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            min-height: 90vh;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            padding: 20px;
        }

        .selection-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        select {
            width: 30%;
            padding: 10px;
            border-radius: 15px;
            border: 1px solid #c52a2a;
        }

        .crop-details {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* background-color: rgba(255, 255, 255, 0.9); */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background: rgba(255, 255, 255, .7);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            
        }

        h2 {
            color: #333;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        li {
            border: 1px solid rgb(0, 0, 0);
            margin-top: 20px;
            border-radius: 20px;
            cursor: pointer; /* Add cursor pointer for clickable items */
            background: rgba(255, 255, 255, .7);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
        }

        /* Add styles for Bootstrap buttons */
        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Background colors for states, districts, and seasons */
        .state-bg {
            background-color: orange; 
            margin:20px;/* Yellow */
            border-radius: 30px;  
            color:white;  
        }

        .district-bg {
            background: #CFE7fA;
background: linear-gradient(to right, #CFE7fA 0%, #6393C1 100%);

            margin:20px;
            border-radius: 30px;
            color: white;
        }

        .season-bg {
            background-color: green; /* Teal */
            margin:20px;
            border-radius: 30px;
            color:white;
        }

        /* Crop image styling */
        .crop-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
            padding: 20px;
        }

        .form-control option {
    border-radius: 80px; /* Sets border-radius for dropdown options */
}

    </style>
</head>
<body>
<?php include('GT.php'); ?>
    <div class="container">
        <h1 class="text-center">Crop Information</h1>
        <div class="selection-container">
            <label for="stateSelector" class="state-bg p-2">
                <i class="fas fa-globe"></i> State:
            </label>
            <select id="stateSelector" class="form-control">
                <option value="Andaman Nicobar">Andaman & Nicobar</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagarhaveli">Dadra & NagarHaveli</option>
                <option value="Daman">Daman</option>
                <option value="Diu">Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Ladakh">Ladakh</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarkhand">Uttarkhand</option>
                <option value="West Bengal">West Bengal</option>
                
                <!-- Add options for other states if needed -->
            </select>

            <label for="districtSelector" class="district-bg p-2">
                <i class="fas fa-map-marker-alt"></i> District:
            </label>
            <select id="districtSelector" class="form-control">
                <!-- Options for districts will be populated dynamically based on the selected state -->
            </select>

            <label for="seasonSelector" class="season-bg p-2">
                <i class="fas fa-sun"></i> Season:
            </label>
            <select id="seasonSelector" class="form-control">
                <option value="Winter">Winter</option>
                <option value="Monsoon">Monsoon</option>
                <option value="Summer">Summer</option>
                <option value="Autumn">Autumn</option>
            </select>
        </div>

        <div id="cropDetails" class="crop-details">
            <!-- Crop details will be displayed here -->
        </div>

        <!-- Add Font Awesome icons -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const stateSelector = document.getElementById("stateSelector");
            const districtSelector = document.getElementById("districtSelector");
            const seasonSelector = document.getElementById("seasonSelector");
            const cropDetails = document.getElementById("cropDetails");

            // Data for crop details
            const cropData = {
                "Andaman Nicobar": {
                    "Nicobar": {
                        "Winter": [
                            { name: "Cotton", image: "Crop images\\cotton.jpg", htmlFile: "Cropdetails//cotton.php" },
                            { name: "Mango", image: "Crop images\\mango.jpg",htmlFile: "Cropdetails//mango.php" }
                        ],
                        "Monsoon": [
                            { name: "Rice", image: "Crop images\\rice.jpg", htmlFile: "Cropdetails//rice.html" },
                            { name: "Tomato", image: "Crop images\\download.jfif",htmlFile: "Cropdetails//tomato.html" }
                        ],
                        "Summer": [
                            { name: "Mango", image: "Crop images\\mango.jpg", htmlFile: "Cropdetails//mango.html" },
                            { name: "Guava", image: "Crop images\\guava.jpg",htmlFile: "Cropdetails//guava.html" }
                        ],
                        "Autumn": [
                            { name: "Papaya", image: "Crop images\\papaya.jfif", htmlFile: "Cropdetails//papaya.html" },
                            { name: "Banana", image: "Crop images\\banana.jfif",htmlFile: "Cropdetails//banana.html" }
                        ]

                    },

                    "North and Middle Andaman": {
                        "Winter": [
                        { name: "Banana", image: "Crop images\\banana.jfif", htmlFile: "Cropdetails//banana.html" },
                        { name: "Wheat", image: "Crop images\\wheat.jpeg", htmlFile: "Cropdetails//wheat.html" }
                    ],
                        "Monsoon": [
                        { name: "Cotton", image: "Crop images\\cotton.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Sugarcane", image: "Crop images\\sugarcane.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                        "Summer": [
                        { name: "Cashew", image: "Crop images\\cashew.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Coconut", image: "Crop images\\coconut.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                        "Autumn": [
                         { name: "Coconut", image: "Crop images\\coconut.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Oilpalm", image: "Crop images\\oilpalm.jfif", htmlFile: "Cropdetails//rice.html" }
                    ]
                        
                    }
                },
                "Arunachal Pradesh": {
                    "Tawang": {
                        "Winter": [
                        { name: "Spinach", image: "Crop images\\spinach.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Carrot", image: "Crop images\\carrot.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Cabbage", image: "Crop images\\cotton.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Cauliflower", image: "Crop images\\sugarcane.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Barley", image: "Crop images\\cashew.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Buckwheat", image: "Crop images\\coconut.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Apple", image: "Crop images\\coconut.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Orange", image: "Crop images\\oilpalm.jfif", htmlFile: "Cropdetails//rice.html" }
                    ]

                    },
                    "Anjaw": {
                        "Winter": [
                        { name: "Radishes", image: "Crop images\\radish.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Spinach", image: "Crop images\\spinach.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Ginger", image: "Crop images\\ginger.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Turmeric", image: "Crop images\\turmeric.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Lentils", image: "Crop images\\lentil.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Chickpeas", image: "Crop images\\chickpea.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Beans", image: "Crop images\\beans.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Potatoes", image: "Crop images\\potatoes.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    }
                },

                "Tamil Nadu": {
                    "Coimbatore": {
                        "Winter": [
                        { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//wheat.html" },
                        { "name": "Cotton", "image": "Crop images\\cotton.jpg", "htmlFile": "Cropdetails//cottom.html" }
                    ],
                    "Monsoon": [
                        { name: "Cabbage", image: "Crop images\\cabbage.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Cauliflower", image: "Crop images\\cauliflower.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Barley", image: "Crop images\\barley.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Buckwheat", image: "Crop images\\buckwheat.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Apple", image: "Crop images\\apple.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Orange", image: "Crop images\\orange.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    },
                    "Ramanathapuram": {
                    
                        "Winter": [
                        { name: "Radish", image: "Crop images\\radish.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Spinach", image: "Crop images\\spinach.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Ginger", image: "Crop images\\ginger.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Turmeric", image: "Crop images\\turmeric.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Lentil", image: "Crop images\\lentil.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Chickpeas", image: "Crop images\\chickpea.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Beans", image: "Crop images\\beans.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Potato", image: "Crop images\\potatoes.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    }
 
                },

                "Andhra Pradesh": {
                    "Nicobar": {
                        "Anantpur": [
                        { name: "Sweet Potato", image: "Crop images\\potatoes.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Pineapple", image: "Crop images\\pineapple.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Turmeric", image: "Crop images\\turmeric.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Drumstick", image: "Crop images\\drumstick.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Coconut", image: "Crop images\\coconut.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Banana", image: "Crop images\\banana.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Tapioca", image: "Crop images\\tapioca.jfif", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Papaya", image: "Crop images\\papaya.jfif", htmlFile: "Cropdetails//rice.html" }
                    ]

                    },
                    "East Godaveri": {
                    
                        "Winter": [
                        { name: "Sweet Potato", image: "Crop images\\potatoes.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Pineapple", image: "Crop images\\pineapple.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Turmeric", image: "Crop images\\turmeric.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Drumstick", image: "Crop images\\drumstick.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Coconut", image: "Crop images\\coconut.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Banana", image: "Crop images\\banana.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Tapioca", image: "Crop images\\tapioca.jfif", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Papaya", image: "Crop images\\papayas.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    }
 
                },

                "Assam": {
                    "Dibrugarh": {
                        "Winter": [
                        { name: "Cabbage", image: "Crop images\\cabbage.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Leafy greens", image: "Crop images\\leafy.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Rice", image: "Crop images\\rice.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Jute", image: "Crop images\\jute.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Tea", image: "Crop images\\tea.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Pineapple", image: "Crop images\\pineapple.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Tea", image: "Crop images\\tea.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Orange", image: "Crop images\\orange.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    },
                    "Jorhat": {
                    
                        "Winter": [
                        { name: "Tea", image: "Crop images\\tea.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Carrot", image: "Crop images\\carrot.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Joha Rice", image: "Crop images\\joha.jfif", htmlFile: "Cropdetails//rice.html" },
                        { name: "Jute", image: "Crop images\\jute.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Lemon", image: "Crop images\\lemon.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Boro Rice", image: "Crop images\\bora.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Jute", image: "Crop images\\jute.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Cauliflower", image: "Crop images\\cauliflower.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    }
 
                },

                "Bihar": {
                    "Muzaffarpur": {
                        "Winter": [
                        { name: "Wheat", image: "Crop images\\wheat.jpeg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Maize", image: "Crop images\\maize.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Sugarcane", image: "Crop images\\sugarcane.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Paddy", image: "Crop images\\paddy.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Litchi", image: "Crop images\\litchi.jpg", htmlFile: "Cropdetails//rice.html" },
                        { name: "Mango", image: "Crop images\\mango.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Apple", image: "Crop images\\apple.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Orange", image: "Crop images\\orange.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    },
                    "Darbhanga": {
                    
                        "Winter": [
                        { name: "Greenepeas", image: "Crop images\\greenpea.jfif", htmlFile: "Cropdetails//rice.html" },
                        { name: "Masoor", image: "Crop images\\lentil.jpg", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Monsoon": [
                        { name: "Oilseeds", image: "Crop images\\oilseeds.jfif", htmlFile: "Cropdetails//rice.html" },
                        { name: "Fodder crops", image: "Crop images\\fodder.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Summer": [
                        { name: "Jamun", image: "Crop images\\jamun.jfif", htmlFile: "Cropdetails//rice.html" },
                        { name: "Muskmelon", image: "Crop images\\musk.jfif", htmlFile: "Cropdetails//oilseeds.html" }
                    ],
                    "Autumn": [
                         { name: "Apple", image: "Crop images\\apple.jpg", htmlFile: "Cropdetails//oilseeds.html" },
                        { name: "Orange", image: "Crop images\\orange.jpg", htmlFile: "Cropdetails//rice.html" }
                    ]

                    }
 
                },

                    "Chhattisgarh": {
        "Raipur": {
            "Winter": [
                { "name": "Wheat", "image": "Crop images\\spinach.jpg", "htmlFile": "Cropdetails//rice.html" },
                { "name": "Barley", "image": "Crop images\\carrot.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
            ],
            "Monsoon": [
                { "name": "Turmeric", "image": "Crop images\\cabbage.jpg", "htmlFile": "Cropdetails//rice.html" },
                { "name": "Ginger", "image": "Crop images\\cauliflower.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
            ],
            "Summer": [
                { "name": "Bitterguard", "image": "Crop images\\barley.jpg", "htmlFile": "Cropdetails//rice.html" },
                { "name": "Okra", "image": "Crop images\\buckwheat.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
            ],
            "Autumn": [
                { "name": "Peas", "image": "Crop images\\apple.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
                { "name": "Orange", "image": "Crop images\\orange.jpg", "htmlFile": "Cropdetails//rice.html" }
            ]
        },
        "Durg": {
            "Winter": [
                { "name": "Wheat", "image": "Crop images\\radish.jpg", "htmlFile": "Cropdetails//rice.html" },
                { "name": "Potato", "image": "Crop images\\spinach.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
            ],
            "Monsoon": [
                { "name": "Pulses", "image": "Crop images\\ginger.jpg", "htmlFile": "Cropdetails//rice.html" },
                { "name": "Oilseeds", "image": "Crop images\\turmeric.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
            ],
            "Summer": [
                { "name": "Sorghum", "image": "Crop images\\lentil.jpg", "htmlFile": "Cropdetails//rice.html" },
                { "name": "Pearl millet", "image": "Crop images\\chickpea.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
            ],
            "Autumn": [
                { "name": "Apples", "image": "Crop images\\beans.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
                { "name": "Carrots", "image": "Crop images\\potatoes.jpg", "htmlFile": "Cropdetails//rice.html" }
            ]
        }
    },

                "Karnataka": {
            "Mandya": {
                "Winter": [
                    { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//rice.html" },
                    { "name": "Linseed", "image": "Crop images\\linseed.jfif", "htmlFile": "Cropdetails//oilseeds.html" }
                ],
                "Monsoon": [
                    { "name": "Sugarcane", "image": "Crop images\\sugarcane.jpg", "htmlFile": "Cropdetails//rice.html" },
                    { "name": "Corn", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
                ],
                "Summer": [
                    { "name": "Jowar", "image": "Crop images\\sorghum.jpg", "htmlFile": "Cropdetails//rice.html" },
                    { "name": "Sweet corn", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
                ],
                "Autumn": [
                    { "name": "Turmeric", "image": "Crop images\\turmeric.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
                    { "name": "Ginger", "image": "Crop images\\ginger.jpg", "htmlFile": "Cropdetails//rice.html" }
                ]
            },
            "Hassan": {
                "Winter": [
                    { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//rice.html" },
                    { "name": "Mustard", "image": "Crop images\\mustard.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
                ],
                "Monsoon": [
                    { "name": "Ragi", "image": "Crop images\\ragi.jpg", "htmlFile": "Cropdetails//rice.html" },
                    { "name": "Pulses", "image": "Crop images\\pulses.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
                ],
                "Summer": [
                    { "name": "Cotton", "image": "Crop images\\cotton.jpg", "htmlFile": "Cropdetails//rice.html" },
                    { "name": "Lady's finger", "image": "Crop images\\ladyfinger.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
                ],
                "Autumn": [
                    { "name": "Cabbage", "image": "Crop images\\cabbage.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
                    { "name": "Cauliflower", "image": "Crop images\\cauliflower.jpg", "htmlFile": "Cropdetails//rice.html" }
                ]
            }
        },

        "Kerala": {
    "Palakkad": {
        "Winter": [
            { "name": "Turmeric", "image": "Crop images\\turmeric.jpg", "htmlFile": "Cropdetails//turmeric.html" },
            { "name": "Pomegranates", "image": "Crop images\\pomo.jfif", "htmlFile": "Cropdetails//pomegranates.html" }
        ],
        "Monsoon": [
            { "name": "Tamarind", "image": "Crop images\\tamarinf.jfif", "htmlFile": "Cropdetails//tamarind.html" },
            { "name": "Coffee seed", "image": "Crop images\\coffee.jfif", "htmlFile": "Cropdetails//coffee.html" }
        ],
        "Summer": [
            { "name": "Sorghum", "image": "Crop images\\sorghum.jpg", "htmlFile": "Cropdetails//sorghum.html" },
            { "name": "Sesame", "image": "Crop images\\seasame.jpg", "htmlFile": "Cropdetails//sesame.html" }
        ],
        "Autumn": [
            { "name": "Tapioca", "image": "Crop images\\tapioca.jfif", "htmlFile": "Cropdetails//tapioca.html" },
            { "name": "Coconut", "image": "Crop images\\coconut.jpg", "htmlFile": "Cropdetails//coconut.html" }
        ]
    },
    "Kottayam": {
        "Winter": [
            { "name": "Spinach", "image": "Crop images\\spinach.jpg", "htmlFile": "Cropdetails//spinach.html" },
            { "name": "Carrots", "image": "Crop images\\carrot.jpg", "htmlFile": "Cropdetails//carrots.html" }
        ],
        "Monsoon": [
            { "name": "Rice", "image": "Crop images\\rice.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Pepper", "image": "Crop images\\pepper.jpg", "htmlFile": "Cropdetails//pepper.html" }
        ],
        "Summer": [
            { "name": "Barley", "image": "Crop images\\barley.jpg", "htmlFile": "Cropdetails//barley.html" },
            { "name": "Buckwheat", "image": "Crop images\\buckwheat.jpg", "htmlFile": "Cropdetails//buckwheat.html" }
        ],
        "Autumn": [
            { "name": "Areca nut", "image": "Crop images\\areca.jpg", "htmlFile": "Cropdetails//arecanut.html" },
            { "name": "Vanilla", "image": "Crop images\\vanila.jpg", "htmlFile": "Cropdetails//vanilla.html" }
        ]
    }
},

"Rajasthan": {
    "Bikaner": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\spinach.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Gram", "image": "Crop images\\carrot.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Monsoon": [
            { "name": "Peanut", "image": "Crop images\\cabbage.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Pearl millet", "image": "Crop images\\cauliflower.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Summer": [
            { "name": "Moth dal", "image": "Crop images\\barley.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Seasame", "image": "Crop images\\buckwheat.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Autumn": [
            { "name": "Mustard", "image": "Crop images\\apple.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
            { "name": "Cumin", "image": "Crop images\\orange.jpg", "htmlFile": "Cropdetails//rice.html" }
        ]
    },
    "Jaipur": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\radish.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Barley", "image": "Crop images\\spinach.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Monsoon": [
            { "name": "Pulses", "image": "Crop images\\ginger.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Sorgham", "image": "Crop images\\turmeric.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Summer": [
            { "name": "Cotton", "image": "Crop images\\lentil.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Sugarcane", "image": "Crop images\\chickpea.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Autumn": [
            { "name": "Isabgol", "image": "Crop images\\beans.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
            { "name": "Guar gum", "image": "Crop images\\potatoes.jpg", "htmlFile": "Cropdetails//rice.html" }
        ]
    }
},

"Uttar Pradesh": {
    "Agra": {
        "Winter": [
            { "name": "Peas", "image": "Crop images\\peas.jpeg", "htmlFile": "Cropdetails//peas.html" },
            { "name": "Barley", "image": "Crop images\\barley.jpg", "htmlFile": "Cropdetails//barley.html" }
        ],
        "Monsoon": [
            { "name": "Corn", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//corn.html" },
            { "name": "Paddy", "image": "Crop images\\paddy.jpg", "htmlFile": "Cropdetails//paddy.html" }
        ],
        "Summer": [
            { "name": "Litchi", "image": "Crop images\\litchi.jpg", "htmlFile": "Cropdetails//litchi.html" },
            { "name": "Citrus fruits", "image": "Crop images\\citrus.jfif", "htmlFile": "Cropdetails//citrus.html" }
        ],
        "Autumn": [
            { "name": "Tomatoes", "image": "Crop images\\download.jfif", "htmlFile": "Cropdetails//tomatoes.html" },
            { "name": "Chillies", "image": "Crop images\\chillies.jpeg", "htmlFile": "Cropdetails//chillies.html" }
        ]
    },
    "Lucknow": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//wheat.html" },
            { "name": "Mustard", "image": "Crop images\\mustard.jpg", "htmlFile": "Cropdetails//mustard.html" }
        ],
        "Monsoon": [
            { "name": "Rice", "image": "Crop images\\rice.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Corn", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//corn.html" }
        ],
        "Summer": [
            { "name": "Mangoes", "image": "Crop images\\mango.jpg", "htmlFile": "Cropdetails//mangoes.html" },
            { "name": "Pomegranates", "image": "Crop images\\pomo.jfif", "htmlFile": "Cropdetails//pomegranates.html" }
        ],
        "Autumn": [
            { "name": "Lentils", "image": "Crop images\\lentil.jpg", "htmlFile": "Cropdetails//lentils.html" },
            { "name": "Sugarcane", "image": "Crop images\\sugarcane.jpg", "htmlFile": "Cropdetails//sugarcane.html" }
        ]
    }
},

"Uttarkhand": {
    "Haridwar": {
        "Winter": [
            { "name": "Chick Peas", "image": "Crop images\\peas.jpeg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Mustard", "image": "Crop images\\mustard.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Monsoon": [
            { "name": "Maize", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Soybeans", "image": "Crop images\\soybean.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Summer": [
            { "name": "Peaches", "image": "Crop images\\peach.jfif", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Plums", "image": "Crop images\\plums.jfif", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Autumn": [
            { "name": "Garlic", "image": "Crop images\\garlic.jfif", "htmlFile": "Cropdetails//oilseeds.html" },
            { "name": "Onions", "image": "Crop images\\onion.jfif", "htmlFile": "Cropdetails//rice.html" }
        ]
    },
    "Nainital": {
        "Winter": [
            { "name": "Potatoes", "image": "Crop images\\potatoes.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Carrots", "image": "Crop images\\carrot.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Monsoon": [
            { "name": "Rice", "image": "Crop images\\rice.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Corn", "image": "Crop images\\maize.jpeg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Summer": [
            { "name": "Apples", "image": "Crop images\\apple.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Plums", "image": "Crop images\\plums.jfif", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Autumn": [
            { "name": "Cabbages", "image": "Crop images\\cabbage.jpg", "htmlFile": "Cropdetails//oilseeds.html" },
            { "name": "Mustard", "image": "Crop images\\mustard.jpg", "htmlFile": "Cropdetails//rice.html" }
        ]
    }
},

"West Bengal": {
    "Bardhaman": {
        "Winter": [
            { "name": "Chick Peas", "image": "Crop images\\chickpeas.jpg", "htmlFile": "Cropdetails//chickpeas.html" },
            { "name": "Barley", "image": "Crop images\\barley.jpg", "htmlFile": "Cropdetails//barley.html" }
        ],
        "Monsoon": [
            { "name": "Guavas", "image": "Crop images\\guavas.jpg", "htmlFile": "Cropdetails//guavas.html" },
            { "name": "Mangoes", "image": "Crop images\\mangoes.jpg", "htmlFile": "Cropdetails//mangoes.html" }
        ],
        "Summer": [
            { "name": "Litchi", "image": "Crop images\\litchi.jpg", "htmlFile": "Cropdetails//litchi.html" },
            { "name": "Pomegranates", "image": "Crop images\\pomegranates.jpg", "htmlFile": "Cropdetails//pomegranates.html" }
        ],
        "Autumn": [
            { "name": "Ground nuts", "image": "Crop images\\groundnuts.jpg", "htmlFile": "Cropdetails//groundnuts.html" },
            { "name": "Brinjal", "image": "Crop images\\brinjal.jpg", "htmlFile": "Cropdetails//brinjal.html" }
        ]
    },
    "Nadia": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\wheat.jpg", "htmlFile": "Cropdetails//wheat.html" },
            { "name": "Cotton", "image": "Crop images\\cotton.jpg", "htmlFile": "Cropdetails//cottom.html" }
        ],
        "Monsoon": [
            { "name": "Rice", "image": "Crop images\\rice.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Jute", "image": "Crop images\\jute.jpg", "htmlFile": "Cropdetails//jute.html" }
        ],
        "Summer": [
            { "name": "Corn", "image": "Crop images\\corn.jpg", "htmlFile": "Cropdetails//corn.html" },
            { "name": "Sugarcane", "image": "Crop images\\sugarcane.jpg", "htmlFile": "Cropdetails//sugarcane.html" }
        ],
        "Autumn": [
            { "name": "Tomatoes", "image": "Crop images\\tomatoes.jpg", "htmlFile": "Cropdetails//tomatoes.html" },
            { "name": "Seasame", "image": "Crop images\\seasame.jpg", "htmlFile": "Cropdetails//seasame.html" }
        ]
    }
},


"Telangana": {
    "Adilabad": {
        "Winter": [
            { "name": "Rice", "image": "Crop images\\rice.jpg", "htmlFile": "Cropdetails//rice.html" },
            { "name": "Soybeans", "image": "Crop images\\soybean.jpg", "htmlFile": "Cropdetails//soybeans.html" }
        ],
        "Monsoon": [
            { "name": "Redgram", "image": "Crop images\\red-gram.webp", "htmlFile": "Cropdetails//redgram.html" },
            { "name": "Cotton", "image": "Crop images\\cotton.jpg", "htmlFile": "Cropdetails//cotton.html" }
        ],
        "Summer": [
            { "name": "Chillies", "image": "Crop images\\chillies.jpeg", "htmlFile": "Cropdetails//chillies.html" },
            { "name": "Sunflower", "image": "Crop images\\sunflower.jpg", "htmlFile": "Cropdetails//sunflower.html" }
        ],
        "Autumn": [
            { "name": "Turmeric", "image": "Crop images\\turmeric.jpg", "htmlFile": "Cropdetails//turmeric.html" },
            { "name": "Pearl millet", "image": "Crop images\\pearlmillet.jpg", "htmlFile": "Cropdetails//pearl_millet.html" }
        ]
    },
    "Hyderabad": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//wheat.html" },
            { "name": "Corn", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//corn.html" }
        ],
        "Monsoon": [
            { "name": "Cotton", "image": "Crop images\\cotton.jpg", "htmlFile": "Cropdetails//cotton.html" },
            { "name": "Oilseeds", "image": "Crop images\\oilseeds.jpg", "htmlFile": "Cropdetails//oilseeds.html" }
        ],
        "Summer": [
            { "name": "Papaya", "image": "Crop images\\papaya.jfif", "htmlFile": "Cropdetails//papaya.html" },
            { "name": "Watermelons", "image": "Crop images\\watermelon.jpg", "htmlFile": "Cropdetails//watermelons.html" }
        ],
        "Autumn": [
            { "name": "Red gram", "image": "Crop images\\red-gram.webp", "htmlFile": "Cropdetails//redgram.html" },
            { "name": "Grapes", "image": "Crop images\\grapes.jfif", "htmlFile": "Cropdetails//grapes.html" }
        ]
    }
},

"Tripura": {
    "Dhalai": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//wheat.html" },
            { "name": "Rice", "image": "Crop images\\rice.jpg", "htmlFile": "Cropdetails//rice.html" }
        ],
        "Monsoon": [
            { "name": "Turmeric", "image": "Crop images\\turmeric.jpg", "htmlFile": "Cropdetails//turmeric.html" },
            { "name": "Ginger", "image": "Crop images\\ginger.jpg", "htmlFile": "Cropdetails//ginger.html" }
        ],
        "Summer": [
            { "name": "Pineapples", "image": "Crop images\\pineapple.jpg", "htmlFile": "Cropdetails//pineapples.html" },
            { "name": "Oranges", "image": "Crop images\\orange.jpg", "htmlFile": "Cropdetails//oranges.html" }
        ],
        "Autumn": [
            { "name": "Chillies", "image": "Crop images\\chillies.jpeg", "htmlFile": "Cropdetails//chillies.html" },
            { "name": "Corn", "image": "Crop images\\maize.jpg", "htmlFile": "Cropdetails//corn.html" }
        ]
    },
    "Gomati": {
        "Winter": [
            { "name": "Wheat", "image": "Crop images\\wheat.jpeg", "htmlFile": "Cropdetails//wheat.html" },
            { "name": "Mustard", "image": "Crop images\\mustard.jpg", "htmlFile": "Cropdetails//mustard.html" }
        ],
        "Monsoon": [
            { "name": "Pulses", "image": "Crop images\\pulses.jpg", "htmlFile": "Cropdetails//pulses.html" },
            { "name": "Ginger", "image": "Crop images\\ginger.jpg", "htmlFile": "Cropdetails//ginger.html" }
        ],
        "Summer": [
            { "name": "Guavas", "image": "Crop images\\guava.jpg", "htmlFile": "Cropdetails//guavas.html" },
            { "name": "Citrus fruits", "image": "Crop images\\citrus.jfif", "htmlFile": "Cropdetails//citrus-fruits.html" }
        ],
        "Autumn": [
            { "name": "Pumpkin", "image": "Crop images\\pumpkin.jpg", "htmlFile": "Cropdetails//pumpkin.html" },
            { "name": "Betel leaves", "image": "Crop images\\betel.jfif", "htmlFile": "Cropdetails//betel-leaves.html" }
        ]
    }
}

                // Add data for other states and districts here
            };

            // Event listeners for state and district selection
            stateSelector.addEventListener("change", populateDistricts);
            districtSelector.addEventListener("change", updateCropInfo);
            seasonSelector.addEventListener("change", updateCropInfo);

            // Function to populate district options based on the selected state
            function populateDistricts() {
                const selectedState = stateSelector.value;
                // Clear previous options
                districtSelector.innerHTML = "<option value=''>Select a District</option>";
                // Get districts for the selected state
                const districts = Object.keys(cropData[selectedState] || {});
                // Populate district options
                districts.forEach((district) => {
                    const option = document.createElement("option");
                    option.value = district;
                    option.textContent = district;
                    districtSelector.appendChild(option);
                });
                // Trigger the updateCropInfo function when the user selects a district or season
                updateCropInfo();
            }

            // Function to update crop details based on user selections
            function updateCropInfo() {
                const selectedState = stateSelector.value;
                const selectedDistrict = districtSelector.value;
                const selectedSeason = seasonSelector.value;

                const cropInfo = cropData[selectedState]?.[selectedDistrict]?.[selectedSeason];

                if (cropInfo) {
                    // Display crop details with images
                    cropDetails.innerHTML = `
                        <h2>Crops in ${selectedDistrict}, ${selectedState} during ${selectedSeason}:</h2>
                        <ul>
                            ${cropInfo.map((crop) => `
                                <li onclick="openSpecificHTML('${crop.htmlFile}')">
                                    <img src="${crop.image}" alt="${crop.name}" class="crop-image">
                                    ${crop.name}
                                </li>
                            `).join("")}
                        </ul>
                    `;
                } else {
                    // Display a message if no data is available
                    cropDetails.innerHTML = "Select a State, District, and Season to view crop details.";
                }
            }

            // Function to open a specific HTML file
            
            // Initial population of districts
            populateDistricts();
        });
        function openSpecificHTML(htmlFile) {
            // Redirect to the specified HTML file
            window.location.href = htmlFile;
        }
        </script>
    </div>

    <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
