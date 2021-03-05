<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body{
        background-image: url("images/Baggrund.jpg");
    }
</style>

<body>

<?php include "includes/navigation.php"; ?>

<div class="container justify-content-center">
    <div class="row"
    <div class="col-12 col-md-6 col-xl-2"><b>Cookies regler</b>
    </div>
</div>



<p class="fw">Vi hos DMI og vores tredjeparter bruger cookies til at øge brugbarheden og give dig en dejlig varm oplevelse på dmi.dk -
    Disse bliver også brugt til statistik og markedsføring.
    Du kan helt selv vælge hvilke cookies du vil til- og fravælge ved at klikke på disse knapper.
    Du vil altid kunne ændre på dit samtykke eller trække det helt tilbage (under privatliv, nederst på siden). </p>

<p class="fw">Cookie Deklarationen er sidst opdateret d. 24.02.2021</p>

<div class="container justify-content-center">
    <div class="row"
    <div class="col-12 col-md-6 col-xl-2"><b>Nødvendige:</b>
    </div>
</div>

<p class="fw">Disse cookies er nødvendige, for at denne DMI-website kan fungere optimalt.</p>

<div class="container justify-content-center">
    <div class="row"
    <div class="col-12 col-md-6 col-xl-2"><b>Funktionelle:</b>
    </div>
</div>

<p class="fw">Disse cookies er funktionelle, for at vi kan indsamle oplysninger, der hjælper med at finde ud af din foretrukne lokation og sprog.</p>

<div class="container justify-content-center">
    <div class="row"
    <div class="col-12 col-md-6 col-xl-2"><b>Statistisk:</b>
    </div>
</div>

<p class="fw">Disse cookies er statistiske, som bliver brugt til at forbedre brugervenlighed, samt design og hjælper med at styrke effektiviteten af websitet.</p>

<div class="container justify-content-center">
    <div class="row"
    <div class="col-12 col-md-6 col-xl-2"><b>Marketing:</b>
    </div>
</div>

<p class="fw">Disse cookies er markedsførende, de hjælper os og andre virksomheder til at undersøge hvilke produkter, tjenester og ydelser du interesserer dig for og vi skaber derefter annoncer ud fra det data.</p>

<div class="container justify-content-center">
    <div class="row"
    <div class="col-12 col-md-6 col-xl-2"><b>Uklassificerede:</b>
    </div>
</div>
<div class="h15">
    <div></div>
</div>
<p class="fw">Disse cookies er vi i færd med at kvalificere</p>

<?php include "includes/footer.php"; ?>

</body>
</html>