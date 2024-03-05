<?php
include "../config.php";
class EmployeC{
    public function ListEmployees(){
        $sql ="SELECT * FROM employe";
        $db = config::getConnexion();
        try{
            $List = $db->query($sql);
            return $List;
        }
        catch(Exception $e){
        die("Error".$e->getMessage());
        }
    }
    public function deleteEmployee($id){
        $sql = "DELETE FROM employe WHERE id = :id"; // Correct SQL statement
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
        }
        catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
   
    public function addEmployee($firstname, $lastname, $email, $dob){
        $sql = "INSERT INTO employe (firstname, lastname, email, dob) VALUES (:firstname, :lastname, :email, :dob)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'dob' => $dob
            ]);
        } catch (Exception $e) {
            die('Error: '.$e->getMessage());
        }
    }
}

?>