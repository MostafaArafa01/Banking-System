<?php

    class WithDrawFunds implements transactionInterface{
        function makeTransaction(TransactionsInfo $transInfo){
            $obj = new Users();
            $user = $obj->getUser($transInfo-> getFrom());
            $transObj = new Transactions();
            if($user == null) echo "Not Found User";
            else if($user['balance'] < $transInfo -> getAmount()){
                echo "Not enough funds in your account";
            }
            else{
                $userobj = new Users();
                $userobj -> updateBalance($transInfo-> getFrom(), $user['balance'] - $transInfo-> getAmount());
                $transObj -> addTransaction($transInfo-> getFrom(), 0, $transInfo-> getAmount());
                echo "Transaction is Done";
            }
        }
    }