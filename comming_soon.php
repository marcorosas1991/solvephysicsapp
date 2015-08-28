<?php include 'trans_comming_soon.php';?>

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

<div class="">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5DZX3QBV9ZLMS">
<table>
<tr><td><input type="hidden" name="on0" value="Subscription options">Subscription options</td></tr><tr><td><select name="os0">
	<option value="12 month subscription">12 month subscription : $8.99 USD - yearly</option>
	<option value="1 month subscription">1 month subscription : $0.99 USD - monthly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>

<?php include "view/footer.php" ?>
