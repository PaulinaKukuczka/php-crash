<?php

//PROTECTION!
//Zabezpieczanie przed wpisywaniem kodu do inputu


//sposób pierwszy
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']) ;
    $age = htmlspecialchars($_POST['age']) ;   
    echo $name, $age;
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name</label>
    <input type="text" name="name">
</div>
<div>
    <label for="name">Age</label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>

<?php
//sposób drugi
if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS) ;   
    echo $name, $age;

    //a także można użyć filter_var
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $name;
}
?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="name">Name</label>
    <input type="text" name="name">
</div>
<div>
    <label for="name">Age</label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>

