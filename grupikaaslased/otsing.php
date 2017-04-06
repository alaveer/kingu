<?php
include 'mysql.php';

require('menu.php');
echo "<div></div>";       
menu($menu_header,$menu_body,$menu_footer);

home();

?>

<html>
<body>

    <form action='' method='post'>
    <ul>

        <?php show_button($conn); ?>

    </ul>
        </form>
    <form action='' method='get'>
        <ul>
            <?php search_by_button($conn); ?><br><br>
            <label for="PARAM">Veerg</label>
            <input type="text" name="PARAM" required>
           
            
            <label for="ID">Väärtus</label>
            <input type="text" name="ID" required>
            
      
        </ul>
    </form>
        </body>
        </html>