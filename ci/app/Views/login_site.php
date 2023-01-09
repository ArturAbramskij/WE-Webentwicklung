<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <?php $header = "Aufgabenplaner: Login";
    require("C:\\xampp\\htdocs\\ci\\app\\Views\\templates\\header.php")?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <!-- form_open funktioniert nicht. Ich habe es über die helper Variable autoloaded und das klappt auch, aber es routet falsch. <//?php echo form_open("login")?>-->
            <form class="mt-4" action="<?php echo base_url() ?>/loginSession" method="post">
                <div class="form-group my">
                    <label for="loginEmail">Email-Adresse:</label>
                    <input id="loginEmail" name="loginEmail" type="text" class="form-control" placeholder="Email-Adresse eingeben">
                </div>
                <div class="form-group my-2">
                    <label for="loginPwd">Passwort:</label>
                    <input id="loginPwd" name="loginPassword" type="password" class="form-control" placeholder="Passwort">
                </div>
                <div class="form-group form-check my-2">
                    <input id="agbCheck" type="checkbox" class="form-check-input">
                    <label for="agbCheck" class="form-check-label">AGBs und Datenschutzbedingungen akzeptieren</label>
                </div>
                <button type="submit" class="btn btn-primary my-2">Einloggen</button>
                <div class="form-group">
                    Noch nicht registriert? <a class="link-primary text-decoration-none" href="">Registrierung</a>
                </div>
                <div class="form-group mt-3">
                    Da der Login-Vorgang noch nicht realisiert wurde: <a class="link-primary text-decoration-none" href="">Überspringen</a>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>
</html>

