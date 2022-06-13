<?php 
require('../data/index.php');
if(isset($_POST['submit'])){
    header('location: http://localhost:8080/bankas/bankAccount/clientlist.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BecomeCustomer</title>
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
        <img src="../img/icons8-merchant-account-96.png" alt="icon" class="img pulse">
        <div class="formParent yellow">
            <h1>Atidaryti sąskaitą</h1>
        </div>
        <div></div>
        <div class="formParent">
            <form action="../data/index.php" method="post" class="form">
                <label for="firstname">Vardas :</label>
                <input class="forminput" type="text" id="firstname" name="firstname" required>

                <label for="lastname">Pavardė :</label>
                <input class="forminput"  type="text" id="lastname" name="lastname" required>

                <label for="id">Asmens kodas :</label>
                <input class="forminput"  type="number" id="id" name="id" required>

                <label for="accountNumber">Saskaita :</label>
                <input class="forminput"  type="number" id="accountNumber" name="accountNumber" required>

                <label for="address">Adresas :</label>
                <input class="forminput"  type="address" id="address" name="address"  required>

                <label for="phone">Telefonas :</label>
                <input class="forminput"  type="tel" id="phone" name="phone"  required><br><br>
                <div>
                    <p class="center"> <input style="vertical-align: baseline" type="checkbox" name="agree[]"  required> Atidarydamas sąskaitą klientas sutinka su mūsų <a href="#">Terms & Privacy</a>.</p><br>
                    <button type="submit" name="submit" class="registerbtn">Registruoti</button>
                </div>
            </form>
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