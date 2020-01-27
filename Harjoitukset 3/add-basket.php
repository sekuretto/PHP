<html>

<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 3: Tehtävä 1/Ostoskori</title>
</head>

<body>
    <?php
        // h3t1-basket-session.php
        session_start();
    ?>
    
    <link rel="stylesheet" href="tyyli.css" type="text/css">

    <title>OstosKoriTorin ostoskorin sisältö</title>
    <div id='container'>
        <?php include('navbar.php');?>

        <h2>OstosKoriTorin ostoskorin sisältö</h2>


        <div class="boxi">

            <div>
                <img src="passat.jpg" width="350px" height="auto">Passat kpl
            </div>
            <div>
                <img src="multivan.jpg" width="350px" height="auto">Multivan kpl
            </div>
            
        </div>

    </div>
</body>

</html>