<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe</title>
</head>

<body>

<?php
require_once 'C:\xampp\htdocs\workshop\Controller\employeC.php';
require_once 'C:\xampp\htdocs\workshop\Model\employe.php';

$employee1 = new Employee("Doe", "Jane", "123456789", "123-456-789", "Jane.Doe@gmail.com", "1/1/2000");

$controller = new EmployeeController();
$controller->show($employee1);



var_dump($employee1);

?>



</body>

</html>