<?php
if (isset($_GET['batiment']) && isset($_GET['salle'])){
    echo $_GET['batiment'] . "<br>";
    echo $_GET['salle'] . "<br>";
}
else{
    die();
}