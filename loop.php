<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //while loop
    $i =1;

    while ($i <= 5){
        echo "Hello While $i times."."<br>";
        $i++;
    }
    ?>

    <?php //Do-while loop
    $i=0;
    do{
        $i++;
        echo "php do...while loop $i time"."<br>";
    }
    while($i<=5);
    ?>

    <?php // for loop
    for ($i=1; $i <=5; $i++){
        echo "PHP for loop print $i times"."<br>";
    }
    ?>

    <?php //Foreach loop
    $salary[]=2000;
    $salary[]=3000;
    $salary[]=5000;

    foreach($salary as $value){
        echo "Salary: $value<br>";
    }
    ?>
</body>
</html>