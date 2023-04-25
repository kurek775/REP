<?php
//spustíme session
session_start();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PHP Shopping App</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>PHP Shopping App</h1>

<h2>Sign in</h2>

<?php
if (!empty($formError)){
    echo '<p style="color:red;">'.$formError.'</p>';
}
?>

<form method="post">
    <label for="email">Your Email</label><br/>
    <input type="text" name="email" id="email" value="<?php
    echo htmlspecialchars(@$_POST['email'] ?? '')?>"><br/><br/>

    <label for="password">Password</label><br/><!--POZOR: heslo nikdy nepředvyplňujeme! -->
    <input type="password" name="password" id="password" value=""><br/><br/>

    <input type="submit" value="Sign in">
</form>

<br/>


</body>
</html>
