<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 4</title>
</head>
<body>
    <?php
        session_start();

        // $_SESSION['lkm'] alustetaan ensimmäisellä kerralla
        if (!isset($_SESSION['lkm'])) {
            $_SESSION['lkm'] = 0;
        }

        $nappi = "";
        
        // if button is pressed, increment counter
        if(isset($_GET['painike'])) {
            $_SESSION['lkm']++;
            $nappi = "Olet ladannut sivun {$_SESSION['lkm']} kertaa!";
        }                    
    
        $hullunappi = <<< EONappi
        <form action="{$_SERVER['PHP_SELF']}" method="get">
            <input type="submit" name="painike" value="Paina minua">
            <input type="text" name="msg" value="$nappi">
        </form>
        EONappi;

        echo $hullunappi;
    ?>

</body>
</html>