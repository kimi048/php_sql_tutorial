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
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost'=>10));
            
            $query = "INSERT INTO users (email, password) VALUE('$email', '$password')";
            $result = mysqli_query($DB, $query);
            echo "SUCCESS!!";
        }
    }
}

?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
    </head>
    <body>

        <h2>Register</h2>
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
    </body>
</html>