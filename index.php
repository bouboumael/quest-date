<?php

$presentTime = new DateTime('', new DateTimeZone('Europe/Paris'));
$destinationTime  = new DateTime('1982-11-29 09:00', new DateTimeZone('Europe/Paris'));
$diff = $presentTime->diff($destinationTime);

$presentTimeMinutes = strtotime($presentTime->format('Y-m-d'));
$destinationTimeMinutes  = strtotime($destinationTime->format('Y-m-d'));
$carburant = ((($presentTimeMinutes - $destinationTimeMinutes) / 60) / 10000) < 0 ? ((($destinationTimeMinutes - $presentTimeMinutes) / 60) / 10000) : ((($presentTimeMinutes - $destinationTimeMinutes) / 60) / 10000);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to the future</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <h1>Back to the future</h1>
    <div class="col">
        <div class="m-0 row  bg-secondary col-12 pt-2">
            <div class="col-2 offset-1">
                <label for="month-destination" class="bg-danger text-light form-label col-12 text-center">MONTH</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="month-destination" value="<?= strtoupper($destinationTime->format('M')) ?>">
            </div>
            <div class="col-2">
                <label for="day-destination" class="bg-danger text-light form-label col-12 text-center">DAY</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="day-destination" value="<?= strtoupper($destinationTime->format('d')) ?>">
            </div>
            <div class="col-2">
                <label for="year-destination" class="bg-danger text-light form-label col-12 text-center">YEAR</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="year-destination" value="<?= strtoupper($destinationTime->format('Y')) ?>">
            </div>
            <div class="col-2">
                <label for="hour-destination" class="bg-danger text-light form-label col-12 text-center">HOUR</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="hour-destination" value="<?= strtoupper($destinationTime->format('H')) ?>">
            </div>
            <div class="col-2">
                <label for="min-destination" class="bg-danger text-light form-label col-12 text-center">MIN</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="min-destination" value="<?= strtoupper($destinationTime->format('i')) ?>">
            </div>
            <p class="bg-dark text-light text-center col-4 offset-4 mt-1">DESTINATION TIME</p>
        </div>
        <div class="row">
            <div class="col-12 border border-dark"></div>
        </div>
        <div class="row m-0 bg-secondary col-12 pt-3">
            <div class="col-2 offset-1">
                <label for="month-present" class="bg-danger text-light form-label col-12 text-center">MONTH</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="month-present" value="<?= strtoupper($presentTime->format('M')) ?>">
            </div>
            <div class="col-2">
                <label for="day-present" class="bg-danger text-light form-label col-12 text-center">DAY</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="day-present" value="<?= strtoupper($presentTime->format('d')) ?>">
            </div>
            <div class="col-2">
                <label for="year-present" class="bg-danger text-light form-label col-12 text-center">YEAR</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="year-present" value="<?= strtoupper($presentTime->format('Y')) ?>">
            </div>
            <div class="col-2">
                <label for="hour-present" class="bg-danger text-light form-label col-12 text-center">HOUR</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="hour-present" value="<?= strtoupper($presentTime->format('H')) ?>">
            </div>
            <div class="col-2">
                <label for="min-present" class="bg-danger text-light form-label col-12 text-center">MIN</label>
                <input type="text" class="bg-dark text-warning form-control text-center" id="min-present" value="<?= strtoupper($presentTime->format('i')) ?>">
            </div>
            <p class="bg-dark text-light text-center col-4 offset-4 mt-1">PRESENT TIME</p>
        </div>
        <div class="row mt-5">
            <p class="col-6 offset-3 text-center">Voyage de <?= $diff->y ?> an(s) - <?= $diff->m ?> mois - <?= $diff->d ?> jours - <?= $diff->h ?> heures - <?= $diff->i ?> minutes</p>
        </div>
        <div class="row">
            <p class="col-6 offset-3 text-center">
                Il faudra <?= ceil($carburant) ?> litre(s)
                <?php if (ceil($carburant) > 100) : ?>
                    soit un vrai gouffre xD
                <?php endif ?>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>