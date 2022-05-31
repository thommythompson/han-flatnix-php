<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fletnix - Privacy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon_64x64.png">
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <div class="flex-row about-body">
        <div>
            <h1>About Fletnix</h1>
            <p>Lorem Ipsum</p>
        </div>
        <div class="flex-column">
            <form action="" method="POST">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="text" id="inputTitle" nclass="form-control" placeholder="Title" required>
                <input type="textarea" id="inputMessage" class="form-control" placeholder="Message" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Send Message</button>
            </form>
        </div>
    </div>
    <?php
        include 'html/footer.php';
    ?>
</body>
</html>