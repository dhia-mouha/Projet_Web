<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe</title>
</head>

<body>
<?php
class Employee {
    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dob;

    public function __construct($lastName, $firstName, $password, $phone, $email, $dob) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
        $this->dob = $dob;
    }

    // Getters
    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getpassword() {
        return $this->password;
    }

    public function getphone() {
        return $this->phone;
    }

    public function getemail() {
        return $this->email;
    }

    public function getdob() {
        return $this->dob;
    }



}
?>


</body>

</html>
