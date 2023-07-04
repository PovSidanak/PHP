<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $date=date("m-d");

    if ($date=="01-10") {
        echo "Wishing you a very Happy Birthday";

    }
    else{
        //nothing
    }
    ?>

<?php //elseif
    $date=date("m-d");

    if($date=="1-10"){
        echo "Wishing you a very Happy Birthday";
    }elseif($date=="08-15"){
        echo "Happy Independence Day";
    }else{
        //nothing
    }
    ?>

<?php  //Switch statment
    $myFavcolor='red';
    switch($myFavcolor)
    {
    case 'pink':
        echo 'My favorite car color is pink!';
        break;
    case 'red':
        echo 'My favorite car color is red!';
        break;
    case 'orange':
        echo 'My favorite car color is orange!';
        break;
    default :
        echo 'My favorite car color is not pink, red, or orange!';
    }
    ?>

   
   
</body>
</html>