<?php
    if(isset($_POST['submit'])) {
        echo $_POST['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST super global</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
</body>
</html>