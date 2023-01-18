<?php

if (isset($_GET['prenom']) && isset($_GET['nom'])){
    echo $_GET['prenom'] . "<br>";
    echo $_GET['nom'] . "<br>";
}
else{
    die();
}