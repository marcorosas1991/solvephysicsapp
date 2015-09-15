<?php include 'trans_comming_soon.php';?>

<?php include "view/header.php" ?>

<div id="language">
  <a href=".?lang=en">English</a> | <a href=".?lang=es">Español</a>
</div>

<div id="logo_name">
  <img src="img/logo_physics.png" width="70px"/>
  <h1>Solve Physics</h1>
</div>

<div class="download_app">
  <a href="https://geo.itunes.apple.com/mx/app/solve-physics/id1033396034?mt=8" style="display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:165px;height:40px;"></a>
</div>

<div id="main_text">
  <p>
    <?php echo $description_1[$language] ?>
  </p>
  <p>
    <?php echo $description_2[$language] ?>
  </p>

  <?php if (isset($error)) : ?>
    <div class="errors">
      <p>
        <?php echo $error; ?>
      </p>
    </div>
  <?php endif; ?>

  <form action="." method="post">
    <input type="hidden" name="action" value="register">
    <label>email: </label>
    <input type="email" name="email" required/>
    <input type="submit" class="solid_green_button" name="submit" value="<?php echo $button_text[$language] ?>"/>
  </form>
</div>

<?php include "view/footer.php" ?>
