<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 4</title>
</head>
<body>
    <?php
        $nappi = isset($_GET['lkm']) ? $_GET['lkm'] : 0;
        $nappi++;
        // http://netisto.fi/ttms0900-ttv18s3/harjoitukset/harjoitukset2.html
        // echo "Yksi kerta riittää";
        // echo "Kaksi kertaa riittää";
        // echo "Kolme kertaa riittää";
        // echo ""; 
        /* 
        $variable='myvalue';
        echo ‘<input type=”text” id=”username” value=”'.$variable.'”/>'; 
        */
    
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