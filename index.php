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


        <!--Hvis mellerum øsnkes mellem boksene så brug g efter row
        Du kan vælge gy (ned ad) gx(til siden)
        Span ændre farve på tekst

        ved mobil col-12(1 boks, resten under)
        ved mellem col-md-6(2 ved siden af hinanden, resten under)
        ved stor col-xl-2(6 ved siden af hinanden)

        hvis jeg ønsker mellemrum mellem boksene:
        <div class="col">
        <div class=bg-primary">Test</div> -->
        <?php include "include/navigation.php"; ?>
        <?php include "include/footer.php"; ?>

        <div class="container rounded-pill border border-2 border-primary m-3">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-2">
                    <a href="Vælgby.php" style="text-decoration: none;" class="link-primary"> Vælg by... <i class="fas fa-arrow-down"></i></a>
                </div>
            </div>
        </div>

        <div class="container m-sm-1">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-2">
                    <a href="Vejrkort.php" style="text-decoration: none;"><img src="images/Temp1.png"></a>
                </div>
            </div>
        </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>