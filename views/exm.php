<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        foreach($data as $question):
    ?>
        <form>
        <h2 id = "<?php echo $question['question_id']?>"><?php echo $question['question_name'] ?></h2>
        <input type="radio" value ="1" name ="option"><?php echo $question['op_1'] ?>
        <input type="radio" value ="2" name ="option"><?php echo $question['op_2'] ?><br>
        <input type="radio" value ="3" name ="option"><?php echo $question['op_3'] ?>
        <input type="radio" value ="4" name ="option"><?php echo $question['op_4'] ?><br>
        </form>
    <?php endforeach?>
    <button id = "finish">Submit</button>
    <?php echo self::$base.'/views/js/main.js'?>
    <script type ="text/javascript" src= "<?php echo self::$base.'/views/js/main.js'?>" ></script>
    
</body>
</html>