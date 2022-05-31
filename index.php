<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fletnix - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon_64x64.png">
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <header>
        <div class="flex-column header gap-2vh">
            <a class="flex-row" href="index.php">
                <h1 class="font-size-huge">FLETNIX</h1>
            </a>
            <div class="flex-row">
                <h2>All your favorite movies in one place<h2>
            </div>
            <div class="flex-row">
                <a href="overview.php">
                    <button>Watch Movies</button>
                </a>
            </div>
        </div>
    </header>
    <div class="highlighted-movie">
        <div>
            <img src="img/wallpaper_the_godfather.jpeg">
        </div>
        <div class="flex-column gap-2vh">
            <h1>The godfather</h1>
            <p>The aging patriarch of an organized crime dynasty in postwar New York City transfers control of his clandestine empire to his reluctant youngest son.</p>
            <a href="details.php">
                <button>Watch Movie</button>
            </a>
        </div>
    </div>
    <div class="highlighted-movie">
        <div>
            <img src="img/wallpaper_maverick.jpeg">
        </div>
        <div class="flex-column gap-2vh">
            <h1>Topgun</h1>
            <p>After more than thirty years of service as one of the Navy's top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him.</p>
            <a href="details.php">
                <button>Watch Movie</button>
            </a>
        </div>
    </div>
    <div class="highlighted-movie">
        <div>
            <img src="img/wallpaper_f_and_f.webp">
        </div>
        <div class="flex-column gap-2vh">
            <h1>Fast & Furious</h1>
            <p>Los Angeles police officer Brian O'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.</p>
            <a href="details.php">
                <button>Watch Movie</button>
            </a>
        </div>
    </div>
    <?php
        include 'html/footer.php';
    ?>
</body>
</html>