<?php

    interface transactionInterface{
        function makeTransaction(TransactionsInfo $transInfo);
    }