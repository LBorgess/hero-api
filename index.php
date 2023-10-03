<?php

include_once  __DIR__ .'/includes/header.php';
include_once __DIR__ . '/http.php';

?>


<div class="container">
    <div class="jumbotron bg-secondary">
        <h2 class="text-center text-light">API HERO</h2>
    </div>

    <!-- LISTA -->
    <div class="row">
        <div class="col">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Real name</th>
                        <th>Rating</th>
                        <th>Team Affiliation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     <?php 
                        foreach ($heroes['heroes'] as $hero): echo 
                    <<< HTML
                        <tr>
                        <td>$hero[name]</td>
                        <td>$hero[realname]</td>
                        <td>$hero[rating]</td>
                        <td>$hero[teamaffiliation]</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-warning">Editar</a>
                                <a href="#" class="btn btn-outline-danger">Apagar</a>
                            </div>
                        </td> 
                        </tr>
                    HTML;
                    endforeach; ?>
                </tbody>
            </table>
            <a href="addhero.php" class="btn btn-outline-primary">Add Hero</a>
        </div>
    </div>
</div>


<?php
include_once 'includes/footer.php';
?>