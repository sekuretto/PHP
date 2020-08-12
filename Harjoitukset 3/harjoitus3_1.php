<html>

<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 3: Tehtävä 1</title>
    <link rel="stylesheet" href="tyyli.css" type="text/css">
</head>

<body>
    <?php
        // h3t1-basket-session.php
        session_start();
        if (!isset($_SESSION['passat'])) $_SESSION['passat'] = 0;
        if (!isset($_SESSION['multivan'])) $_SESSION['multivan'] = 0;

        
    ?>

    <div id='container'>
        <?php include('navbar.php');?>

        <h2>OstosKoriTori</h2>

        <div class="boxi">
            <p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>

            <a href="add-basket.php?id=passat"><img src="passat.jpg" width="390px"></a>
            <a href="add-basket.php?id=multivan"><img src="multivan.jpg" width="390px"></a>
        </div>
    </div>
</body>

</html>