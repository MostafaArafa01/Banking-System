<?php

class Transactions extends Database{
    public function getTransactions($accountId){
        $sql = "SELECT time, 'OUT' AS status, amount FROM transactions WHERE sender_id = ?
        UNION ALL
        SELECT time, 'IN' AS status, amount FROM transactions WHERE receiver_id = ? ORDER BY time";
        $stmt = $this-> connect()->prepare($sql);
        $stmt -> execute([$accountId,$accountId]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function addTransaction($senderId , $reciever_id , $amount){
        $sql = "INSERT INTO transactions (sender_id, receiver_id, amount, time) VALUES (?, ?, ?, NOW());";
        $stmt = $this-> connect()->prepare($sql);
        $stmt -> execute([$senderId , $reciever_id , $amount]);
    }
}