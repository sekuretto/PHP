<?php
// sessio-v03.php

/*********************** Pääojelma ***********************/

session_start();

$aika_nyt     = '';
$vanha_aika   = '';
$kulunut_aika = '';

istunnon_tila($aika_nyt, $vanha_aika, $kulunut_aika);
tulosta_istuntodata($aika_nyt, $vanha_aika, $kulunut_aika);
nayta_painikkeet();

/*********************** Funktiot ***********************/

function istunnon_tila(&$aika_nyt,
                       &$vanha_aika, 
                       &$kulunut_aika) {

  $action = (isset($_REQUEST['action'])) ?
            $_REQUEST['action'] : '';
  $aika_nyt = time();
  if (isset($_SESSION['edellinen_aika'])) {
     $kulunut_aika = $aika_nyt - $_SESSION['edellinen_aika'];
  } else {
     $_SESSION['edellinen_aika'] = 0;
     $kulunut_aika = 0;
     $_SESSION['laskuri'] = 0;
  }

  // Edellinen aika talteen tulostamista varten.
  $vanha_aika = $_SESSION['edellinen_aika'];

  if (($action == "Sulje istunto")
       OR ($kulunut_aika > 10)) {
     poista_istunto_totaalisesti(); 
     echo "<h3>Istunto on suljettu</h3>";
  } else {
     $_SESSION['edellinen_aika'] = $aika_nyt;
     $_SESSION['laskuri']++;
     echo "<h3>Istunto auki. Vastaus nro." .
          "{$_SESSION['laskuri']}</h3>";
  }
}

function tulosta_istuntodata($aika_nyt, 
                             $vanha_aika, 
                             $kulunut_aika) {

if (!isset($_COOKIE['PHPSESSID'])) {
     $_COOKIE['PHPSESSID'] = '';
}

$minpit = 14;
$maxpit = 36;
$tayte = ".";

// Katso merkkijonojen muotoiluun liittyvät asiat
// merkkijonoja käsitelevästä luvusta:
$format = "%'$tayte-$minpit.$maxpit" . "s";
$format .= "%'$tayte" . "36s
";

echo "<pre>";
printf ($format, "Aika nyt", $aika_nyt);
printf ($format, "Vanha aika", $vanha_aika);
printf ($format, "Kulunut aika", $kulunut_aika);
printf ($format, ".", ".");
printf ($format, "session_id()", session_id());
printf ($format, '$PHPSESSID', $_COOKIE['PHPSESSID']);
echo "</pre>";
}

function nayta_painikkeet() {
?>
<hr>
<form action="<?php echo ($_SERVER['PHP_SELF'])?>" method="post">
<input TYPE="submit" name="action" value="Sulje istunto">
<input TYPE="submit" name="action"
value="Avaa/Jatka istuntoa">
</form>
<?php
}

// Poistetaan kaikki istuntoon liittyvä data
function poista_istunto_totaalisesti() {
   // Tyhjätään $_SESSION-taulukko
   $_SESSION = array();
   // Poistetaan istuntoon liittyvä eväste
   if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time()-86400, '/');
   }
   // Poistetaan itse istunto
   session_destroy();
}
?>