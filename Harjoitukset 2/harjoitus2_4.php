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
       /*  switch ($nappi)
        {
           case 1: // Jos muuttujan $action arvo on "summa", suoritetaan rivit:
                echo "Yksi kerta riittää";
                break;
           case 2:
                echo "Kaksi kertaa riittää";
                break;
           case 3:
                echo "Kolme kertaa riittää";
                $nappi = 0;
                break;
           default:
                echo "Virhe: Laskutoimitusta ei ole määritelty";
                break;
        } */

        /* 
        <?php
session_start();
if (isset($_POST)) // check button submission - do it with any way you like
{
    while(1)
    {
        $new_rand = rand();
        if($new_rand != $_SESSION['currText'])
        {
           $curr_text = $new_rand;
           $_SESSION['currText'] = $curr_text;
           echo "<button>$curr_text</button>";
           break;
        }
    }

}
else // and here is the first page request, when no button is clicked
{
    $new_rand = rand();
    $_SESSION['curr_text'] = $new_rand;
    echo "<button>$new_rand</button>";
}

?>

<?php      
        
        $messages = array("", "Yksi kerta riittaa", "Kaksi kertaa riittaa", "Kolme kertaa riittaa");
    
        session_start();
        if (isset($_GET['button'])){
        	$_SESSION['counter']++;
    	}
        $counter = ($_SESSION['counter']) % 4;
        
?>
<form method="get">
    <input type="submit" name="button" value="Paina minua">
    <input type="text" name="msg" value="<?php echo ($messages[$counter]); ?>">
</form>
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