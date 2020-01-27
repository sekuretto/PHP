<html>

<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 3: Tehtävä 1</title>
</head>

<body>
    <?php
        // h3t1-basket-session.php
        session_start();
    ?>
    
    <link rel="stylesheet" href="tyyli.css" type="text/css">

    <div id='container'>
        <?php include('navbar.php');?>

        <h2>OstosKoriTori</h2>


        <div class="boxi">

            <p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>

            <a href="add-basket.php?id=passat"><img src="passat.jpg" width="350px" height="auto"></a>
            <a href="add-basket.php?id=multivan"><img src="multivan.jpg" width="350px" height="auto"></a>

        </div>

    </div>
</body>

</html>