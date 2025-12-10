<html>
<link rel="stylesheet" href="styles.css">

<body>
    <div class=Questionare>

        <style>
            html {
                text-align: center;
            }
        </style>
        <?php



        $userName = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : 'Guest';

        $userEmail = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'No email provided';

        echo "<p>Hello, $userName. We welcome you to our community!.</p><br>";
        echo "Our newsletter will be sent to your email account $userEmail<br>";

        echo "<h3> Your chosen fate: </h3>";

        $monster = isset($_POST['monster']) && is_array($_POST['monster']) ? $_POST['monster'] : [];

        $selected_count = count($monster);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $vampCheked = in_array('vampire', $monster);
            $wereCheked = in_array('werewolf', $monster);

            if ($selected_count === 1) {
                if ($vampCheked) {
                    echo "<p>🧛<br> Be careful what you wish for, especially during the season of the dead.</p>";
                } else {
                    echo "<p>🐺<br>You can now howl at the moon..., but not so loud as to disturb the neighbors.";
                }
            } else {
                if ($selected_count === 0) {
                    echo "<p>You chose a path of boring, un-monstrous neutrality.</p>";
                } else {
                    echo "<p> You choose poorly. And will burn before the gates of hell</p>";
                }
            }
        }


        $selected_ally = isset($_POST['allies']) ? $_POST['allies'] : '';

        switch ($selected_ally) {
            case 'cats':
                echo "<p>😼<br> You chose Cats! Their judgment will be swift and silent.</p>";
                break;
            case 'dogs':
                echo "<p>🐶 <br> You chose Dogs! Prepare for loyalty and bitten socks.</p>";
                break;
            case 'parrots':
                echo "<p>🦜 <br> You chose Parrots! Your secrets are now public knowledge.</p>";
                break;
            default:
                echo "<p>Please, select a monster ally to begin your adventure.</p>";
                break;
        }

        ?>
    </div>

</body>

</html>