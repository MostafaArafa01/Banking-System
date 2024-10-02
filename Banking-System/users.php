<?php 
class Users extends Database{
    public function getUser($accountId){
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this-> connect()->prepare($sql);
        $stmt -> execute([$accountId]);
        $result = $stmt->fetchAll();
        $user=null;
        if(count($result)>0) $user=$result[0];
        return $user;
    }

    public function createUser($name , $balance){
        $sql = "INSERT INTO users (name , balance) values(?,?)";
        $stmt = $this-> connect()->prepare($sql);
        $stmt -> execute([$name , $balance]);
    }

    public function updateBalance($id, $balance){
        $sql = "UPDATE users SET balance = ? WHERE id = ?";
        $stmt = $this-> connect()->prepare($sql);
        $stmt -> execute([$balance , $id]);
    }
}