<?php
if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
    echo $_GET['dateDebut'] . "<br>";
    echo $_GET['dateFin'] . "<br>";
}
else{
    die();
}