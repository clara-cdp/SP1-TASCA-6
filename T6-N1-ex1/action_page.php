<?php
session_start();
?>

<html>
<link rel="stylesheet" href="styles.css">

<body>
    <div class=Questionare>

        <style>
            div {
                text-align: center;
            }
        </style>

        <?php

        $_SESSION['userName'] = !empty($_POST['userName']) ? htmlspecialchars($_POST['userName']) : '- GUEST -';
        $_SESSION['userEmail'] = !empty($_POST['userEmail']) ? htmlspecialchars($_POST['userEmail']) : '- No email provided -';


        echo "<h2>Hello " . $_SESSION['userName'] . "</h2><br>Once again...welcome to my house. Come freely. Go safely; and leave something of the happiness you bring.<br>";
        echo "<br>Our newsletter will be sent to " . $_SESSION['userEmail'] . "<br>";

        /* ------------------------------- vamps and allies ----------------------------------------*/

        echo "<p><bold> Your chosen fate: </bold></p>";

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
        <form action="form.php" method="post">
            <input class="button" type="submit" name="submit" value="RUN AWAY!">
        </form>

        <?php

        if (isset($_post["RUN AWAY!"])) {
            session_destroy();
            header("Location:form.php");
        }

        ?>
    </div>

</body>

</html>