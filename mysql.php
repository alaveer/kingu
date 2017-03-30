<?php

// defineerime ühenduse muutujad
require 'functions/function.php';

home();
// loome ühenduse

   
$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server, $user, $pass);

function connect($conn){ 
// kontrollime ühenduse olemasolu
if (!$conn){
    
   die("Ühendust ei ole " . msqli_connect_error()); 
} 
    echo "Jess!! Kontakteerusin <br>";
    
}

    
// pärime andmebaasist andmeid (kõik korraga)

function my_query($conn){
$sql = "SELECT id, Nimi, Isikukood, Aeg FROM ms16.isik";
$result = $conn->query($sql);
    
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ".$row["id"].
              " Nimi:  ".$row["Nimi"].
              " isikukood: ".$row["Isikukood"].
              " ja sisestusaeg: ".$row["Aeg"]."<br>";
    }
    
} else {echo "Sul on tühi baas, tee midagi!";}

}

// otsime parameetri järgi
function search_by($conn){
    $sql = "SELECT * FROM ms16.isik WHERE ".
        $_GET['PARAM'].
        "='".$_GET['id']."'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ".$row["id"].
              " Nimi:  ".$row["Nimi"].
              " isikukood: ".$row["Isikukood"].
              " ja sisestusaeg: ".$row["Aeg"]."<br>";
    }} else {echo "Sellist kirjet ei ole!";}
}

    

    
function my_insert($conn){
    
    // lahtrite kontroll, mõistlikum oleks teha nupu vajutuse jälgides
  
    if ($_POST['Nimi']==null OR $_POST['Isikukood']==null){
        
     echo "Mõlemad väljad on kohustuslikud";} else {
   
    $sql = "INSERT INTO ms16.isik (Nimi, Isikukood) VALUES('".
        $_POST['Nimi']."','".
        $_POST['Isikukood']."')";

        $result = $conn->query($sql);
        

        }
}

function my_delete($conn){

    $sql = "DELETE FROM ms16.isik WHERE ".
        $_POST['PARAM'].
        "='".$_POST['id']."'";
    $result = $conn->query($sql);
}

function my_close($conn){
$conn->close();
    
}
    
    
// kõigi kirjete näitamise nupp
function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki'>";
    if(isset($_POST['show'])){
        my_query($conn);
    } 
}

// parameetri järgi otsimise nupp
// sisestuse kontroll on mõtet teha enne funktsooni poole pöördumist
function search_by_button($conn){
    echo "<input type='submit' name='search' value='Otsi parameetri järgi'>";
    if(isset($_GET['search'])){
        if ($_GET['id']==null OR $_GET['PARAM']==null){
            echo "Sisesta midagigi!";
        } else {search_by($conn);}
    }
}

// kirje lisamise nupp
function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa kirje'>";
    if(isset($_POST['add'])){
        my_insert($conn);
    } 
}

// kirje kustutamise nupp
function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>";
    if(isset($_POST['delete'])){
        my_delete($conn);
    } 
}




?>

