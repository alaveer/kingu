
<?php
$kasutaja = "<b>Tarmo</b>";


$menu_begin= '<div>'.$kasutaja;
            
$menu_arr = array('massiivid','andmebaas','hint','file','monitor','koopia','methods','mysql', 'data_insert');
                
$menu_end='</div>';

function menu($begin,$body,$end) { 
    echo $begin;
    for ($i = 0; $i < count($body); $i++) 
    {
    echo '<li><a href="'.$body[$i].'.php">'.$body[$i].'</a></li>';
    }
    echo $end;

                 }







?>