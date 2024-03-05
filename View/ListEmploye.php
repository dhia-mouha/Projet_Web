<?php
include "../Controller/EmployeC.php";
$empC = new EmployeC();
$list = $empC->ListEmployees();
var_dump($list);
?>
<html>
<head>
    <title>List of Employees</title>
</head>
<body>
    <center><h1>List of Employes</h1></center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php foreach ($list as $employe): ?>
            <tr>
                <td><?php echo $employe['id']; ?> </td>
                <td><?php echo $employe['firstname']; ?></td>
                <td><?php echo $employe['lastname']; ?></td>
                <td><?php echo $employe['email']; ?></td>
                <td><?php echo $employe['dob']; ?></td>
                <td><a href="delete.php?id=<?php echo $employe['id']; ?>">Delete</a></td>
            </tr>
            <a href="addEmploye.php">Ajouter un Employe</a>
        <?php endforeach; ?>
    </table>
</body>
</html>
