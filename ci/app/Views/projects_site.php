<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container-fluid">
    <?php $header = "Aufgabenplaner: Projekte";
    require("C:\\xampp\\htdocs\\ci\\app\\Views\\templates\\header.php")?>
    <div class="row">
        <?php require("C:\\xampp\\htdocs\\ci\\app\\Views\\templates\\menubar.php")?>
        <div class="col-8">
            <form class="form-group">
                <h3 class="mt-4">Projekt auswählen:</h3>
                <select class="form-select form-control mt-2 mb-2">
                    <option selected>- bitte auswählen -</option>
                    <option>Projekt 1</option>
                    <option>Projekt 2</option>
                </select>
                <button type="submit" class="btn btn-primary my-2">Speichern</button>
                <button type="submit" class="btn btn-primary my-2">Bearbeiten</button>
                <button type="submit" class="btn btn-outline-primary:#ff0000 my-2" style="background-color:#ff0000">Löschen</button>
                <h3 class="mt-4">Projekt bearbeiten/erstellen:</h3>
                <div class="form-group">
                    <label for="projectName">Projektname:</label>
                    <input type="text" id="projectName" name="projectName" class="form-control mt-2 mb-2" placeholder="Reiter" tabindex="1">
                    <label for="projectBesch">Projektbeschreibung:</label>
                    <textarea class="form-control mt-2 mb-2" rows="3" id="projectBesch" placeholder="Beschreibung"></textarea>
                    <button type="submit" class="btn btn-primary my-2">Speichern</button>
                    <button type="submit" class="btn btn-outline-primary:#87e1d8 my-2" style="background-color:#87e1d8">Reset</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>
