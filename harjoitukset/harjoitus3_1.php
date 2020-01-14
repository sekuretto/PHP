<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 3: Tehtävä 1</title>
</head>
<body>
    <?php
        // http://netisto.fi/ttms0900-ttv18s3/harjoitukset/harjoitukset3.html
        session_start();
    
    ?>

    <title>OstosKoriTori</title>
    <link rel="stylesheet" href="harj3_1_tyyli.css" type="text/css">

    <title>OstosKoriTori</title>
    <div id='container'>
    <?php include('navbar.php');?>

    <h2>OstosKoriTori</h2>


    <div class="boxi">

    <p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>

    <a href="add-basket.php?id=passat"><img src="passat.jpg"></a>
    <a href="add-basket.php?id=multivan"><img src="multivan.jpg"></a>


    </div>

    </div>
</body>
</html>