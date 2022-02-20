<?php
include "config.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
    </head>
    <body>

        <h2>Log in</h2>
      
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
     

            <!-- <form method="POST">
                <button 
                    class="button-primary" 
                    type="submit" 
                    name="logout" 
                    value="logout"
                >Logout</button>
            </form>
        -->
    </body>
</html>