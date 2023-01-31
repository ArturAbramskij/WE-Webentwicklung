<div class="mb-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 rounded" style="padding-left: 10px; padding-right: 10px">
        <a class="navbar-brand font-weight-bold" style="font-weight: bold">Aufgabenplaner</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php base_url() ?>/projects">Projekte</a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php base_url() ?>/todo">Aktuelles Projekt</a>
                            <a class="dropdown-item" href="<?php base_url() ?>/reiter">Reiter</a>
                            <a class="dropdown-item" href="<?php base_url() ?>/tasks">Aufgaben</a>
                            <a class="dropdown-item" href="<?php base_url() ?>/persons">Mitglieder</a>
                        </div>
                    </li>
            </ul>
        </div>
        <a class="btn btn-sm btn-dark" style="font-weight: bold;" href="<?php base_url() ?>/logout">Logout</a>
    </nav>
</div>
