<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $var =1; //Assign the integer 1 to $var
    echo $var++; // Print 1, $var is now equal to 2
    echo ++$var; // Print 3, $var is now equal to 3
    echo --$var; //Print 2. $var is now equal to 2
    echo $var--; //Print 2, $var is now equal to 1
    ?>
    <?php 
    $var = "value"; //$var now contains the string "value"
    $var = 1; // $var now contains the integer value1
    $var += 3; // $var now contain the integer 4
    ?>

</body>
</html>