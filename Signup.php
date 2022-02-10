<?php $errors = []; ?>
<Doc type html>
    <head>
        <meta charset="utf-8">
        <meta name = "discrption" content="Welcome To Our BFCAI Hospital">
        <title>Sign-up</title>
        <link rel="stylesheet" href="style.css">
        <style>

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
                height: 1680px;
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
                border: none;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

            }
            .radio
            {
                background-color: white;
                color: teal;
                font-size: 40px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                margin-left: 80px;
                display: inline-block;
                position: absolute;
                left: 220px;

            }
            .button3
            {
                color: red;
                font-size: 20px;
                background-color: white;
                border: none;
                cursor: pointer;
                font-weight: bold;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
                position: relative;
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
                margin-bottom: 40px;
                margin-left: 100px;
            }
            .button2:hover
            {
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
            span
            {
                color: maroon;
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
        <?php
        $Acept = $email = $phone = $gender = $Add = $id = $lastname = $firstname = $confpass = $pass = $username = "";
        $Acepterr = $emailerr = $phoneerr = $gendererr = $Adderr = $iderr = $lastnameerr = $firstnameerr = $confpasserr = $passerr = $usernameerr = "";

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
            if (empty($_POST["confpassword"])) {
                $confpasserr = "password is required";
            } else {
                $confpass = test_input($_POST["confpassword"]);
                if ($_POST["confpassword"] != $_POST["password"]) {
                    $confpasserr = "confirm password is wrong";
                }
            }
            if (empty($_POST["First_name"])) {
                $firstnameerr = "First name is required";
            } else {
                $firstname = test_input($_POST["First_name"]);
                // check if e-mail address is well-formed
                if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                    $firstnameerr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["Last_name"])) {
                $lastnameerr = "First name is required";
            } else {
                $lastname = test_input($_POST["Last_name"]);
                // check if e-mail address is well-formed
                if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
                    $lastnameerr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["ID"])) {
                $iderr = "Id is required";
            } else {
                $id = test_input($_POST["ID"]);
            }
            if (empty($_POST["Address"])) {
                $Adderr = "Addres is required";
            } else {
                $Add = test_input($_POST["Address"]);
                if (!preg_match("/^[a-z-A-Z' ]*$/", $Add)) {
                    $Adderr = "letters and '-' are allowed";
                }
            }
            if (empty($_POST["gender"])) {
                $gendererr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
            if (empty($_POST["phone_num"])) {
                $phoneerr = "Phone number is required";
            } else {
                $phone = test_input($_POST["phone_num"]);
                if (!preg_match("/^[0123456789' ]*$/", $phone)) {
                    $phoneerr = "Only Numbers allowed";
                }
            }
            if (empty($_POST["E-mail"])) {
                $emailerr = "Email is required";
            } else {
                $email = test_input($_POST["E-mail"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailerr = "Invalid email format";
                }
            }
            if (empty($_POST["CHAccept"])) {
                $Acepterr = "Acept is required";
            } else {
                $Acept = test_input($_POST["CHAccept"]);
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
        if (empty($firstnameerr) && empty($lastnameerr) && empty($iderr) && empty($Adderr) && empty($gendererr) && empty($phoneerr) &&
                empty($emailerr) && empty($usernameerr) && empty($passerr) && empty($confpasserr) && empty($Acepterr)) {
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "signupdb";
            $con = new mysqli($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()) {
                die('conect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
            } else {
                $select = "Select Id,Phonenumber,Email,Username from User where Id=? Or Phonenumber=? Or Email=? Or Username=? limit 1";
                $insert = "Insert Into User(Firstname,Lastname,Id,Address,Gender,Phonenumber,Email,Username,Password)values(?,?,?,?,?,?,?,?,?)";
                $stmt = $con->prepare($select);
                $stmt->bind_param("ssss", $Id, $Phonenumber, $Email, $Username);
                $Id = $id;
                $Phonenumber = $phone;
                $Email = $email;
                $Username = $username;
                $stmt->execute();
                $stmt->bind_result($Id, $Phonenumber, $Email, $Username);
                $stmt->store_result();
                $rnum = $stmt->num_rows();
                if ($rnum == 0) {
                    $stmt->close();
                    $stmt = $con->prepare($insert);
                    $stmt->bind_param("sssssssss", $Firstname, $Lastname, $Id, $Address, $Gender, $Phonenumber, $Email, $Username, $Password);
                    $Firstname = $firstname;
                    $Lastname = $lastname;
                    $Id = $id;
                    $Address = $Add;
                    $Gender = $gender;
                    $Phonenumber = $phone;
                    $Email = $email;
                    $Username = $username;
                    $Password = $pass;
                    $stmt->execute();
                    array_push($errors, "sign up is successfull");
                } else {
                    array_push($errors, "some one is already signed up using this Email,Username,Id or Phone number");
                    $stmt->close();
                    $con->close();
                }
            }
        } elseif (!empty($firstnameerr) && !empty($lastnameerr) && !empty($iderr) && !empty($Adderr) && !empty($gendererr) && !empty($phoneerr) &&
                !empty($emailerr) && !empty($usernameerr) && !empty($passerr) && !empty($confpasserr) && !empty($Acepterr)) {
            array_push($errors, "All fields are required");
        } else {
            array_push($errors, "field required");
        }
        ?>


        <form name="register" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" action="signupdb.php">

            <fieldset> 
                <h5>Sign-up</h5>
                <?php include('messages.php'); ?><br>
                <input type="text" id="First_name" name="First_name" placeholder="First_name" value="<?php echo $firstname; ?>"><span class="error">* <?php echo $firstnameerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="text" id="Last_name" name="Last_name" placeholder="Last_name" value="<?php echo $lastname; ?>"><span class="error">* <?php echo $lastnameerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="number" id="ID" name="ID" placeholder="ID" value="<?php echo $id; ?>"><span class="error">* <?php echo $iderr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="text" id="Address" name="Address" placeholder="Address : City-State-country"  value="<?php echo $Add; ?>"><span class="error">* <?php echo $Adderr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <ul>


                    <li style="background-color: white;
                        color: rgb(7, 153, 153);
                        font-size: 18px;
                        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                        margin-left: -10px;
                        display: inline-block;">
                        <label style="display: inline-block; color: black; margin-right: 100px; margin-left: -20px;">gender :</label>
                        <input type="radio" id="gender" name="gender" value="Male" <?php if (isset($gender) && $gender == "Male") echo "checked"; ?>>Male
                    </li>
                    <li style="color:rgb(7, 153, 153);
                        font-size: 18px;
                        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                        margin-left: 130px;
                        display: inline-block;">
                        <input type="radio" id="gender" name="gender" value="Female" <?php if (isset($gender) && $gender == "Female") echo "checked"; ?>>Female
                    </li>
                </ul>
                <span class="error">* <?php echo $gendererr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="text" id="phone_num" name="phone_num" placeholder="phone-num" value="<?php echo $phone; ?>" ><span class="error">* <?php echo $phoneerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="text" id="E-mail" name="E-mail" placeholder="E-mail" value="<?php echo $email; ?>"><span class="error">* <?php echo $emailerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="text" id="username" name="username" placeholder="User_Name" value="<?php echo $username; ?>"><span class="error">* <?php echo $usernameerr; ?></span>
                <h2 style="border: 1px solid #EEE;"></h2>
                <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $pass; ?>"><span class="error">* <?php echo $passerr; ?></span>

                <input type="password" id="confpassword" name="confpassword" placeholder="confirm-Password" value="<?php echo $confpass; ?>"><span class="error">* <?php echo $confpasserr; ?></span>

                <h2 style="border: 1px solid #EEE;"></h2>

                <ul>

                    <li style="margin-bottom: 30px; margin-top: 30px; margin-left: -40px; font-size: 18px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        <input type="checkbox" id="CHAccept" name="CHAccept" value="Acept" <?php if (isset($Acept) && $Acept == "Acept") echo "checked"; ?>>
                        I Accept the <span>  the terms of use   </span> &amp; <span>  the privacy of policy </span><br><br><span class="error">* <?php echo $Acepterr; ?></span> 
                    </li>
                    <label style=" font-size: 20px;margin-left: 190px; color: black;display: inline-block; margin-top: 20px; margin-bottom: 20px;">Already a member ?</label>  
                    <button class="button3"  onclick="document.location = 'login.html'"><a href="http://localhost/HospitalForms/Login.php">log in</a></button>
                    </li>
                </ul>
                <input  class="button2" type="submit" name="siqnup" value="Sign-up"  >
                <button class="button3" style=" font-size: 20px;margin-left: 270px; color: black;  margin-bottom: 30px;" onclick="Defaultval()" >Clear all fields</button>
            </fieldset>

        </form><br>
        <script src="script.js"></script>
        <script>
                      function Defaultval() {
                          document.getElementById("First_name").defaultValue = "";
                          document.getElementById("Last_name").defaultValue = "";
                          document.getElementById("ID").defaultValue = "";
                          document.getElementById("Address").defaultValue = "";
                          document.getElementById("gender").defaultValue = "";
                          document.getElementById("phone_num").defaultValue = "";
                          document.getElementById("E-mail").defaultValue = "";
                          document.getElementById("username").defaultValue = "";
                          document.getElementById("password").defaultValue = "";
                          document.getElementById("confpassword").defaultValue = "";
                          document.getElementById("rememberme").defaultValue = "";

                      }
        </script>

        <?php
        
          if (empty($firstnameerr) && empty($lastnameerr) && empty($iderr) && empty($Adderr) && empty($gendererr) && empty($phoneerr) &&
          empty($emailerr) && empty($usernameerr) && empty($passerr) && empty($confpasserr) && empty($Acepterr)) {
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "signupdb";
          $con = new mysqli($host, $dbusername, $dbpassword, $dbname);
          if (mysqli_connect_error()) {
          die('conect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
          } else {
          $select = "Select Id,Phonenumber,Email,Username from User where Id=? Or Phonenumber=? Or Email=? Or Username=? limit 1";
          $insert = "Insert Into User(Firstname,Lastname,Id,Address,Gender,Phonenumber,Email,Username,Password)values(?,?,?,?,?,?,?,?,?)";
          $stmt = $con->prepare($select);
          $stmt->bind_param("ssss", $Id, $Phonenumber, $Email, $Username);
          $Id = $id;
          $Phonenumber = $phone;
          $Email = $email;
          $Username = $username;
          $stmt->execute();
          $stmt->bind_result($Id, $Phonenumber, $Email, $Username);
          $stmt->store_result();
          $rnum = $stmt->num_rows();
          if ($rnum == 0) {
          $stmt->close();
          $stmt = $con->prepare($insert);
          $stmt->bind_param("sssssssss", $Firstname, $Lastname, $Id, $Address, $Gender, $Phonenumber, $Email, $Username, $Password);
          $Firstname = $firstname;
          $Lastname = $lastname;
          $Id = $id;
          $Address = $Add;
          $Gender = $gender;
          $Phonenumber = $phone;
          $Email = $email;
          $Username = $username;
          $Password = $pass;
          $stmt->execute();
          echo "sign up is successfull";
          } else {
          echo "some one is already signed up using this Email,Username,Id or Phone number";
          $stmt->close();
          $con->close();
          }
          }
          } elseif (!empty($firstnameerr) && !empty($lastnameerr) && !empty($iderr) && !empty($Adderr) && !empty($gendererr) && !empty($phoneerr) &&
          !empty($emailerr) && !empty($usernameerr) && !empty($passerr) && !empty($confpasserr) && !empty($Acepterr)) {
          echo "All fields are required";
          die();
          } else {
          echo "field required";
          die();
          } 
        ?>
    </body>
</html>