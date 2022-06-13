<?php

$accountList = file_get_contents('../data/ClientsData.json');

$data = json_decode($accountList , 1);

foreach($data as $key => $value) {
   $name = $value['Firstname'];
   $lastname = $value['Lastname'];
   $accountNum = $value['AccountNumber'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/client.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../animation/anim.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <section class="header">
        <div class="welcome">
            <h1>Marigold<span style="color:black;">Bank</span></h1>
            <img src="../img/marigold1.png" alt="icon" class="">
        </div>
        <div class="links">
            <a href="../marigold/bank.php">Pagrindinis</a>
            <a href="../bankAccount/clientlist.php">Klientų sarašas</a>
            <a href="../marigold/BecomeCustomer.php">Registruoti nauja sąskaitą</a>
            <a href="../marigold/login.php">Prisijungti</a>
        </div>
    </section>
    <section class="containerClients">
        <div class="clientTable yellowClients">
            <h1>Klientų sarašas</h1>
        </div>
        <div class="clientTable">
            <div class="clientList">
                <?php 
                foreach($data as $key => $value) {
                    $name = $value['Firstname'];
                    $lastname = $value['Lastname'];
                    $accountNum = $value['AccountNumber'];
                    echo "<div class='clientName'><p class='saskaitos'>Klientas:$name $lastname </p><p class='saskaitos'>Saskaitos numeris: $accountNum<p><div class='saskaitos sasklinks' ><a class='linksbtn' href='../bankAccount/account.php'>Pridėti lėšų</a><a class='linksbtn' href='../bankas/bankAccount/account.php'>Nuskaičiuoti lėšas</a><button class='deletebtn'  type='submit'>ištrinti</button></div></div>";
                  }
                   ?>        
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="Contact">
            <h3>Kontaktai</h3>
            <p>Vilnius, LT</p>
            <p>arcebasovas@gmail.com</p>
            <p>github.com/XSYTO</p>
            <p>+5(55)554555</p>
        </div>
        <div class="Contact">
            <p>&copy; Copyright 2022, MarigoldBank</p>
        </div>
    </section>
</body>
</html>