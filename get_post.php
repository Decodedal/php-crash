<?php
/*
can use this to sanitize but even better method 
$age = htmlspecialchars($_POST["age"]);
$name = htmlspecialchars($_POST['name']);
*/



if(isset($_POST['submit'])){

    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name. " is " . $age. " years old";
}

?>

<a href="<?php echo $_SERVER["PHP_SELF"];?>?name=Dallas&age=29">click</a>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
    </div>
<form action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" value="submit" name="submit">
</form>