<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fletnix - About</title>
    <?php
        include 'html/head.php';
    ?>
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <div class="flex-row about-body">
        <div class="flex-column gap-2vh">
            <div>
                <h1>About Fletnix</h1>
                <p>Lorem Ipsum</p>
            </div>
            <div>
                <h1>Contact Info</h1>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
        </div>
        
        <div class="flex-column">
            <h1>Send us a message</h1>
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