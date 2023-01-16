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
            <form action="<?php echo base_url() ?>/update_user" method="post">
                <h3 class="mt-4">Benutzer bearbeiten</h3>
                <div class="form-group">
                    <input type="hidden" id="persID" name="persID" class="form-control mt-2 mb-2" value="<?php echo $user["id"]?>" tabindex="0">
                    <label for="persName">Username:</label>
                    <input type="text" id="persName" name="persName" class="form-control mt-2 mb-2" value="<?php echo $user["username"]?>" tabindex="1">
                    <label for="persEmail">E-Mail-Adresse:</label>
                    <input type="text" id="persEmail" name="persEmail" class="form-control mt-2 mb-2" value="<?php echo $user["email"]?>" tabindex="2">
                    <label for="persPassword">Passwort:</label>
                    <input type="password" id="persPassword" name="persPassword" class="form-control mt-2 mb-2" value="<?php echo $user["password"]?>" tabindex="3">
                    <div class="form-check mb-3">
                        <input class="form-check-input mb-3" type="checkbox" value="" id="persCheck" name="persCheck" tabindex="4">
                        <label class="form-check-label" for="persCheck">Dem Projekt zugeordnet</label>
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Speichern</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>
</html>
