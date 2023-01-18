<?php
if (isset($_GET['semaine'])){
    echo $_GET['semaine'] . "<br>";
}
else{
    die();
}