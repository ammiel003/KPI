<!-- <?php
// require_once "db/db_login.php";
// if(isset($_SESSION['id'])!="") {
// header("Location: index.php");
// }
// if (isset($_POST['signup'])) {
// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);
// $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
// if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
// $name_error = "Name must contain only alphabets and space";
// }
// if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
// $email_error = "Please Enter Valid Email ID";
// }
// if(strlen($password) < 6) {
// $password_error = "Password must be minimum of 6 characters";
// }       
// if(strlen($mobile) < 10) {
// $mobile_error = "Mobile number must be minimum of 10 characters";
// }
// if($password != $cpassword) {
// $cpassword_error = "Password and Confirm Password doesn't match";
// }
// if (!$error) {
// if(mysqli_query($conn, "INSERT INTO users(name, email, mobile_number ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
// header("location: login.php");
// exit();
// } else {
// echo "Error: " . $sql . "" . mysqli_error($conn);
// }
// }
// mysqli_close($conn);
}
?>



<html>
<head>
<style>
html {
    height: 100%;
    width: 100%;
}

body {
    background: url("file:///C:/Users/30/Desktop/ac68e9ede5b84d83bf172fa518f03461.gif?dpr=1&auto=compress,format&fit=crop&w=1800&h") no-repeat center center fixed;
    background-size: cover;
    font-family: 'Droid Serif', serif;
}

#container {
    background: rgba(3, 3, 55, 0.5);
    width: 18.75rem;
    height: 23rem;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

header {
    text-align: center;
    vertical-align: middle;
    line-height: 3rem;
    height: 3rem;
    background: rgba(3, 3, 55, 0.7);
    font-size: 1.4rem;
    color: #d3d3d3;
}

fieldset {
    border: 0;
    text-align: center;
}

input[type="submit"] {
    background: rgba(235, 30, 54, 1);
    border: 0;
    display: block;
    width: 70%;
    margin: 0 auto;
    color: white;
    padding: 0.7rem;
    cursor: pointer;
}

input {
    background: transparent;
    border: 0;
    border-left: 4px solid;
    border-color: #FF0000;
    padding: 10px;
    color: white;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    outline: 0;
    background: rgba(235, 30, 54, 0.3);
    border-radius: 1.2rem;
    border-color: transparent;
}

::placeholder {
    color: #d3d3d3;
}

/*Media queries */

@media all and (min-width: 481px) and (max-width: 568px) {
    #container {
        margin-top: 10%;
        margin-bottom: 10%;
    }
}
    @media all and (min-width: 569px) and (max-width: 768px) {
        #container {
            margin-top: 5%;
            margin-bottom: 5%;
        }
    }
    </style>


<body>
<div id="container">
<header>Register</header>
<form method ="POST">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
            <fieldset>
               <br/>
               <input type="text" name="username" id="username" placeholder="Full Name" required autofocus><?php if (isset($name_error)) echo $name_error; ?>
               <br/><br/>
               <input type="email" name="email" id="email" placeholder="E-mail" required><?php if (isset($password_error)) echo $password_error; ?>
               <br/><br/>
               <input type="password" name="password" id="password" placeholder="Password" required><?php if (isset($mobile_error)) echo $mobile_error; ?>
               <br/><br/>
               <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required><?php if (isset($cpassword_error)) echo $cpassword_error; ?>
               <br/> <br/> <br/>
               <label for="submit"></label>
               <input type="submit" name="submit" id="submit" value="REGISTER">
            </fieldset>
         </form>
      </div>
   </body>


</head>
</html> -->