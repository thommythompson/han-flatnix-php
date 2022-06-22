<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Signin</title>
    <?php
        include 'html/head.php';
    ?>
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <div class="container container--narrow">
        <div class="text-center">
            <h2>Sign in</h2>
            <form action="" method="POST">
                <div>
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