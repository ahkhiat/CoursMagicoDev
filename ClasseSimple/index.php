<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP avec Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<!-- on va coder en php ici -->

<?php

require_once './class/Account.php';
require_once './class/SavingAccount.php';


$account1 = new Account("Sabri", 1000);
echo $account1;

$account2 = new Account("Nadia", 2000);
echo $account2;

$account3 = new SavingAccount("Thierry", 5000, 7);
echo $account3;

?>

</body>
</html>