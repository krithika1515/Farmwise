<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="icon" href="images/flogo.jpg" type="image/icon type">
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title></title>
    <link rel="stylesheet" href="css\general.css">
    <style>
        body {
            width: 100vw;
            background-image: url(images/bg.jpg);
            background-size: 100% 100%;;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            margin: 0;
            font-family: helvetica;
        }

        .wrapper {
            width: 100vw;
            margin: 0 auto;
            height: 400px;
            background-color: rgba(0, 0, 0, 0); 
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: all 0.3s ease;
        }

        @media screen and (max-width: 767px) {
            .wrapper {
                height: 700px;
            }
        }

        /* Rest of your CSS styles remain the same */   

    </style>
</head>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- about -->

<?php include 'header.php';?>

<!-- end about -->
<div class="wrapper">

    <div class="content">
        <!-- card -->

        <div class="card" onclick="crop()">

            <div class="icon"><i class="material-icons md-36">grass</i></div>
            <p class="title">CROPS &<br> DETAILS</p>
            <p class="text">Know crops<br> details.</p>

        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card" onclick="weather()">

            <div class="icon"><i class="material-icons md-36">cloud</i></div>
            <p class="title">WEATHER<br> UPDATE</p>
            <p class="text">Check the<br> weather.</p>

        </div>
        <!-- end card -->


        <!-- card -->
        <div class="card" onclick="price()">

            <div class="icon"><i class="material-icons md-36">currency_rupee</i></div>
            <p class="title">PRICE</p>
            <p class="text">know your price.</p>

        </div>
        <!-- end card -->


        <!-- card -->
        <div class="card" onclick="expert()">

            <div class="icon"><i class="material-icons md-36">question_answer</i></div>
            <p class="title">EXPERT<br> QUERIES</p>
            <p class="text">Expert</p>

        </div>

        <!-- end card -->

    </div>

</div>

<script>

    function crop()
    {
      window.location.href ="crop.php";
    }
    function weather()
    {
      window.location.href ="weather.php";
    }
    function expert()
    {
      window.location.href ="ans.php";
    }
    function price()
    {
      window.location.href ="price.php";
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
  else if (speechInput.includes("crop details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    crop();
  }
  else if (speechInput.includes("weather details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    weather();
  }
  else if (speechInput.includes("price details"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    price();
  }
  else if (speechInput.includes("expert"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    expert();
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
