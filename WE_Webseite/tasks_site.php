<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgaben</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
    $reiterTab = array(
        array(
            'id' => '0',
            'bez' => 'HTML Datei erstellen',
            'beschreibung' => 'HTML Datei erstellen',
            'reiter' => 'ToDo',
            'zustaendig' => 'Max Mustermann',
        ),
        array(
            'id' => '1',
            'bez' => 'CSS Datei erstellen',
            'beschreibung' => 'CSS Datei erstellen',
            'reiter' => 'ToDo',
            'zustaendig' => 'Max Mustermann',
        ),
        array(
            'id' => '2',
            'bez' => 'PC eingeschaltet',
            'beschreibung' => 'PC einschalten',
            'reiter' => 'Erledigt',
            'zustaendig' => 'Max Mustermann',
        ),
        array(
            'id' => '3',
            'bez' => 'Kaffee trinken',
            'beschreibung' => 'Kaffee trinken',
            'reiter' => 'Erledigt',
            'zustaendig' => 'Petra Müller',
        ),
        array(
            'id' => '4',
            'bez' => 'Für die Uni lernen',
            'beschreibung' => 'Für die Uni lernen',
            'reiter' => 'Verschoben',
            'zustaendig' => 'Max Mustermann',
        )
    );
    ?>

</head>

<body>
<div class="container-fluid">
    <?php $header = "Aufgabenplaner: Aufgaben";
    require("./rsc/header.php")?>
    <div class="row">
        <?php require("./rsc/menubar.php")?>
        <div class="col-8">
            <form class="form-group">
                <table class="table table-hover">
                    <thead>
                    <tr class="table-light">
                        <th>Name</th>
                        <th>Beschreibung</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($reiterTab)): foreach ($reiterTab as $item): ?>
                        <tr>
                            <td><?= isset($item['bez']) ? $item['bez'] : '' ?></td>
                            <td><?= isset($item['beschreibung']) ? $item['beschreibung'] : '' ?></td>
                            <td><?= isset($item['reiter']) ? $item['reiter'] : '' ?></td>
                            <td><?= isset($item['zustaendig']) ? $item['zustaendig'] : '' ?></td>
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
                    <label for="taskName">Aufgabenbezeichnung:</label>
                    <input type="text" id="taskName" name="taskName" class="form-control mt-2 mb-2" placeholder="Aufgabe" tabindex="1">
                    <label for="taskBesch">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control mt-2 mb-2" rows="3" id="erstellDat" placeholder="Beschreibung" required></textarea>
                    <label for="erstellDat">Erstellungsdatum:</label>
                    <input type="text" id="erstellDat" name="erstellDat" class="form-control mt-2 mb-2" placeholder="01.01.19" tabindex="2">
                    <label for="faellig">fällig bis:</label>
                    <input type="text" id="faellig" name="faellig" class="form-control mt-2 mb-2" placeholder="01.01.19" tabindex="2">
                    <label for="reiterBesch">Zugehöriger Reiter:</label>
                    <select class="form-select form-control mt-2 mb-2">
                        <option selected>- bitte auswählen -</option>
                        <option>ToDo</option>
                        <option>Erledigt</option>
                        <option>Verschoben</option>
                    </select>
                    <label for="reiterBesch">Zuständig:</label>
                    <select class="form-select form-control mt-2 mb-2">
                        <option selected>- bitte auswählen -</option>
                        <option>Max Mustermann</option>
                        <option>Petra Müller</option>
                    </select>
                    <button type="submit" class="btn btn-primary my-2">Speichern</button>
                    <button type="submit" class="btn btn-outline-primary:#87e1d8 my-2" style="background-color:#87e1d8 !important">Reset</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>
