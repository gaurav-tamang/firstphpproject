<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $ab = 1; ?>

<body>
    <h1><?php echo $ab; ?></h1>
</body>

</html>
<?php
$a = 3;
$b = 3;
$c = 3;




if ($a == $b && $a == $c) {
    echo "all number are equal";
} else if ($a >= $b && $a >= $c) {
    echo "$a is greatest among all";
} else if ($b >= $a && $b >= $c) {
    echo "$b is greatest among all";
} else if ($c >= $a && $c >= $b) {
    echo "$c is greatest among all";
}
echo"<br>";

$days = "hello";

switch ($days) {
    case "hello":
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
       break;
    case 3;
    echo"tuesday";
    break;
    case 4;
    echo"wednesday";
    break;
    case 5;
    echo"thursday";
    break;
    case 6;
    echo"friday";
    break;
    case 7;
    echo"saturday";
    default ;
    echo"error";
}
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}



// hello
?>