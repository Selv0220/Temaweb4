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
    <link href="css/styles.css" rel="stylesheet" type="text/css">
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

<div class="boks1">
    <div class="items">
        <a href="index.php" style="text-decoration: none;"> <img src="images/logo.png"> </a>
    </div>
    <div class="items1">
        <a href=" Advarsel.php" style="text-decoration: none;"><i class="fas fa-circle" style="color: red"></i>Advarsel:Snestorm</a>
    </div>

    <div class="items2">
        <a href="Information.php" style="text-decoration: none;">Information</a>
    </div>

    <div class="items3">
        <a href="Vejrkort.php" style="text-decoration: none;">Vejrkort</a>
    </div>

    <div class="items4">
        <a href="Varsler.php" style="text-decoration: none;">Varsler</a>
    </div>

    <div class="items5">
        <a href="Søg.php" style="text-decoration: none;">Søg...<i class="fas fa-search" style="color: black"></i></a>
    </div>
</div>

<div class="items6">
    <a1 href="Vælgby.php" style="text-decoration: none;"> Vælg by... <i class="fas fa-arrow-down"></i></a1>
</div>

<div class="boks2">
    <div class="items7">

    </div>
</div>

<div class="footer">
    <div class="foot1">
        <div> Presse og medier </div>
    </div>

    <div class="foot2">
        <div> Job og karriere </div>
    </div>

    <div class="foot3">
        <div> Om DMI </div>
    </div>

    <div class="foot4">
        <div> Kontakt </div>
    </div>

    <div class="foot5">
        <div> <a href="index.php" style="text-decoration: none;"> <img src="images/logo.png"> </a></div>
    </div>
</div>

</body>
</html>