<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="icon" href="images/flogo.jpg" type="image/icon type">
  <meta charset="utf-8">
  <title>Signin</title>
  <link rel="stylesheet" href="css\signin.css">
  <script type="text/javascript">
    function back(){
      window.location.href ="index.php";
    }
  </script>
  <style>
    
.txt_field select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
}


.txt_field select::-ms-expand {
  display: none;
}

.txt_field select option {
  font-size: 16px;
}

  </style>
</head>
<body>

<div class="bg">

<?php include('GT.php'); ?>

  <div class="center">
    <h1>Login</h1>
    <?php
    $errmsg = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype']; // Get the selected user type

        require_once('dbConnect.php');

        // Determine the database table based on the selected user type
        $table = '';
        switch ($usertype) {
            case 'admin':
                $table = 'admin';
                break;
            case 'user':
                $table = 'users';
                break;
            case 'expert':
                $table = 'expert';
                break;
            default:
                $errmsg = "Invalid user type selected";
                break;
        }

        if (!empty($table)) {
            $sql = "SELECT * FROM $table WHERE name = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_fetch_array($result);

            if (isset($check)) {
                $_SESSION['name'] = $username;
                // Redirect to the appropriate dashboard based on the user type
                if ($usertype == 'admin') {
                    header('Location: adminside/admindashboard.php');
                } elseif ($usertype == 'user') {
                    header('Location: userside/userdashboard.php');
                } elseif ($usertype == 'expert') {
                    header('Location: expertside/expert_dashboard.php');
                }
            } else {
                $errmsg = "*Username or password is wrong";
            }
        }
    }
    ?>
    <form method="post" action="signin.php">
    <div class="txt_field">
      <h3>User-type</h3>
        <label></label>
        <select name="usertype" required >
        <option value="" disabled selected>Select a Type</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <option value="expert">Expert</option>
        </select>
      </div>
      <div class="txt_field">
        <input name="username" type="text" required>
        <span></span>
        <label>User Name</label>
      </div>
      <div class="txt_field">
        <input name="password" type="password" required>
        <span></span>
        <label>Password</label>
      </div>
      
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Go Back" onclick="back()" style="margin-bottom:5px;">
      <input type="submit" value="Login">
      <div class="signup_link">
        Not a member? <a href="signup.php">Signup</a>
      </div>
      <span style="color:red "><?php echo "$errmsg"; ?></span>
    </form>
  </div>
</div>
</body>
</html>