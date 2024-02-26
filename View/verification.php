<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe</title>
</head>

<body>
<?php


require_once 'C:\xampp\htdocs\workshop\Model\employe.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $dob = $_POST['dob'] ?? '';

    if ($password !== $confirmPassword) {
        echo 'Error: Passwords do not match.';
    } else {
        $employee1 = new Employee($lastName, $firstName, $password, $phone, $email, $dob);
    }

    var_dump($employee1);

} else {
    echo 'You must submit the form!';
}

?>
<table border="1">
    <tr>
        <td>LastName</td>
        <td>First Name</td>
        <td>Pass</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Date Of Birth</td>
    </tr>
    <tr>
        <td><?php echo htmlspecialchars($employee1->getLastName()); ?></td>
        <td><?php echo htmlspecialchars($employee1->getFirstName()); ?></td>
        <td><?php echo htmlspecialchars($employee1->getPassword()); ?></td>
        <td><?php echo htmlspecialchars($employee1->getPhone()); ?></td>
        <td><?php echo htmlspecialchars($employee1->getEmail()); ?></td>
        <td><?php echo htmlspecialchars($employee1->getDob()); ?></td>
    </tr>
</table>

</body>

</html>