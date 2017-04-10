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
    <form action='' method='post'>
        <ul>
            <?php search_by_button($conn); ?><br><br>
            <label for="PARAM">Parameeter</label>
            <input type="text" name="PARAM" required>
           
            
            <label for="NIMETUS">Väärtus</label>
            <input type="text" name="NIMETUS" required>
            
      
        </ul>
    </form>
        </body>
        </html>