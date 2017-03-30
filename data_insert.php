<?php 
include 'mysql.php';
include 'menu.php';
?>

<!doctype html>
<html>
<body>
    <h2>POST meetod</h2>
    <form action='' method='post'>
    <ul>
<!-- kõigi kirjete näitamine -->
        <li><?php show_button($conn); ?></li>
    </ul>
        </form>
<!-- lisamine -->
     <form action='' method='post'>
         <ul>
        <li>
        <label for="Nimi">Nimi</label>
            <input type="text" name="Nimi" required>
            
        <label for="Isikukood">Isikukood</label>
            <input type="text" name="Isikukood" required>
        </li>
        <li><?php add_button($conn); ?></li>
         </ul>
        
    </form>
    
<!-- kustutamine -->
     <form action='' method='post'>
         <ul>
        <li>
        <label for="PARAM">Veerg</label>
        <input type="text" name="PARAM" required>
        <label for="id">Sisesta väärtus</label>
        <input type="text" name="id" required>
      </li>

        <li><?php delete_button($conn); ?></li>
         </ul>
    </form>
    <h2>GET meetod</h2>
    <form action='' method='get'>
        <ul>
            <li>
            <label for="PARAM">Veerg</label>
            <input type="text" name="PARAM" required>
            </li>
            <li>
            <label for="id">Väärtus</label>
            <input type="text" name="id" required>
            </li>
         <li><?php search_by_button($conn); ?></li>
        </ul>
    </form>
</body>

</html>