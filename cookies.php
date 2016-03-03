<?php
    $name = "user";
    $value = "Sexy Nma";
    $expiration = time() + (60 * 60 * 24 * 1);  // seconds * minutes * hours * days
    
    setcookie($name, $value, $expiration);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
<?php
    if(isset($_COOKIE['user'])) {
        $person = $_COOKIE['user'];
        echo $person;
    } else {
        $person = "";
    }
?>
</body>
</html>