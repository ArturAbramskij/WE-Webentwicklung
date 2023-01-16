<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <?php $header = "Aufgabenplaner: ToDos (aktuelles Projekt)";
    require("./rsc/header.php")?>
    <div class="row">
        <?php require("./rsc/menubar.php")?>
        <div class="col-10">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">ToDo:</div>
                        <div class="list-group">
                            <div class="list-group-item">HTML Datei erstellen (Max Mustermann)</div>
                            <div class="list-group-item">CSS Datei erstellen (Max Mustermann)</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Erledigt:</div>
                        <div class="list-group">
                            <div class="list-group-item">PC eingeschaltet (Petra Müller)</div>
                            <div class="list-group-item">Kaffee trinken (Petra Müller)</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Verschoben:</div>
                        <div class="list-group">
                            <div class="list-group-item">Für die Uni lernen (Max Mustermann)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

