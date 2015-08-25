<?php include 'trans_comming_soon.php';

session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang']=0;
}
$language = $_SESSION['lang'];
?>

<?php include "view/header.php" ?>

<div id="language">
  <a href=".?lang=en">English</a> | <a href=".?lang=es">Español</a>
</div>

<div id="logo_name">
  <img src="img/logo_physics.png" width="70px"/>
  <h1>Solve Physics</h1>
</div>

<div id="main_text">
  <p>
    <?php echo $thankyou[$language] ?>
  </p>
</div>

<?php include "view/footer.php" ?>
