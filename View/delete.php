<?php
include "../Controller/EmployeC.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $empC = new EmployeC();
    $empC->deleteEmployee($_GET['id']);
    header('Location: ListeEmploye.php'); 
} else {
    header('Location: ListeEmploye.php'); 
    exit;
}
?>
