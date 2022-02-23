<?php
include "config.php";

print_r($_SESSION);

function escape($data){
    global $DB;
    $data = trim($data);
    $data = mysqli_real_escape_string($DB, $data);
    return $data;
}

if(isset($_POST["email"]) && isset($_POST["password"])){
    if(!empty($_POST["email"]) && !empty($_POST["password"])){
        if(!$DB){
            die("FAILED".mysqli_connect_error());
        }else{
            $email = escape($_POST["email"]);
            $password = escape($_POST["password"]);
            
            $query = "SELECT * FROM users WHERE email= '$email'";
            $result = mysqli_query($DB, $query);
            
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                $verifyPassword = password_verify($password, $row["password"]);
                if($verifyPassword){
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_email'] = $row['email'];
                    echo "good password";
                }else{
                    echo "bad password";
                }
            }
        }
    }
}

if(isset($_POST["logout"])){
    $_SESSION['logged_in'] = null;
    $_SESSION['user_id'] = null;
    $_SESSION['user_email'] = null;

    // $_SESSION = array();
}

?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
    </head>
    <body>

        <h2>Log in</h2>
        <?
            if(!$_SESSION['logged_in']){
        ?>
        <form method="POST">
            <div class="row">
                <div class="twelve columns">
                    <label for="email">Email</label>
                    <input
                        type="text"
                        placeholder="Enter your email"
                        name="email"
                    >
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        placeholder="Enter your password"
                        name="password"
                    >
                </div>
            </div>
            <input class="button-primary" type="submit" value="submit">
        </form>
        <? }else{ ?>

            <form method="POST">
                <button 
                    class="button-primary" 
                    type="submit" 
                    name="logout" 
                    value="logout"
                >Logout</button>
            </form>
       <? } ?>
    </body>
</html>