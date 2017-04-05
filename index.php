

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minu esimene leht!</title>
</head>

<body>
    
<?php

// require_once('mysql.php');
// require ('/functions/function.php');
require('menu.php');
echo '<script src="script.js" type="text/javascript"></script>';
echo "<script>tere()</script>";    
//greeting("hommikust");

//aeg();
    
echo "<div></div>";       
menu($menu_begin,$menu_arr,$menu_end);


/*
connect($conn);
my_query($conn);
my_close($conn);
*/

    
$arr = arvuta(4,5);

foreach ($arr as $descr => $result){
    echo $descr.$result."<br>";
}
// massiivist stringi tegemine
echo implode($arr, " ")."<br>";
    
// stringist massiivi tegemine
$tekst = "Siin lauses on eraldajaks tühik, tegelikult kah";
print_r(explode(" ",$tekst));
    
counter();  
GetUserIp();
    

?> 
</body>
</html>

