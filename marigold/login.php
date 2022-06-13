<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <section class="container">
        <img src="../img/icons8-money-box-96.png" alt="icon" class="img pulse">
        <div class="formParent yellow">
            <h1>Privatus klientas</h1>
        </div>
        <div></div>
        <div class="formParent">
            <form action="" method="post" class="form">
                <label for="id">Asmens kodas :</label>
                <input type="number" name="id" require>

                <label for="password">Vardas :</label>
                <input type="password" name="password" require>
                <div class="privatebtn">
                    <button type="submit" name="submit" class="registerbtn">Prisijungti</button>
                </div>
            </form><br><br>
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