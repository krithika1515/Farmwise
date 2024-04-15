<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="images/flogo.jpg" type="image/icon type">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script type="text/javascript">

       function back(){
         window.location.href ="index.php";
       }
       function register(){
         window.location.href ="fdashboard.php";
       }

       $(function() {
            // List of Indian states and Union Territories
            var statesAndUTs = [
                "Andhra Pradesh",
                "Arunachal Pradesh",
                "Assam",
                "Bihar",
                "Chhattisgarh",
                "Goa",
                "Gujarat",
                "Haryana",
                "Himachal Pradesh",
                "Jharkhand",
                "Karnataka",
                "Kerala",
                "Madhya Pradesh",
                "Maharashtra",
                "Manipur",
                "Meghalaya",
                "Mizoram",
                "Nagaland",
                "Odisha",
                "Punjab",
                "Rajasthan",
                "Sikkim",
                "Tamil Nadu",
                "Telangana",
                "Tripura",
                "Uttar Pradesh",
                "Uttarakhand",
                "West Bengal",
                "Andaman and Nicobar Islands",
                "Chandigarh",
                "Dadra and Nagar Haveli and Daman and Diu",
                "Lakshadweep",
                "Delhi",
                "Puducherry",
                "Ladakh",
                "Jammu and Kashmir"
            ];

            // Create an autocomplete input field
            $("#state").autocomplete({
                source: statesAndUTs,
                minLength: 2 // Minimum characters before showing suggestions
            });
        });


        $(function() {
        var Districts = {
  "Andaman and Nicobar Islands": [
    "Nicobar", "North and Middle Andaman", "South Andaman"
  ],
  "Andhra Pradesh": [
    "Anantapur", "Chittoor", "East Godavari", "Guntur", "Krishna",
    "Kurnool", "Prakasam", "Srikakulam", "Visakhapatnam", "Vizianagaram",
    "West Godavari", "YSR Kadapa", "Anakapalle", "Bapatla", "Nandyal",
    "NTR", "Palnadu", "Tirupati", "Sri Sathya Sai", "Konaseema",
    "Parvathipuram Manyam", "Krishna", "Srikakulam", "Visakhapatnam",
    "Vizianagaram", "West Godavari"
  ],
  "Arunachal Pradesh": [
    "Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang",
    "Kamle", "Kra Daadi", "Kurung Kumey", "Lepa Rada", "Lohit",
    "Longding", "Lower Dibang Valley", "Lower Siang", "Lower Subansiri", "Namsai",
    "Pakke Kessang", "Papum Pare", "Shi Yomi", "Siang", "Tawang",
    "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang",
    "Capital Complex Itanagar"
  ],
  "Assam": [
    "Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar",
    "Charaideo", "Chirang", "Darrang", "Dhemaji", "Dhubri",
    "Dibrugarh", "Dima Hasao (North Cachar Hills)", "Goalpara", "Golaghat", "Hailakandi",
    "Hojai", "Jorhat", "Kamrup", "Kamrup Metropolitan", "Karbi Anglong",
    "Karimaganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon",
    "Nagaon", "Nalbari", "Sivasagar", "Sonitpur", "South Salamara Mankachar",
    "Tinsukia", "Udalguri", "West Karbi Anglong", "Bajali", "Tamulpur"
  ],
  "Bihar": [
    "Araria", "Arwal", "Aurangabad", "Banka", "Begusarai",
    "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga", "East Champaran (Motihari",
    "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur (Bhabua)",
    "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura",
    "Madhubani", "Munger (Monghyr)", "Muzaffarpur", "Nalanda", "Nawada",
    "Patna", "Purnia (Purnea)", "Rohtas", "Saharsa", "Samastipur",
    "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan",
    "Supaul", "Vaishali", "West Champaran"
  ],
  "Chandigarh": ["Chandigarh"],
  "Chhattisgarh": [
    "Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara",
    "Bijapur", "Bilaspur", "Dantewada (South Bastar)", "Dhamtari", "Durg",
    "Gariyaband", "Janjgir-Champa", "Jashpur", "Kabirdham (Kawardha)", "Kanker (North Bastar)",
    "Kondagaon", "Korba", "Korea (Koriya)", "Mahasamund", "Mungeli",
    "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma",
    "Surajpur", "Surguja", "Gaurela-Pendra-Marwahi", "Khairagarh-Chhuikhadan-Gandai", "Manendragarh-Chirmiri-Bharatpur",
    "Mohla-Manpur-Chowki", "Sarangarh-Bilaigarh", "Shakti"
  ],
  "Dadra and Nagar Haveli and Daman And Diu": [
    "Dadra And Nagar Haveli", "Daman", "Diu"
  ],
  "Delhi": [
    "Central Delhi", "East Delhi", "New Delhi", "North Delhi",
    "North East Delhi", "North West Delhi", "Shahdara", "South Delhi",
    "South East Delhi", "South West Delhi", "West Delhi"
  ],
  "Goa": ["North Goa", "South Goa"],
  "Gujarat": [
    "Ahmedabad", "Amreli", "Anand", "Arvalli", "Banaskantha (Palanpur)",
    "Bharuch", "Bhavnagar", "Botad", "Chhota Udepur", "Dahod",
    "Dangs (Ahwa)", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar",
    "Junagadh", "Kachchh", "Kheda (Nadiad)", "Mahisagar", "Mehsana",
    "Morbi", "Narmada (Rajpipla)", "Navsari", "Panchmahal (Godhra)", "Patan",
    "Porbandar", "Rajkot", "Sabarkantha (Himmatnagar)", "Surat", "Surendranagar",
    "Tapi (Vyara)", "Vadodara", "Valsad"
  ],
  "Haryana": [
    "Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Gurgaon",
    "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal",
    "Kurukshetra", "Mahendragarh", "Nuh", "Palwal", "Panchkula",
    "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat",
    "Yamunanagar", "Fatehabad"
  ],
  "Himachal Pradesh": [
    "Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur",
    "Kullu", "Lahaul & Spiti", "Mandi", "Shimla", "Sirmaur",
    "Solan", "Una"
  ],
  "Jammu and Kashmir": [
    "Anantnag", "Bandipore", "Baramulla", "Budgam", "Doda",
    "Ganderbal", "Jammu", "Kathua", "Kishtwar", "Kulgam",
    "Kupwara", "Poonch", "Pulwama", "Rajouri", "Ramban",
    "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"
  ],
  "Jharkhand": [
    "Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka",
    "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla",
    "Hazaribag", "Jamtara", "Khunti", "Koderma", "Latehar",
    "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi",
    "Sahibganj", "Seraikela-Kharsawan", "Simdega", "West Singhbhum"
  ],
  "Karnataka": [
    "Bagalkot", "Ballari (Bellary)", "Belagavi (Begaum)", "Bengaluru (Bangalore) Rural", "Bengaluru (Bangalore) Urban",
    "Bidar", "Chamarajanagar", "Chikballapur", "Chikkamagaluru (Chikmagalur)", "Dakshina Kannada", "Davangere",
    "Dharwad", "Gadag", "Hassan", "Haveri", "Kalaburagi (Gulbaraga)", "Kodagu", "Kolar",
    "Koppal", "Mandya", "Mysuru (Mysore)", "Raichur", "Ramanagara", "Shivamogga (Shimoga)", "Tumakuru (Tumkur)",
    "Udupi", "Uttara Kannada (Karwar)", "Vijayapura (Bijapur)", "Yadgir", "Chitradurga", "Vijayanagara"
  ],
  "Kerala": [
    "Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod",
    "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad",
    "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"
  ],
  "Ladakh": ["Kargil", "Leh"],
  "Lakshadweep": ["Lakshadweep"],
  "Madhya Pradesh": [
    "Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat",
    "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur",
    "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas",
    "Dhar", "Dindori", "Guna", "Gwalior", "Harda",
    "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni",
    "Khandwa", "Khargone", "Mandla", "Mandsaur", "Morena",
    "Narsinghpur", "Neemuch", "Panna", "Raisen", "Rajgarh",
    "Ratlam", "Rewa", "Sagar", "Satna", "Sehore",
    "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri",
    "Sidhi", "Singrauli", "Tikamgarh", "Ujjain", "Umaria",
    "Vidisha", "Niwari"
  ],
  "Maharashtra": [
    "Ahmednagar", "Akola", "Amravati", "Beed", "Bhandara", "Buldhana",
    "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon",
    "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur",
    "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani",
    "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg",
    "Solapur", "Thane", "Wardha", "Washim", "Yavatmal", "Aurangabad"
  ],
  "Manipur": [
    "Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West",
    "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl",
    "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
  ],
  "Meghalaya": [
    "East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills",
    "Ri Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills",
    "West Garo Hills", "West Jaintia Hills", "West Khasi Hills", "Eastern West Khasi Hills"
  ],
  "Mizoram": [
    "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Hnahthial",
    "Lunglei", "Mamit", "Saiha", "Serchhip", "Khawzawl", "Saitual"
  ],
  "Nagaland": [
    "Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek",
    "Tuensang", "Wokha", "Zunheboto", "Tseminyü", "Chümoukedima", "Niuland", "Noklak", "Shamator"
  ],
  "Odisha": [
    "Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Deogarh",
    "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghapur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal",
    "Kendrapara", "Kendujhar (Keonjhar)", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur",
    "Nayagarh", "Nuapada", "Puri", "Rayagada", "Sambalpur", "Subarnapur", "Sundargarh"
  ],
  "Puducherry": [
    "Karaikal", "Yanam", "Mahe", "Pondicherry"
  ],
  "Punjab": [
    "Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Ferozepur", "Gurdaspur",
    "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Muktsar", "Nawanshahr (Shahid Bhagat Singh Nagar)",
    "Parhankot", "Patiala", "Rupnagar", "Sahibzada Ajit Singh Nagar (Mohali)", "Sangrur", "Tarn Taran", "Malerkotla"
  ],
  "Rajasthan": [
    "Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner",
    "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Hanumangarh", "Jaipur",
    "Jaisalmer", "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur",
    "Pali", "Pratapgarh", "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Sri Ganganagar", "Tonk", "Udaipur"
  ],
  "Sikkim": ["Gangtok", "Gyalshing", "Pakyong", "Namchi", "Mangan", "Soreng"],
  "Tamil Nadu": [
    "Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram",
    "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur",
    "Pudkkottai", "Ramanathapuram", "Salem", "Sivanganga", "Thanjavur", "Theni", "Thoothukundi (Tuticorin)", "Tiruchirappalli",
    "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore", "Viluppuram", "Virdhunagar",
    "Tenkasi", "Tirupattur", "Ranipet", "Chengalpet", "Kallakurichi", "Mayiladuthurai"
  ],
  "Telangana": [
    "Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagitial", "Jangaon", "Jayashankar Bhoopalpally", "Jogulamba Gadwal", "Kamareddy",
    "Karimnagar", "Khammam", "Komaram Bheem Asifabad", "Mahabubabad", "Mahabubnagar", "Mancherial", "Medak", "Medchal-Malkajgiri",
    "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Rangareddy", "Sangareddy", "Siddipet",
    "Suryapet", "Vikarabad", "Wanaparthy", "Warangal (Rural)", "Hanamkonda (erstwhile Warangal (Urban))", "Yadadri Bhuvanagiri", "Mulugu", "Narayanpet"
  ],
  "Tripura": [
    "Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti", "West Tripura"
  ],
  "Uttar Pradesh": [
    "Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi (Chatrapati Sahuji Mahraj Nagar)", "Amroha (J.P. Nagar)", "Auraiya", "Azamgarh",
    "Badaun", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly",
    "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria",
    "Etah", "Etawah", "Faizabad", "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad",
    "Ghazipur", "Gonda", "Gorakhpur", "Hamirpur", "Hapur (Panchsheel Nagar)", "Hardoi", "Hathras", "Jalaun",
    "Jaunpur", "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kushinagar (Padrauna)",
    "Lakhimpur - Kheri", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau",
    "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit", "Pratapgarh", "Prayagraj", "Raebareli",
    "Rampur", "Saharanpur", "Sambhal (Bhim Nagar)", "Sant Kabir Nagar", "Shahjahanpur", "Shamali (Prabuddh Nagar)", "Shravasti",
    "Siddharth Nagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao", "Varanasi", "Amethi", "Chitrakoot Dham (Karwi)"
  ],
  "Uttarakhand": [
    "Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital", "Pauri Garhwal",
    "Pithoragarh", "Rudraprayag", "Tehri Garhwal", "Udham Singh Nagar", "Uttarkashi"
  ],
  "West Bengal": [
    "Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur (South Dinajpur)", "Darjeeling", "Hooghly", "Howrah",
    "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda", "Murshidabad", "Nadia", "North 24 Parganas",
    "Paschim Bardhaman (West Bardhaman)", "Paschim Medinipur (West Medinipur)", "Purba Bardhaman (East Bardhaman)", "Purba Medinipur (East Medinipur)", "Purulia", "South 24 Parganas", "Uttar Dinajpur (North Dinajpur)"
  ]
};


var districts = [].concat.apply([], Object.values(Districts));

 // Create an autocomplete input field
 $("#district").autocomplete({
                source: districts,
                minLength: 3 // Minimum characters before showing suggestions
            });
          });


     </script>
     <?php
         $errmsg="";
         $name="";
         $state="";
         $district="";
         $phoneno="";
         $utype="";

     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
     $conn= mysqli_connect('localhost','root','','farm') or die("Connection failed:" .mysqli_connect_error());
     if(isset($_POST['name']) && isset($_POST['state']) && isset($_POST['district']) && isset($_POST['phoneno']) && isset($_POST['password']) && isset($_POST['confirmpassword'])){

     $name=$_POST['name'];
     $state=$_POST['state'];
     $district=$_POST['district'];
     $phoneno=$_POST['phoneno'];
     $password=$_POST['password'];
     $confirmpassword=$_POST['confirmpassword'];
     $passwordregex="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/";


   $nameregex="/^[a-z A-Z]*$/";

   if(!preg_match($nameregex, $name)){
       $errmsg="*Password should be in correct format";
   }
     else if($password!=$confirmpassword){
     $errmsg="*Password and confirm password are not same";
     }
     elseif (!preg_match($passwordregex, $password)) {
         $errmsg="*Password must contain Minimum eight and maximum 16 characters, at least one uppercase letter, one lowercase letter, one number and one special character";
     }
     else{
   $sql="INSERT INTO `users` (`name`,`state`,`district`,`phoneno`,`password`,`utype`) VALUES ('$name','$state','$district','$phoneno','$password','f')";
   $query=mysqli_query($conn,$sql);
   if($query){
   $errmsg= '*Entry successful';
   $_SESSION['state'] = $state;
   if( $utype=="f")
   {
      header('Location: fdashboard.php');
   }
   else if($utype=="e")
   {
       header('Location: edashboard.php');
   }
   }
   else{
   $errmsg= "*Error occoured";
   }

    }
     }
     else{
       $errmsg="*All fields are required";
      }
     }



      ?>
   </head>
  <link rel="stylesheet" href="css\signup.css">

<body class="bg">

  <div class="container">

  <?php include('GT.php'); ?>

    <div class="title">Registration</div>
    <div class="content">
      <form action="signup.php"   method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input name="name" id="name" type="text" placeholder="Enter your name" value="<?php echo "$name"; ?>" required pattern="[a-z A-Z]*">
          </div>
          <div class="input-box">
            <span class="details">State</span>
            <input type="autocomplete" placeholder="Enter your state" name="state" id="state" value="<?php echo "$state"; ?>"  required>
          </div>
          <div class="input-box">
            <span class="details">District</span>
            <input type="autocomplete" placeholder="Enter your district" name="district" id="district" value="<?php echo "$district"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phoneno" value="<?php echo "$phoneno"; ?>" pattern="[0-9]{10}" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="confirmpassword" required>
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Go Back" onclick="back()">
          <input type="submit" value="Register" name="submit" style="margin-left:85px;">
        </div>
        <span style="color:red"><?php echo $errmsg; ?></span>
      </form>
    </div>
  </div>

</body>
</html>
