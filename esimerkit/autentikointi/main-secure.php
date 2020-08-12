<?php
// main-secure.php
session_start();

// Jos käyttäjä ei ole kirjautunut, ohjataan kirjautumissisvulle:
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "login.php");

exit;
}

?>
<title>Sovelluksen kirjatumista vaativa pääsivu</title>
<style>
    * {background-color: #bbb;}
</style>

<?php include('navbar.php');?>

<p>
Terve <b><?php echo $_SESSION['uid']?></b>!
Olet autentikoitunut tämän harmaapohjaisen sivun käyttäjäksi
</p>