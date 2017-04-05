<?php


$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server,$user,$pass);



// otsingu kuvamine
function my_query($conn){

$sql = "SELECT ID, Eesnimi, Perenimi, Synniaasta, Pilt, Sisestamise_aeg FROM grupp16.kaaslased";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ".$row["ID"].
              " Nimi:  ".$row["Eesnimi"].
              " Perenimi: ".$row["Perenimi"].
              " Sünniaasta: ".$row["Synniaasta"].
              " Pilt: ".$row["Pilt"].
              " Sisestamise aeg: ".$row["Sisestamise_aeg"]."<br>";
    }
    
} else {echo "Andmebaas on tühi";}

}

// otsing parameetri järgi
function search_by($conn){
    $sql = "SELECT * FROM grupp16.kaaslased WHERE ".
        $_GET['PARAM'].
        "='".$_GET['ID']."'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ".$row["ID"].
              " Nimi:  ".$row["Eesnimi"].
              " Perenimi: ".$row["Perenimi"].
              " Sünniaasta: ".$row["Synniaasta"].
              " Pilt: ".$row["Pilt"].
              " Sisestamise aeg: ".$row["Sisestamise_aeg"]."<br>";
    }} else {echo "Sellist kirjet ei ole!";}
}

//lisamine
function my_insert($conn){
    
    $sql = "INSERT INTO grupp16.kaaslased (Eesnimi, Synniaasta) VALUES('".
        $_POST['Eesnimi']."','".
        $_POST['Sünniaasta']."')";

        $result = $conn->query($sql);
 
      
}

// kustutamine
function my_delete($conn){

    $sql = "DELETE FROM grupp16.kaaslased WHERE ".
        $_POST['PARAM'].
        "='".$_POST['ID']."'";
    $result = $conn->query($sql);
}



// otsingu nupp
function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki isikuid'>";
    if(isset($_POST['show'])){
        my_query($conn);
    } 
}

// otsing parameetri järgi
function search_by_button($conn){
    echo "<input type='submit' name='search' value='Otsi parameetri järgi'>";
    if(isset($_GET['search'])){
        if ($_GET['ID']==null OR $_GET['PARAM']==null){
            echo "Sisesta midagigi!";
        } else {search_by($conn);}
    }
}


//  lisamise nupp
function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa isik'>";
    if(isset($_POST['add'])){
        my_insert($conn);
    } 
}

//  kustutamise nupp
function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta isik'>";
    if(isset($_POST['delete'])){
        my_delete($conn);
    } 
}
?>