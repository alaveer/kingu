<?php
include 'mysql.php';

require('menu.php');
echo "<div></div>";       
menu($menu_header,$menu_body,$menu_footer);


home();

?>
<html>
<!-- lisamine -->
     <form action='' method='post'>
         <ul>
          <?php add_button($conn); ?>      
            <label for="Eesnimi">Eesnimi:</label>
            <input type="text" name="Eesnimi" required>
            <label for="Perenimi">Perenimi:</label>
            <input type="text" name="Perenimi" required>     

            <label for="Sünniaasta">Sünniaasta:</label>
            <input type="text" name="Sünniaasta" required>
      
         </ul>
        
    </form>



<!-- kustutamine -->
     <form action='' method='post'>
         <ul>
  <?php delete_button($conn); ?>      


        <label for="PARAM">Parameeter</label>
        <input type="text" name="PARAM" required>
        <label for="NIMETUS">Väärtus</label>
        <input type="text" name="NIMETUS" required>
     

        
        
    </form>
    </html>