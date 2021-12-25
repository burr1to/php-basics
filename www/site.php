<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $characterName = "Sanskar";
    $characterAge = 20;
    $array = ['asd','sd','sdsd'];

   //for ($x = 0; $x < 3;$x++){ echo "$array[$x]<br>";}
   
    $phrase = "To be or not to Be ";
    echo strtoupper($phrase);

    //php is procedural
    echo "<br>";
    
    echo "Names ${characterName}";
    echo "<br>Age is ${characterAge}";
    echo "<br>Whats good nigga. Im a real nigga $characterName";
    //echo allows to write info in HTML


    ?>
</body>
</html>