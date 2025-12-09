<html>

<body>

    <?php $userName = htmlspecialchars($_POST['username']); //?? 'Guest');
    $userEmail = htmlspecialchars($_POST['email']); // ?? 'No email provided');

    echo "Hello, $userName. Welcome to our page!.<br>";
    echo "Your email $userEmail"; ?>

</body>

</html>