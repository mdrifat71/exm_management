<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo self::$base."/Question/add" ?>" method = "post">
        
        <?php
        if (!isset($_GET['test']) and empty($_GET['test'])): ?>
        <select name="test" id="">
        <?php
            foreach ($data as $item):?>
                <option value="<?php echo $item['test_id']?>"><?php echo $item['test_name']?></option>
        <?php 
            endforeach ;
        ?>
        </select><br>

        <?php endif;?>
        
        Question :<br>
        <input style="width:200px" type="text" name = "question"><br><br>
        <input type="text" name = "opt1"><br>
        <input type="text" name = "opt2"><br>
        <input type="text" name = "opt3"><br>
        <input type="text" name = "opt4"><br>
        choose correct answer:
        <select name="correct" id="">
            <?php for ($i = 1; $i <= 4; $i++):?>
                <option value="<?php echo $i ?>"><?php echo "option-".$i ?></option>
            <?php endfor?>
        </select><br>
        <input type="submit" value="add" name ="submit">
    </form>
    
    
</body>
</html>