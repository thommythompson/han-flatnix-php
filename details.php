<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Movie Details</title>
    <?php 
        include 'html/head.php';
    ?>
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <div class="details-body flex-column padding-10vw">
        <div class="flex-row">
            <div>
                <img src="img/poster_skyfall.jpg">
            </div>
            <div class="flex-column gap-2vh padding-2vw">
                <div>
                    <h1>James Bond: Skyfall</h1>
                </div>
                <div>
                    <p>When James Bond's (Daniel Craig's) latest assignment goes gravely wrong and Agents around the world are exposed, MI6 is attacked, forcing (M Dame Judi Dench) to relocate the agency. These events cause her authority and position to be challenged by Gareth Mallory (Ralph Fiennes), the new Chairman of the Intelligence and Security Committee. With MI6 now compromised from both inside and out, M is left with one ally she can trust: Bond. 007 takes to the shadows, aided only by field agent, Miss Eve Moneypenny (Naomie Harris), following a trail to the mysterious Tiago Rodriguez, a.k.a. Raoul Silva (Javier Bardem), whose lethal and hidden motives have yet to reveal themselves.</p>
                </div>
                <div>
                    <ul>
                        <li><br>Director:</b></li>
                        <li><br>Cast:</b></li>
                        <li><br>Year:</b></li>
                        <li><br>Duration:</b></li>
                    </ul>
                </div>
                <div>
                    <a href="player.php">
                        <button>Watch Movie</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'html/footer.php';
    ?>
</body>
</html>