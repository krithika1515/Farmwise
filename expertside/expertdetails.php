
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../images/flogo.jpg" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background-image:url("bg3.jpg");
  background-size: 100% 100%;;
            background-repeat: no-repeat;
            background-attachment: fixed; 
}

.card {
  margin: 0 auto;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.avatar {
  border-radius: 5px 5px 0 0;
  width: 100%;
  height: 400px;
}

.container {
  padding: 2px 16px;
text-align: center;
}
.room{
  margin-left: 45%;
}
hr{
  /* border: 0;
  height: 3px;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(9, 84, 132), rgba(0, 0, 0, 0)); */
}
</style>
</head>
<body>
  <?php
  session_start(); // Start the session

  include('header1.php');

  $name = $_SESSION['name'];
  require_once('dbConnect.php');
  $sql = "SELECT name, mailid, phone, specialist FROM expert WHERE name ='$name';";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);
  $name = $row['name'];
  $email = $row['mailid'];
  $phoneno = $row['phone'];
  $specialist = $row['specialist'];
  
   ?>

<div class="room">
  <br><br>
  <h2>My Details</h2>
  <br>
</div>
<div class="card">

  <br>
  <br>
  <div class="container">
    
    <h4><b><?php echo $name; ?></b></h4>

    <br>
    <p><b><?php echo $email; ?></b></p>

    <br>
    <p><b><?php echo $phoneno; ?></b></p>

    <br>
    <p><b><?php echo $specialist; ?></b></p>

    <br>


  </div>
</div>


<script type=text/javascript>


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
  else if (speechInput.includes("back"))
  {
    console.log('Detected keyword : '+ speechInput.toLowerCase());
    rtohome();
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
