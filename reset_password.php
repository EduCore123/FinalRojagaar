<?php
session_start();

	if(isset($_POST["reset-password"])) {
		 include('connect.php');
		$sql = "UPDATE `jobportal`.`register` SET `password` = '" . md5($_POST["member_password"]). "' WHERE `register`.`username` = '" . $_GET["name"] . "'";
		$result = mysqli_query($conn,$sql);
    if(!$result)
    {
      $error_message="error";
    }
    else{
		$success_message = "Password is reset successfully.";

	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rojagaar Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

  <?php include 'header.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/f2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">

        <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="main.php"><?php echo $lang['home'] ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['login'] ?></span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['resetpassword'] ?></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Content -->
  <section>
    <div class="ftco-section contact-section bg-light">
      <div class="container">
        <h2><?php echo $lang['resetpassword'] ?></h2>
       <?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
  </div>

       <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
          <div class="form-group">
            <label for="Password"><?php echo $lang['npassword'] ?></label>
           <input type="password" name="member_password" id="member_password" class="form-control">
          </div>
          <div class="form-group">
          <label for="email"><?php echo $lang['cpassword'] ?></label>
          <input type="password" name="confirm_password" id="confirm_password"  class="form-control">
          </div>

        <input type="submit" name="reset-password" id="reset-password" value="<?php echo $lang['resetpassword'] ?>"  class="btn btn-primary">
          <button type="reset" class="btn btn-primary"><?php echo $lang['reset'] ?></button>
          <br>
          <a href="login.php">Back to login page </a> </p>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
<script>
function validate_password_reset() {
	if((document.getElementById("member_password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("member_password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}

	return true;
}
</script>
</body>

</html>
