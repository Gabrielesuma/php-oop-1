<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP</title>
</head>

<body>
    <main class="container">
        <h2 class="text-center">
            <?php
                $Carlito = new Movie('Carlito\'s way');
                echo $Carlito->title
            ?>
        </h2>
        <div>
            <?php
                $Carlito->getTitle();
            ?>
        <div>
        <div>
            <?php
                $alPacino = new Movie('Al Pacino');
                $alPacino->getActor();
            ?>
        </div>
        <h2 class="text-center">
            <?php
                $americanG = new Movie('American Gangster');
                echo $americanG->title
            ?>
        </h2>
        <div>
            <?php
                $americanG->getTitle();
            ?>
        </div>
        <div>
            <?php
                $denzel = new Movie('Denzel Washington');
                $denzel->getActor();
            ?>
        </div>
    </main>