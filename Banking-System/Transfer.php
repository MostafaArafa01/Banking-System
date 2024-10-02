<?php

    class TransferFunds implements transactionInterface{
        function makeTransaction(TransactionsInfo $transInfo){
            $obj = new Users();
            $transObj = new Transactions();
            $user1 = $obj->getUser($transInfo-> getFrom());
            $user2 = $obj->getUser($transInfo-> getTo());
            if($user1 == null) echo "Not Found Sending User";
            else if($user2 == null) echo "Not Found Recieving User";
            else if($user1['balance'] < $transInfo -> getAmount()){
                echo "Not enough funds in sending user's account";
            }
            else{
                $userobj = new Users();
                $userobj -> updateBalance($transInfo-> getFrom(), $user1['balance'] - $transInfo-> getAmount());
                $userobj -> updateBalance($transInfo-> getTo(), $user2['balance'] + $transInfo-> getAmount());
                $transObj -> addTransaction($transInfo-> getFrom(), $transInfo-> getTo(), $transInfo-> getAmount());
                echo "Transaction is Done";
            }
        }
    }