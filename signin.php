<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <div class="flex-row signin">
        <div class="flex-column text-center">
            <h1 class="title">Sing in</h1>
            <form action="" method="POST">
                <div class="flex-column">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'html/footer.php';
    ?>
</body>
</html>