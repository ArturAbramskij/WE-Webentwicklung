<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reiter</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
    $reiterTab = array(
        array(
            'id' => '0',
            'name' => 'ToDo',
            'beschreibung' => 'Dinge die erledigt werden müssen.',
        ),
        array(
            'id' => '1',
            'name' => 'Erledigt',
            'beschreibung' => 'Dinge die erledigt sind.',
        ),
        array(
            'id' => '2',
            'name' => 'Verschoben',
            'beschreibung' => 'Dinge die später erledigt werden.',
        )
    );
    ?>

</head>

<body>
<div class="container-fluid">
    <?php $header = "Aufgabenplaner: Reiter";
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
                            <td><?= isset($item['name']) ? $item['name'] : '' ?></td>
                            <td><?= isset($item['beschreibung']) ? $item['beschreibung'] : '' ?></td>
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
                    <label for="reiterName">Bezeichnung des Reiters:</label>
                    <input type="text" id="reiterBesch" name="reiterBesch" class="form-control mt-2 mb-2" placeholder="Reiter" tabindex="1">
                    <label for="reiterBesch">Beschreibung:</label>
                    <textarea class="form-control mt-2 mb-2" rows="3" id="erstellDat" placeholder="Beschreibung" required></textarea>
                    <button type="submit" class="btn btn-primary my-2">Speichern</button>
                    <button type="submit" class="btn btn-outline-primary:#87e1d8 my-2" style="background-color:#87e1d8">Reset</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>
