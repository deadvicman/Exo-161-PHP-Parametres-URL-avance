<?php
if (isset($_GET['langage']) && isset($_GET['serveur'])){
    echo $_GET['langage'] . "<br>";
    echo $_GET['serveur'] . "<br>";
}
else{
    die();
}