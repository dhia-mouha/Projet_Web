<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe</title>
</head>

<body>
<?php
require_once '../Model/employee.php';

class EmployeeController {

    public function show($employee) {
        $data = $employee->show();
        echo "<table>";
        foreach ($data as $key => $value) {
            echo "<tr><th>{$key}</th><td>{$value}</td></tr>";
        }
        echo "</table>";
    }
}
?>


</body>

</html>