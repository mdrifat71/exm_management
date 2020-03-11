<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <ul>
       <?php foreach($data as $item):?>
            <li><a href="<?php echo self::$base.'/exam/take/'.$item['test_id'] ; ?>"><?php echo $item['test_name']?></a></li>
        <?php endforeach?>
    </ul>
</body>
</html>