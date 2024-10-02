<?php

    class DepositFunds implements TransactionInterface{
        function makeTransaction(TransactionsInfo $transInfo){
            $obj = new Users();
            $user = $obj->getUser($transInfo-> getTo());
            $transObj = new Transactions();
            if($user == null) echo "Not Found User";
            else{
                $userobj = new Users();
                $userobj -> updateBalance($transInfo-> getTo(), $user['balance'] + $transInfo-> getAmount());
                $transObj -> addTransaction(0, $transInfo-> getTo(), $transInfo-> getAmount());
                echo "Transaction is Done";
            }
        }
    }