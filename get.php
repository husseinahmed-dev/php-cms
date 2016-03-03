<?php
    print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET super global</title>
</head>
<body>
<?php
    $name = "Kawyar";
?>
    <a href="get.php?name=<?php echo $name ?>">Click Here</a>
    
</body>
</html>