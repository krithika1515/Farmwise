
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
            background-image: url(../images/bg10.jpg);
            background-size: 100% 100%;;
            background-repeat: no-repeat;
            background-attachment: fixed;opacity:5px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            max-width: 800px;
        }

        .action-button {
            /* background-color: #4CAF50; */
            background-color: rgba(255, 255, 255, 0.13);
            backdrop-filter: blur(500px); 
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
            height: 80px;  
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
        <div class="action-button" onclick="cropfil()">
            <div class="button-label">Crop Info</div>
            <div class="icon"><i class="material-icons md-36">grass</i></div>
        </div>
        <div class="action-button" onclick="crop()">
            <div class="button-label">Crop Types</div>
            <div class="icon"><i class="material-icons md-36">grass</i></div>
        </div>
        <div class="action-button" onclick="weather()">
            <div class="button-label">Weather Info</div>
            <div class="icon"><i class="material-icons md-36">cloud</i></div>
        </div>
        <div class="action-button" onclick="price()">
            <div class="button-label">Price details</div>
            <div class="icon"><i class="material-icons md-36">currency_rupee</i></div>
        </div>
        <div class="action-button" onclick="addquery()">
            <div class="button-label">Add Query</div>
            <div class="icon"><i class="material-icons md-36">addquestion_answer</i></div>
        </div>
        <div class="action-button" onclick="details()">
            <div class="button-label">My Details</div>
            <div class="icon"><i class="material-icons md-36">person_pin</i></div>
        </div>
    </div>
    </div>
</div>

    <script>

        function cropfil() {
            window.location.href = "crop.php"; 
        }

        function crop() {
            window.location.href = "catalog.php"; 
        }


        function weather() {
            window.location.href = "weather.php"; 
        }

        function price() {
            window.location.href = "price.php"; 
        }

        function addquery() {
            window.location.href = "addquery.php"; 
        }

        function details() {
            window.location.href = "userdetails.php"; 
        }
        
              
        function speechInput() 
{
  // check if browser supports Web Speech API
  if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) 
  {
    const button = document.getElementById('speech-button');
    // create new speech recognition object
    var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

    // set recognition properties
    recognition.lang = 'en-US';
    recognition.continuous = false;
    recognition.interimResults = false;

    // start speech recognition
    button.addEventListener('click', () => {
  recognition.start();
});

    recognition.onstart = () => {
  button.classList.add('active');
};

recognition.onend = () => {
  button.classList.remove('active');
};
    console.log('Listening for speech input...');

    // when speech is recognized
    recognition.onresult = function(event) 
    {
      // get the recognized transcript
      var speechInput = event.results[0][0].transcript.toLowerCase();
      
      
  // Check if the speech input includes any of the given keywords
  if (speechInput.includes('what time is it')) 
  {
    console.log('Detected keyword: what time is it');
    var speech = new SpeechSynthesisUtterance(`The time is ${new Date().toLocaleTimeString()}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what date is it')) 
  {
    console.log('Detected keyword: what date is it');
    var speech = new SpeechSynthesisUtterance(`Today's date is ${new Date().toLocaleDateString()}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what day is it')) 
  {
    console.log('Detected keyword: what day is it');
    var speech = new SpeechSynthesisUtterance(`Today is ${new Date().toLocaleDateString('en-US', { weekday: 'long' })}`);
    window.speechSynthesis.speak(speech);
  }
  else if (speechInput.includes('what is your name')) 
  {
    console.log('Detected keyword: what is your name');
    var speech = new SpeechSynthesisUtterance('My name is Chiti. How can I assist you?');
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what month is it')) 
  {
    console.log('Detected keyword: what month is it');
    var speech = new SpeechSynthesisUtterance(`It is currently ${new Date().toLocaleDateString('en-US', { month: 'long' })}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('tell me a joke')) 
  {
    console.log('Detected keyword: tell me a joke');
    var speech = new SpeechSynthesisUtterance(`What’s the pirate’s favorite letter? The “C.”`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes("crop info"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    cropfil();
  }
  else if (speechInput.includes("crop types"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    crop();
  }
  else if (speechInput.includes("weather info"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    weather();
  }
  else if (speechInput.includes("price details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    price();
  }
  else if (speechInput.includes("add query"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    addquery();
  }
  else if (speechInput.includes("my details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    details();
  }
  else if (speechInput.includes("go back"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    back();
  }
  else
  {
    console.log('No keyword detected : '+ speechInput.toLowerCase());
    var speech = new SpeechSynthesisUtterance('I did not understand what you said. Please try again.');
    window.speechSynthesis.speak(speech);
  }
    };
  }
  else 
  {
    // Speech recognition is not supported, display a message to the user
    console.log('Speech recognition is not supported in this browser.');
  }

}



    </script>
</body>
</html>
