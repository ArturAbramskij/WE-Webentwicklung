<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personen</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="container-fluid">
    <?php $header = "Aufgabenplaner: Personen";
    require("C:\\xampp\\htdocs\\ci\\app\\Views\\templates\\header.php")?>
    <div class="row">
        <?php require("C:\\xampp\\htdocs\\ci\\app\\Views\\templates\\menubar.php")?>
        <div class="col-8">
            <form class="form-group">
                <table class="table table-hover">
                    <thead>
                    <tr class="table-light">
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>In Projekt</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($mitglieder)): foreach ($mitglieder as $item): ?>
                        <tr>
                            <td><?= isset($item['name']) ? $item['name'] : '' ?></td>
                            <td><?= isset($item['email']) ? $item['email'] : '' ?></td>
                            <td><?php isset($item['inProjekt']) && $item['inProjekt'] ? $item['state'] = 'checked' : $item['state'] = ''; ?><?= isset($item['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$item['state'].'>' : '<input class="form-check-input" type="checkbox"'.$item['state'].'>' ?></td>
                            <td class="text-right">
                                <button type="submit" class="btn btn-link"><i class="fa fa-edit"></i></button>
                                <button type="submit" class="btn btn-link"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
                <h3 class="mt-4">Bearbeiten/Erstellen</h3>
                <div class="form-group">
                    <label for="persName">Username:</label>
                    <input type="text" id="persName" name="persName" class="form-control mt-2 mb-2" placeholder="Username" tabindex="1">
                    <label for="persEmail">E-Mail-Adresse:</label>
                    <input type="text" id="persEmail" name="persEmail" class="form-control mt-2 mb-2" placeholder="E-Mail" tabindex="2">
                    <label for="persPassword">Passwort:</label>
                    <input type="password" id="persPassword" name="persPassword" class="form-control mt-2 mb-2" placeholder="Passwort" tabindex="3">
                    <div class="form-check mb-3">
                        <input class="form-check-input mb-3" type="checkbox" value="" id="persCheck" name="persCheck" tabindex="4">
                        <label class="form-check-label" for="persCheck">Dem Projekt zugeordnet</label>
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Speichern</button>
                    <button type="submit" class="btn btn-outline-primary:#87e1d8 my-2" style="background-color:#87e1d8">Reset</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>

