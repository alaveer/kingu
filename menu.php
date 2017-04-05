<?php

$tervitus = "<b>Tere tulemast grupikaaslaste lehele!</b>";


$menu_header = '<div>'.$tervitus;
            
$menu_body = array('Otsing','Lisamine');
                
$menu_footer = '</div>';

function menu($begin,$body,$end) { 
    echo $begin;
    for ($i = 0; $i < count($body); $i++) 
    {
    echo '<ul><a href="'.$body[$i].'.php">'.$body[$i].'</a></ul>';
    }
    echo $end;
}

function home(){

echo '<ul><a href="index.php">Tagasi koju</a></ul>';
}

?>