<?php $errors = []; ?>
<?php
//ob_start();


if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $usernamecoock = $_COOKIE['username'];
    $passwordcoock = $_COOKIE['password'];

    echo " <script>
    
        document.getElementById('username').value = $usernamecoock;
        document.getElementById('password').value = $passwordcoock;
        
    </script> ";
}
?>
<?php
$remmber = $pass = $username = "";
$remmbererr = $passerr = $usernameerr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameerr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        // check if e-mail address is well-formed
        if (!preg_match("/^[a-zA-Z-0123456789-_' ]*$/", $username)) {
            $usernameerr = "Only letters,white space,underscoreand and dash are allowed";
        }
    }
    if (empty($_POST["password"])) {
        $passerr = "password is required";
    } else {
        $pass = test_input($_POST["password"]);
    }
    if (empty($_POST["remember"])) {
        $remmbererr = "Remmber me is not checked";
    } else {
        $remmber = test_input($_POST["remember"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<?php
if (empty($usernameerr) && empty($passerr)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "signupdb";
    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (isset($_POST["login"])) {
        $user = $_POST["username"];
        $pas = $_POST["password"];
        $sql = "Select * from User where Username='" . $user . "' And Password='" . $pas . "' limit 1";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) == 1) {
            if (isset($_POST['remember'])) {
                setcookie('username', $user, time() + 7 * 60 * 60);
                setcookie('password', $pas, time() + 7 * 60 * 60);
            }
            session_start();
            $_session['username'] = $user;
            $_session['password'] = $pas;
            array_push($errors, "you have successfully loged in");
            echo "
 <meta HTTP-EQUIV='REFRESH' content='0; url=http://localhost/HospitalForms/Home.php'/>";

            // header('location:https://alamalhospital.com/ar/Home/%d8%b9%d9%86-%d9%85%d8%b3%d8%aa%d8%b4%d9%81%d9%89-%d8%a7%d9%84%d8%a3%d9%85%d9%84');
            
        } else {
            array_push($errors, "You have entered incorect Username or password");
        }
    }
} elseif (!empty($usernameerr) && !empty($passerr)) {
    array_push($errors, "All fields are required");
} else {
    array_push($errors, "field required");
}
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name = "discrption" content="Welcome To Our BFCAI Hospital">
        <title>Log-In</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.css">
        <style>
            .msg {
                margin: 5px auto;
                border-radius: 5px;
                border: 1px solid red;
                background: pink;
                text-align: left;
                color: brown;
                padding: 10px;
            }
            h4
            {
                background-color:white;
                padding: 50 60;
                width: 91%;
            }
            h1
            {

                padding: 23px;
                top: 79px;
                background-color:violet;
                width: 95.5%;
                position: absolute;
            }
            h2
            {
                border: 2px solid black;
            }



            a:link, a:visited {
                font-size: medium;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                color: black;
                padding: 10px 30px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }
            a:hover, a:active {
                background-color: red;
            }

            body
            {
                height: 1300px;
                background-image: url("sign in.jpg");
                background-size: cover;
                background-attachment: fixed;
            }
            .logo
            {

                padding: 0;
                top: 10px;
                right: 10px;
                position: absolute;
            }
            .main
            {
                top: 90px;
                right: 10px;
                padding: 15px;
                position:absolute;
            }
            .medical
            {
                top: 90px;
                right: 220px;
                padding: 15px;
                position: absolute;
            }

            .reserve
            {
                top: 90px;
                right: 410px;
                padding: 15px;
                position: absolute;
            }

            .doc
            {
                top: 90px;
                right: 620px;
                padding: 15px;
                position: absolute;
            }

            .join
            {
                top: 90px;
                right: 830px;
                padding: 15px;
                position: absolute;  
            }

            .search
            {
                top: 30px;
                right: 1230px;
                padding: 15px;
                position: absolute; 
            }
            .contact 
            {
                top: 90px;
                right: 1210px;
                padding: 15px;
                position: absolute; 
            }
            .login 
            {
                top: 90px;
                right: 1040px;
                padding: 15px;
                position: absolute; 
            }

            fieldset
            {
                width: 500px;
                background-color: white;
                padding: 120px;
                height: 850px;
                margin: 100px auto;
            }

            label
            {
                margin-bottom: 35px;
                display: block;
                color: red;
                font-size: 20px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

            }

            input[type="text"],input[type="password"]
            {
                padding: 15px;
                margin-bottom: 20px;
                font-size: 20px;
                width: 700px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

            }
            .button3
            {
                color: red;
                font-size: 15px;
                background-color: white;
                border: none;
                cursor: pointer;
                padding-left: 400px;
                text-decoration: underline red;
            }

            ul
            {
                list-style: none;
            }
            ul li
            {
                display: inline-block;
                font-size: 15px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            .button1
            {
                font-size: 24px;
                background-color:beige;
                color: tomato;
                border-radius: 28px ;
                cursor: pointer;
                padding: 20px;
                width: 500px;
                margin-top: 50px;
                margin-bottom: 80px;
                margin-left: 100px;
            }
            .button1:hover
            {
                color: beige;
                background-color: tomato;

            }
            .button2
            {
                font-size: 24px;
                background-color:white;
                color: blue;
                border-radius: 28px ;
                cursor: pointer;
                padding: 20px;
                width: 500px;
                margin-bottom: 80px;
                margin-left: 100px;
            }
            .button2:hover
            {
                color: white;
                background-color: blue;

            }
            .signupbtn:hover{
                color: white;
                background-color: blue;

            }
            h5
            {
                color: black;
                font-size: 28px;
                margin-top: 0px;
                margin-bottom: 100px;
                margin-left: 300px;
                font-family:Arial, Helvetica, sans-serif;
            }
            .error {color: #FF0000;}
            .msg {

                margin: 5px auto;
                border-radius: 5px;
                border: 1px solid red;
                background: pink;
                text-align: left;
                color: brown;
                padding: 10px;
            }
        </style>
    </head>
    <body>
       
        <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" action="Home.php" >

            <fieldset> 
                <h5>Log-in</h5>
                <?php include('messages.php'); ?>
                <label>Username</label>
                <input type="text" id="username" name="username" placeholder="Entre your Username or ID" value="<?php //echo $username;      ?>" value="<?php /* if (isset($_COOKIE["$usernamecoockie"])) {
                  $username = $_COOKIE["username"];
                  } */
                ?>">
                <span class="error">* <?php echo $usernameerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <label>Password</label>
                <input type="password"  id="password"  name="password" placeholder="Entre Your Password" value="<?php //echo $pass;       ?>" value="<?php
                       /* if (isset($_COOKIE["passwordcoockie"])) {
                         $pass = $_COOKIE["password"];
                         } */
                ?>""><span class="error">* <?php echo $passerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <ul>
                    <li>
                        <input type="checkbox"id="remember" name="remember" value="1" > Remember Me<br>
                    </li>
                    <li>
                        <button class="button3" ><a href="http://localhost/HospitalForms/Enteremail.php">Forgot Password?</a></button>
                    </li>
                </ul>
                <input  class="button2" type="submit" name="login" value="Log in">
                <label style=" font-size: 20px;margin-left: 335px;margin-bottom: 60px;">Or

                </label>

                <button class="button2"><a class="signupbtn" href="http://localhost/HospitalForms/Signup.php">Sign-up</a></button>


            </fieldset>
        </form>

      
        <?php
        ob_end_flush();
        ?> 


        </form>
    </body>
</html>