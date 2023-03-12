<!DOCTYPE html>
<?php
	$result = null;
	
	if(isset($_POST["left"]) && isset($_POST["right"])){
		if(is_numeric($_POST["left"]) && is_numeric($_POST["right"])){
			if($_POST["calc"] == "add"){
				$result = $_POST["left"] + $_POST["right"];
			} elseif($_POST["calc"] == "sub") {
				$result = $_POST["left"] - $_POST["right"];
			} elseif($_POST["calc"] == "multi") {
				$result = $_POST["left"] * $_POST["right"];
			} elseif($_POST["calc"] == "divi") {
				$result = $_POST["left"] / $_POST["right"];
			}
		} else {
			$result = "数字を入力してください";
		}
	}
	
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="" method="post">
            <input type="text" name="left" value="<?php 
                if(isset($_POST["left"])){
                    echo $_POST["left"];
                }?>">
            <select name="calc">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="multi">×</option>
                <option value="divi">÷</option>
            </select>
            
            <input type="text" name="right" value="<?php
                if(isset($_POST["right"])){
                    echo $_POST["right"];
                }?>">
            <label>= <?php echo $result ?> </label>
            <br>
            <input type="submit" value="計算">
        </form>
            
    </body>

</html>