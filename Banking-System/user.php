<?php

    class User{
        public function getBalance($userId){
            $usersObj = new Users(); 
            $user = $usersObj->getUser($userId);
            if($user == null) echo "Not Found User";
            else{
                echo "Your balance is " . $user['balance'];
            }
        }

        public function getTransactionHistory($userId){
            $transactionsObj = new Transactions(); 
            $result = $transactionsObj->getTransactions($userId);
            echo "<table border='1' cellpadding='10' cellspacing='0'>
                    <tr>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Amount</th>
                    </tr>";
            foreach ($result as $row) {
                echo "<tr>
                        <td>{$row['time']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['amount']}</td>
                    </tr>";
            }
            
            // End the table
            echo "</table>";
        }
    }