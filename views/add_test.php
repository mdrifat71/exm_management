<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo Config::$base."/test/add_test"?>" method = "post">
        Test name<br>
        <input type="text" name = "test_name"> 
        <input type="submit" name = "submit" value = "submit">
    </form>
</body>
</html>