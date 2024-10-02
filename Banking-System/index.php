<?php
    require_once 'database.php';
    require_once 'users.php';
    require_once 'transactionInterface.php';
    require_once 'transactionsInfo.php';
    require_once 'deposit.php';
    require_once 'withDraw.php';
    require_once 'transfer.php';
    require_once 'transactions.php';
    require_once 'user.php';
?>
<!Doctype html>
<html lang = "en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $transInfo = new TransactionsInfo(2,0,800);
        $obj1 =new WithDrawFunds();
        $obj1 -> makeTransaction($transInfo);
        $obj2 =new User();
        echo $obj2 -> getTransactionHistory(2);
    ?>
</body>
</html>