<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crops</title>
    <style>
       body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #4CAF50;
    text-align: center;
}

.accordion-row {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    justify-content: space-evenly;
}

.accordion-subsection {
    position: relative;
    display: inline-block;
    margin-right: 20px;
    background-color: #4CAF50;
    color: white;
    padding: 8px 16px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    cursor: pointer;
    display:flex;
    justify-content: space-between;
    margin-right: 20px;
    flex: 0 0 auto;
    white-space: nowrap;
}

.accordion-subsection:last-child {
    margin-right: 0;
}

.accordion-subsection:hover {
    background-color: #45a049;
}

.accordion-subsection-content {
    display: none;
    padding: 10px 0;
}

.card {
    position: relative;
    margin: 10px 0;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.card img {
    width: auto;
    max-height: 150px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 10px;
}

.card-link {
    display: block;
    text-align: center;
    background-color: #4CAF50;
    color: white;
    padding: 8px 16px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.card-link:hover {
    background-color: #45a049;
}


a {
    color: #4CAF50;
    text-decoration: none;
    transition: color 0.3s ease;

}

a:hover {
    color: #45a049;
}

        
    </style>
</head>
<body>
<?php include('GT.php'); ?>
    <h1>CROP DIRECTORY</h1><br><br>

    <section id="crops" class="accordion-row">
        <div class="accordion">
        <div class="accordion-subsection">
            CEREALS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//rice.jpg" alt=""><br>
                <a href="rice.html" class="card-link">Rice</a>
            </div>
            <div class="card">
                <img src="cropImages//wheat.jpeg" alt="">
                <a href="wheat.html" class="card-link">Wheat</a>
            </div>
            <div class="card">
                <img src="cropImages//barley.jpg" alt="">
                <a href="#" class="card-link">Barley</a>
            </div>
            <!-- Add more cereal cards here -->
        </div>
    </div>
    <div class="accordion">

        <div class="accordion-subsection">
            PULSES
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//lentil.jpg" alt="">
                <a href="#" class="card-link">Lentils</a>
            </div>
            <div class="card">
                <img src="cropImages//gram.jpg" alt="">
                <a href="#" class="card-link">Bengal Gram</a>
            </div>
            <div class="card">
                <img src="cropImages//red-gram.webp" alt="">
                <a href="#" class="card-link">Green Gram</a>
            </div>
            <div class="card">
                <img src="cropImages//lentil.jpg" alt="">
                <a href="#" class="card-link">RiceBean</a>
            </div>
            <div class="card">
                <img src="cropImages//mashurd.jfif" alt="">
                <a href="#" class="card-link">Mash</a>
            </div>

        </div>
    </div>
</div>

    <div class="accordion">
        <div class="accordion-subsection">
            OILSEEDS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//groundnut.jpg" alt="">
                <a href="#" class="card-link">Groundnut</a>
            </div>
            <div class="card">
                <img src="cropImages//mustard.jpg" alt="">
                <a href="#" class="card-link">Mustard</a>
            </div>
            <div class="card">
                <img src="cropImages//soybean.jpg" alt="">
                <a href="#" class="card-link">Soybean</a>
            </div>
            <div class="card">
                <img src="cropImages//sunflower.jpg" alt="">
                <a href="#" class="card-link">Sunflower</a>
            </div>
            <div class="card">
                <img src="cropImages//safflower.jfif" alt="">
                <a href="#" class="card-link">Safflower</a>
            </div>

        </div>
    </div>

    <div class="accordion">
        <div class="accordion-subsection">
            SUGAR CROPS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//sugarcane.jpg" alt="">
                <a href="#" class="card-link">Sugarcane</a>
            </div>
            
        </div>
    </div>

    <div class="accordion">
        <div class="accordion-subsection">
            FIBRE CROPS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//cotton.jpg" alt="">
                <a href="cottom.html" class="card-link">Cotton</a>
            </div>
            <div class="card">
                <img src="cropImages//jute.jfif" alt="">
                <a href="#" class="card-link">Jute</a>
            </div>
            <div class="card">
                <img src="cropImages//hemp.jfif" alt="">
                <a href="#" class="card-link">Hemp</a>
            </div>
            <div class="card">
                <img src="cropImages//silk.jfif" alt="">
                <a href="#" class="card-link">Natural Silk</a>
            </div>
            <div class="card">
                <img src="cropImages//coir.jfif" alt="">
                <a href="#" class="card-link">Coir</a>
            </div>
           
        </div>
    </div>

</section>

<br><br>
    <h1>HORTICULTURE</h1><br><br>
    <section id="crops" class="accordion-row">

    <div class="accordion">
        <div class="accordion-subsection">
            FRUITS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//mango.jpg" alt="">
                <a href="mango.html" class="card-link">Mango</a>
            </div>
            <div class="card">
                <img src="cropImages//bananas.jpg" alt="">
                <a href="banana.html" class="card-link">Banana</a>
            </div>
            <div class="card">
                <img src="cropImages//apple.jpg" alt="">
                <a href="#" class="card-link">Apple</a>
            </div>
            <div class="card">
                <img src="cropImages//orange.jpg" alt="">
                <a href="#" class="card-link">Orange</a>
            </div>
            <div class="card">
                <img src="cropImages//watermelon.jpg" alt="">
                <a href="#" class="card-link">Watermelon</a>
            </div>
            <div class="card">
                <img src="cropImages//papayas.jpg" alt="">
                <a href="#" class="card-link">Papaya</a>
            </div>
            <div class="card">
                <img src="cropImages//guava.jpg" alt="">
                <a href="#" class="card-link">Guava</a>
            </div>
 
        </div>
    </div>

    <div class="accordion">
        <div class="accordion-subsection">
            VEGETABLES
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//download.jfif" alt="">
                <a href="tomato.html" class="card-link">Tomato</a>
            </div>
            <div class="card">
                <img src="cropImages//brinjal.jpg" alt="">
                <a href="#" class="card-link">Brinjal</a>
            </div>
            <div class="card">
                <img src="cropImages//cabbage.jpg" alt="">
                <a href="#" class="card-link">Cabbage</a>
            </div>
            <div class="card">
                <img src="cropImages//carrot.jpg" alt="">
                <a href="#" class="card-link">Carrot</a>
            </div>
            <div class="card">
                <img src="cropImages//cauliflower.jpg" alt="">
                <a href="#" class="card-link">Cauliflower</a>
            </div>
            <div class="card">
                <img src="cropImages//green peas.jpeg" alt="">
                <a href="#" class="card-link">Green Peas</a>
            </div>

        </div>
    </div>

    <div class="accordion">
        <div class="accordion-subsection">
            FLOWERS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//marigold.jfif" alt="">
                <a href="#" class="card-link">Marigold</a>
            </div>
            <div class="card">
                <img src="cropImages//rose.jfif" alt="">
                <a href="#" class="card-link">Rose</a>
            </div>
            <div class="card">
                <img src="cropImages//jasmine.jfif" alt="">
                <a href="#" class="card-link">Jasmine</a>
            </div>
            <div class="card">
                <img src="cropImages//gladiolas.jfif" alt="">
                <a href="#" class="card-link">Gladiolas</a>
            </div>
            <div class="card">
                <img src="cropImages//carnation.jfif" alt="">
                <a href="#" class="card-link">Carnation</a>
            </div>

        </div>
    </div>

    <div class="accordion">
        <div class="accordion-subsection">
            MEDICINAL CROPS
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//neem.jfif" alt="">
                
                <a href="#" class="card-link">Neem</a>
            </div>
            <div class="card">
                <img src="cropImages//pudina.jfif" alt="">
                
                <a href="#" class="card-link">Pudina</a>
            </div>
            <div class="card">
                <img src="cropImages//amla.jfif" alt="">
                
                <a href="#" class="card-link">Amla</a>
            </div>
            <div class="card">
                <img src="cropImages//aloe.jfif" alt="">
                
                <a href="#" class="card-link">Aloe Vera</a>
            </div>
            <div class="card">
                <img src="cropImages//tulsi.jfif" alt="">
                
                <a href="#" class="card-link">Tulsi</a>
            </div>

        </div>
    </div>

    <div class="accordion">
        <div class="accordion-subsection">
        SPICES
            <span class="dropdown-symbol">&#9660;</span>
        </div>
        <div class="accordion-subsection-content">
            <div class="card">
                <img src="cropImages//turmeric.jpg" alt="">
                <a href="#" class="card-link">Turmeric</a>
            </div>
            <div class="card">
                <img src="cropImages//fenu.jfif" alt="">
                <a href="#" class="card-link">Fenugreek</a>
            </div>
            <div class="card">
                <img src="cropImages//coriander.jpg" alt="">
                <a href="#" class="card-link">Coriander</a>
            </div>
            <div class="card">
                <img src="cropImages//fennel.jfif" alt="">
                <a href="#" class="card-link">Fennel</a>
            </div>
            <div class="card">
                <img src="cropImages//ginger.jpg" alt="">
                <a href="#" class="card-link">Ginger</a>
            </div>

        </div>
    </div>
</section>

<script>

document.addEventListener("DOMContentLoaded", function() {
        const accordionSections = document.querySelectorAll(".accordion-subsection");

        accordionSections.forEach(subSection => {
            subSection.addEventListener("click", () => {
                const content = subSection.nextElementSibling;

                // Check if the content is currently open
                const isContentOpen = content.style.display === "block";

                // Close all sections
                closeAllSections();

                // Toggle the display of the clicked section
                content.style.display = isContentOpen ? "none" : "block";
            });
        });

        function closeAllSections() {
            const allContent = document.querySelectorAll(".accordion-subsection-content");
            allContent.forEach(content => {
                content.style.display = "none";
            });
        }
    });

</script>

</body>
</html>


</body>
</html>

