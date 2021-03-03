<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
</head>
<body>
<div class="flex-container-background">
        <div class="flex-container-heading">
            <h1 id="contact">Come to visit us..</h1>
        </div>

        <div class="flex-container" style="border-bottom: 0;
                                           border-top-left-radius: 10px;
                                           border-top-right-radius: 10px;">
            <div class="flex-item">
                <h1 id="sub-contact">Corporate Headquarters</h1>
                <p id="sub-contact">
                    Cooperation<br>Dolphin Bank<br>
                    The Eastern and Southern Bank institutions<br>
                    The main Compasy on Dar es salaam Tanzania.
                </p>
            </div>
            <div class="flex-item">
                <h1 id="sub-contact">General Contact</h1>
                <p id="sub-contact">
                    Toll-Free: 888-968-6822<br>
                    Phone: 732-367-5505<br>
                    Fax: 732-367-2313<br>
                    Email: office@&#8203dolphinbank.com
                </p>
            </div>
        </div>

        <div class="flex-container" style="border-top: 0;
                                           border-bottom-left-radius: 10px;
                                           border-bottom-right-radius: 10px;">
            <div class="flex-item">
                <h1 id="sub-contact">Customer Care (24x7)</h1>
                <p id="sub-contact">
                    Toll-Free: 888-966-6992<br>
                    Phone: 732-666-5555<br>
                    Email: care@&#8203dolphinbank.com
                </p>
            </div>
            <div class="flex-item">
                <h1 id="sub-contact">Other branches in TZ.</h1>
                <p id="sub-contact">
                   1. Iringa Munispal, Kihesa-Kilolo<br>
                    2. Morogoro Town Msamvu near Bus Terminal<br>
                    3. Dodoma Main-city sabasaba.<br>
                    Get help to our customer care Dora ckogan on (24x7).
                </p>
            </div>
        </div>
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
