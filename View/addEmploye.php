<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add employee</title>
</head>
<body>
    
        <h1>Add New Employee</h1>
        <form action="addEmployee.php" method="POST">
            First Name: <input type="text" name="firstname" required><br>
            Last Name: <input type="text" name="lastname" required><br>
            Email: <input type="email" name="email" required><br>
            Date of Birth: <input type="date" name="dob" required><br>
            <input type="submit" name="add" value="Add Employee">
        </form>

<?php
if(isset($_POST['update']) && isset($_GET['id'])) {
    $empC = new EmployeC();
    $empC->updateEmployee($_GET['id'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['dob']);
    header('Location: ListeEmploye.php');
}
?>
</body>
</html>