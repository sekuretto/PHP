<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 3</title>
</head>
<body>
    <form method="post">
        <select name="aiheet[]" size="3" multiple>
            <option value="anime">Anime</option>
            <option value="musiikki">Musiikki</option>
            <option value="tietokoneet">Tietokoneet</option>
            <option value="uutiset">Uutiset</option>
            <option value="pelit">Pelit</option>
        </select>
        <br>

        <input type="submit" name="painike" value="Tulosta linkit">
        <br>
    </form>

    <?php
        // Check if form is submitted successfully 
        if(isset($_POST["painike"]))  
        { 
            // Check if any option is selected 
            if(isset($_POST["aiheet"]))  
            { 
                // Retrieving each selected option 
                foreach ($_POST['aiheet'] as $aihe)  {
                    if ($aihe == "anime") {
                        echo "Päivää animen ystävä, tässäpä muutama linkki<br/><ul><li><a href='https://anidb.net/'>AniDB</a></li><li><a href='https://horriblesubs.info/'>HorribleSubs</a></li></ul>";
                    } elseif ($aihe == "musiikki") {
                        echo "Päivää musiikin ystävä, tässäpä muutama linkki<br/><ul><li><a href='https://anidb.net/'>AniDB</a></li><li><a href='https://horriblesubs.info/'>HorribleSubs</a></li></ul>";
                    } elseif ($aihe == "tietokoneet") {
                        echo "Päivää tietokoneiden ystävä, tässäpä muutama linkki<br/><ul><li><a href='https://anidb.net/'>AniDB</a></li><li><a href='https://horriblesubs.info/'>HorribleSubs</a></li></ul>";
                    } elseif ($aihe == "uutiset") {
                        echo "Päivää uutisten ystävä, tässäpä muutama linkki<br/><ul><li><a href='https://anidb.net/'>AniDB</a></li><li><a href='https://horriblesubs.info/'>HorribleSubs</a></li></ul>";
                    } else {
                        echo "Päivää pelien ystävä, tässäpä muutama linkki<br/><ul><li><a href='https://anidb.net/'>AniDB</a></li><li><a href='https://horriblesubs.info/'>HorribleSubs</a></li></ul>";
                    }
                }
            } 
            else
                echo "Valitse jotain!!"; 
        } 
    ?>

</body>
</html>