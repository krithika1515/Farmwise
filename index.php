<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>FARMWISE</title>
    <link rel="icon" href="images/flogo.jpg" type="image/icon type">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
  </head>

  <body onscroll="changecolor()">
    <script type="text/javascript">
    function rtohome()
    {
      window.location.href ="index.php";
    }
    function change(){
      window.location.href ="general.php";
    }
    function login(){
      window.location.href ="signin.php";
    }
    function register(){
      window.location.href ="signup.php";
    }
    window.onscroll=function()
    {
      var top=window.scrollY;
      if(top>=50)
      {
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor2").style.color = "black";
      }
      else
      {
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor2").style.color = "white";
      }
    }
    </script>


<div class="Nav" id="Nav1">
<img src="images\flogo.jpg" alt="" class="NavLogo" id="img" onclick="rtohome()">

  <div class="NavbarContainer">

    <ul class="NavMenu ml-auto"> 
      <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="signin.php">Sign in</a></li>
    </ul>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="register()">Signup</button>
    </div>

    <!-- Include the common header -->
   <header>
        <!-- Use the server-side or client-side method to include header.html here -->
        <!-- For example, if you're using PHP, you can include it like this: -->
        <?php include('GT.php'); ?>
        
    </header>

    <div class="NavBtn">
    <?php include ('microphone.php'); ?>
  </div>

  </div>

</div>

</div>

<!-- Hero section -->
<div class="HeroContainer">
  <div class="HeroBg">
    <video muted autoplay="autoplay" loop class="VideoBg">
    <source src="videos\timelapse.MOV" type="video/mp4">
</video>
  </div>
<div class="HeroContent">
  <h1 class="HeroH1">CODE </h1>
  <div class="HeroBtnWrapper">
<button type="button" name="button" class="NavBtnLink"  onclick="change()">Get Started</button>
  </div>
</div>

</div>

<!-- infosection1 -->

<div class="InfoContainer" id="about">
<div class="InfoWrapper">

<div class="InfoRow">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">Cultivating Excellence</p>
<h1 class="Heading">Optimizing Farming Solutions for Success</h1>
<p class="Subtitle">Guiding Farmers Towards Prosperity</p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink" onclick="change()">Get Started</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/06.jpg" alt="">
</div>
</div>
</div>
</div>

</div>
<!-- infosection2 -->

<div class="InfoContainer">
<div class="InfoWrapper">
<div class="InfoRow" style="grid-template-areas:'col1 col2' ;">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">Harvesting Savings</p>
<h1 class="Heading">Farming Solutions that Won't Break the Bank</h1>
<p class="Subtitle">Empowering Farmers to Thrive</p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink" onclick="change()">Get Started</button>
</div>
</div>
</div>
<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/05.jpg" alt="">
</div>
</div>


</div>
</div>

</div>
<!-- footer -->
<div class="FooterContainer" id="contact">
<div class="FooterWrap">
  <div class="FooterLinksContainer">
    <div class="FooterLinksWrapper">
        <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle">About Us</h1>
            <a href="aboutme.php" class="FooterLink">Developers</a>
            <a href="#about" class="FooterLink">Services</a>
        </div>
    </div>
  </div>
  <div class="SocialMedia">
    <div class="SocialMediaWrap">
      <a href="#" class="SocialLogo">CODE CRAFTERS</a>
      <p class="WebsiteRights"> CODE CRAFTERS © 2023 </p>
    </div>
  </div>

</div>
</div>

</body>
</html>



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
  else if (speechInput.includes('tell me a joke')) 
  {
    console.log('Detected keyword: tell me a joke');
    var speech = new SpeechSynthesisUtterance(`What’s the pirate’s favorite letter? The “C.”`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('what month is it')) 
  {
    console.log('Detected keyword: what month is it');
    var speech = new SpeechSynthesisUtterance(`It is currently ${new Date().toLocaleDateString('en-US', { month: 'long' })}`);
    window.speechSynthesis.speak(speech);
  } 
  else if (speechInput.includes('sign in')) 
  {
    console.log('Detected keyword: sign in ');
    login();
  } 
  else if (speechInput.includes('sign up')) 
  {
    console.log('Detected keyword: sign up ');
    register();
  } 
  else if (speechInput.includes('get started')) 
  {
    console.log('Detected keyword: get started ');
    window.location.href = "general.php";
  } 
  else if (speechInput.includes('developers')) 
  {
    console.log('Detected keyword: developers ');
    window.location.href = "aboutme.php";
  }
  else if (speechInput.includes('services')) 
  {
    console.log('Detected keyword: services ');
    window.location.href = "#about";
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