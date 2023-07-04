<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //Numeric array
    $age =array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val){
        echo "$x = $val<br>";
    }
    ?>

    <?php //Multi-dimensional
    $multiArray = array(
        "A" => array(0 => "red", 2 => "blue", 3 => "green"),
        "B" => array(1 => "orange", 2 => "black"),
        "C" => array(0 => "white", 4 => "purple", 8 => "gray")

    );

    echo $multiArray["A"][3]; //output green
    echo "<br>";
    echo $multiArray["C"][8]; //output grey
    ?>
</body>
</html>