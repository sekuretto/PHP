<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 1</title>
</head>
<body>
    <?php
        // muuttujat
        $on_vasy = '';
        $on_pe = '';
        $on_paapipi = '';
        
         if (isset($_POST['on_vasy'])) {
             echo "<strong>On väsy.</strong> ";
             $on_vasy = 'checked';
         }
         if (isset($_POST['on_paapipi'])) {
             echo "<strong>On pää kipiä.</strong> ";
             $on_paapipi = 'checked';
         }
         if (isset($_POST['on_pe'])) {
             echo "<strong>On perjantai.</strong> ";
             $on_pe = 'checked';
         }
    ?>

    <p></p>

    <!-- htmlspecialchars -function converts special characters to HTML entities -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p><strong>Mikä on?</strong><br> 
        <label>Väsy</label><input type="checkbox" name="on_vasy" value="väsy"><br/>
        <label>Pää kipiä</label><input type="checkbox" name="on_paapipi" value="pää kipiä"><br/>
        <label>Perjantai</label><input type="checkbox" name="on_pe" value="perjantai"><br/>
        <input type="submit" name="submit" value="Lähetä"/>
    </form>

</body>
</html>