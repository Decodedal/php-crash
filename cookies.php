<?php

/*
Cookies are a  mechanis for storing data in the rmote browser and thus 
tracking or identifying return users. You can set specific data to be stored in the browser, and then 
retrieve it when the user visits the site again.
*/

//Set Cookie

setcookie('name', 'Lynn', time() + 86400 *30);

if(isset($_COOKIE['name'])){
    //echo $_COOKIE['name'];
}

/*
    Sessions are a way to store information (in variables) top be used across multiple pages.
    ulike cookies, sessions are stored on the server.
*/
//begins the session
session_start();

if(isset($_POST['submit'])){

    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'Dallas' && $password === "123"){
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
        echo "logged in";
    }else{
        echo "login failed";
    }
}

echo '<a href="/php-crash/extras/dashboard.php">Go to site</a>'

?>


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <div>
        <label for="name">Username: </label>
        <input type="text" name="username" id="name">
    </div>
<form action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div>
        <label for="age">Password: </label>
        <input type="text" name="password" id="age">
    </div>
    <input type="submit" value="submit" name="submit">
</form>
