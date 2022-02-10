<?php

// code unset login coockies when user log out

/*session_start();
session_destroy();
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $usernamecoock = $_COOKIE['username'];
    $passwordcoock = $_COOKIE['password'];
    setcookie('username', $usernamecoock, time() -1);
    setcookie('password', $passwordcoock, time() -1);
}
echo 'You succefully log out'.'<br>';
echo 'coockies is Delete sucessfully';*/

?>