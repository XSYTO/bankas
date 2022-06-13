<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../css/client.css">
    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../animation/anim.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <section class="header">
        <div class="welcome">
            <h1>Marigold<span style="color:black;">Pagrindinis</span></h1>
            <img src="../img/marigold1.png" alt="icon" class="">
        </div>
        <div class="accountName">
            <p>Sveiki , <?php $name ?></p>
            <a href="../marigold/bank.php">Atsijungti</a>
        </div>
    </section>
    <section class="containerClients"> 
        <div class="clientTable yellowClients">
            <h1>Sąskaita</h1>
        </div>
        <div class="clientTable">
            <div class="clientList">
                <p class="clientName">Likutis:</p>
                <div class="clientLinks">
                    <p>0</p>
                </div>
            </div>
        </div>
        <section style="margin-top:50px;" class="containerClients">
        <div class="clientTable yellowClients">
            <h1>Pridėti lėšų</h1>
        </div>
        <div class="clientTable">
            <div class="addOrRem">
                <?php
                $clientCash= file_get_contents('../data/ClientsData.json');
                $cashDec = json_decode($clientCash, true);
                if(isset($_POST['cash'])) {
                    foreach($cashDec as $key => $value) {
                        foreach($value as $key => $subvalue) {
                            $subvalue['0'] = $_POST['cash'];
                    }
                }
            }
                file_put_contents('../data/ClientsData.json' , json_encode($cashDec));
            ?>
                <form action="" method="post">
                    Suma :&emsp;<input type="number" name="cash">
                <button class="clientBtn" type="submit">Patvirtinti</button>
                </form>
            </div>
        </div>
        <div style="margin-top:50px;" class="clientTable yellowClients">
            <h1>Nuskaičiuoti lėšas</h1>
        </div>
        <div class="clientTable">
            <div class="addOrRem">
                <form action="" method="post">
                    Suma :&emsp;<input type="number" name="money">
                    <button class="clientBtn" type="submit">Patvirtinti</button>
                </form>
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